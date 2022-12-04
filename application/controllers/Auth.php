<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{	
		if ($this->session->userdata('logged_in')) {
            redirect(base_url('Dashboard'));
        }

        

		$this->form_validation->set_rules('email', 'email', 'trim|required');
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

			$this->load->view('auth/login', $data);

		} else {
            // validasinya success


            $code       = $this->input->post('code');
            $captcha    = $this->session->userdata('captcha');

            if ($code == $captcha) {
                $this->_delete_captcha();
                $this->_login();
            }else{

             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Captcha Salah!</div>');
            redirect('auth');
            }

           
        }
	}

	private function _login()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $code       = $this->input->post('code');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row();

       
        // jika usernya ada
            if ($user) {
                // jika usernya aktif
                if ($user->is_active == "Y") {
                    // cek password
                    if (password_verify($password, $user->password)) {

                             $data = [    
                            'id_user'     => $user->id_user,                        
                            'email'       => $user->email,
                            'username'    => ucfirst($user->username),
                            'full_name'   => ucfirst($user->full_name),
                            'id_level'    => $user->id_level,
                            'image'       => $user->image,
                            'logged_in'   => TRUE
                            ];

                            $this->session->set_userdata($data);
                            
                            redirect('Dashboard');
                   
                   
                    } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Atau Password Salah!</div>');
                            redirect('auth');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda tidak aktif!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda tidak terdaftar!</div>');
                    redirect('auth');
            }
         
    }


    

    public function logout()
    {   
        $data = ['id_user','email','username','full_name','id_level','image','logged_in'];

        $this->session->unset_userdata($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil log out!</div>');
        redirect('auth');
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