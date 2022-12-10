<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		if ($this->session->userdata('logged_in')) {
            redirect(base_url('Home'));
        }

        

		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

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
                    'title'     => 'Login Page',
                    'captcha'   => $cap['image']
                ];

			$this->load->view('login/login', $data);

		} else {
            // validasinya success


            $code       = $this->input->post('code');
            $captcha    = $this->session->userdata('captcha');

            if ($code == $captcha) {
                $this->_delete_captcha();
                $this->_login();
            }else{

             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Captcha Salah!</div>');
            redirect('Login');
            }

           
        }
	}

	private function _login()
    {
        $nik      = htmlspecialchars($this->input->post('nik'));
        $password   = htmlspecialchars($this->input->post('password'));
        $code       = htmlspecialchars($this->input->post('code'));

        $peserta = $this->db->get_where('peserta', ['nik' => $nik])->row();
        // var_dump(password_hash($password, PASSWORD_DEFAULT));
       // var_dump($peserta->password);
       // die();
        // jika usernya ada
            if ($peserta) {
                // jika usernya aktif
                if ($peserta->status == "Y") {
                    // cek password
                    if (password_verify($password, $peserta->password)) {

                             $data = [    
                            'id_user'     => $peserta->id_peserta,                        
                            'email'       => $peserta->email,
                            'nama_peserta'    => ucfirst($peserta->nama_peserta),
                            'image'       => $peserta->image,
                            'logged_in'   => TRUE
                            ];

                            $this->session->set_userdata($data);
                            
                            redirect('Home');
                   
                   
                    } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK Atau Password Salah!</div>');
                            redirect('Login');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda tidak aktif!</div>');
                        redirect('Login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda tidak terdaftar!</div>');
                    redirect('Login');
            }
         
    }

    // public function registration()
    // {
    //     $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required');

    //     if ($this->form_validation->run() == false) {
    //         $vals = [
    //             // 'word' -> nantinya akan digunakan sebagai random teks yang akan keluar di captchanya
    //                 'word'          => substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4),
    //                 'img_path'      => './assets/images/captcha/',
    //                 'img_url'       => base_url('assets/images/captcha/'),
    //                 'img_width'     => 200,
    //                 'img_height'    => 50,
    //                 'expiration'    => 7200,
    //                 'word_length'   => 8,
    //                 'font_size'     => 26,
    //                 'img_id'        => 'Imageid',
    //                 'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    //                 'colors'        => [
    //                         'background'=> [255, 255, 255],
    //                         'border'    => [255, 255, 255],
    //                         'text'      => [0, 0, 0],
    //                         'grid'      => [255, 40, 40]
    //                 ]
    //             ];

    //             $cap = create_captcha($vals);
    //             $this->session->set_userdata('captcha', $cap['word']);

    //              $data = [
    //                 'captcha_time'  => $cap['time'],
    //                 'ip_address'    => $this->input->ip_address(),
    //                 'word'          => $cap['word']
    //                 ];

    //             $query = $this->db->insert_string('captcha', $data);
    //             $this->db->query($query);

    //             $data = [
    //                 'title'     => 'Registration',
    //                 'captcha'   => $cap['image']
    //             ];

    //         $this->load->view('login/registration', $data);

    //     } else {
    //         // validasinya success

    //         $nik        = $this->input->post('nik');
    //         $code       = $this->input->post('code');
    //         $captcha    = $this->session->userdata('captcha');

    //         if ($code == $captcha) {
    //             $this->_delete_captcha();               

    //             $cek_peserta = $this->db->get_where('peserta', ['nik' => $nik])->num_rows();
    //             if ($cek_peserta > 0) {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK Sudah terdaftar.!</div>');
    //                 redirect('Login/registration');
    //             }else{

    //                 $data =[
    //                     'id_tahun'  => '6',
    //                     'tanggal_daftar' => date('Y-m-d'),
    //                     'nik'   => $nik,
    //                     'nama_peserta'  => $this->input->post('nama_peserta'),
    //                     'tempat_lahir'  => $this->input->post('tempat_lahir'),
    //                     'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
    //                     'asal_sekolah'  => $this->input->post('asal_sekolah'),
    //                     'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //                     'status'    => 'Y',
    //                 ];

    //                 $this->db->insert('peserta',$data);
    //                 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Silahkan Login.!</div>');
    //                 redirect('Login');
    //             }
    //         }else{

    //          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Captcha Salah!</div>');
    //         redirect('Login/registration');
    //         }

           
    //     }
    // }


    

    public function logout()
    {   
        $data = ['id_user','email','nama_peserta','image','logged_in'];

        $this->session->unset_userdata($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil log out!</div>');
        redirect('Login');
    }

    private function _delete_captcha()
    {
         

        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)
                ->delete('captcha');

        
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */