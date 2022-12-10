<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{	
		if ($this->session->userdata('logged_in')) {
            redirect(base_url('Home'));
        }
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama_peserta', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('code', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
		
		$vals = [
                // 'word' -> nantinya akan digunakan sebagai random teks yang akan keluar di captchanya
                    'word'          => substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4),
                    'img_path'      => './assets/images/captcha/',
                    'img_url'       => base_url('assets/images/captcha/'),
                    'img_width'     => 200,
                    'img_height'    => 50,
                    'expiration'    => 7200,
                    'word_length'   => 8,
                    'font_size'     => 26,
                    'img_id'        => 'Imageid',
                    'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    'colors'        => [
                            'background'=> [255, 255, 255],
                            'border'    => [255, 255, 255],
                            'text'      => [0, 0, 0],
                            'grid'      => [255, 40, 40]
                    ]
                ];

                $cap = create_captcha($vals);
                $this->session->set_userdata('captcha', $cap['word']);

                 $data = [
                    'captcha_time'  => $cap['time'],
                    'ip_address'    => $this->input->ip_address(),
                    'word'          => $cap['word']
                    ];

                $query = $this->db->insert_string('captcha', $data);
                $this->db->query($query);

                $data = [
                    'title'     => 'Registration',
                    'captcha'   => $cap['image'],
                    'jurusan' => $this->db->get('jurusan')->result(),
                ];

			$this->load->view('web/index',$data);

		} else {
            // validasinya success

            $nik        = htmlspecialchars($this->input->post('nik'));
            $nama_peserta  = htmlspecialchars($this->input->post('nama_peserta'));
            $email        = htmlspecialchars($this->input->post('email'));
            $code       = htmlspecialchars($this->input->post('code'));
            $captcha    = $this->session->userdata('captcha');

            if ($code == $captcha) {
                $this->_delete_captcha();               

                $cek_peserta = $this->db->get_where('peserta', ['nik' => $nik])->num_rows();
                if ($cek_peserta > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK Sudah terdaftar.!</div>');
                    redirect('Web');
                }else{

                    $data =[
                        'id_tahun'  => '6',
                        'tanggal_daftar' => date('Y-m-d'),
                        'nik'   => $nik,
                        'nama_peserta'  => $this->input->post('nama_peserta'),
                        'email'  => $this->input->post('email'),
                        'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                        'status'    => 'Y',
                    ];

                    $this->db->insert('peserta',$data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Silahkan Login.!</div>');
                    redirect('Web');
                }
            }else{

             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Captcha Salah!</div>');
            redirect('Web');
            }

           
        }
    }

     private function _delete_captcha()
    {
         

        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)
                ->delete('captcha');

        
    }

}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */