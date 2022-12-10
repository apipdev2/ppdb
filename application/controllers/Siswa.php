<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		is_peserta();
		if ($this->session->userdata('logged_in')!= TRUE) {
			redirect(base_url('Login'));
		}

		$this->load->model('Peserta_model','pm');
		$this->load->model('Jurusan_model','js');
	}

	public function profile()
	{
		$id = $this->session->userdata('id_user');
		$data = [
			'title'=>'Data Profile',
			'peserta'=> $this->pm->getPesertaById($id)->row(),
		];
		$this->load->view('template/header_siswa',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('siswa/profile',$data);
		$this->load->view('template/footer',$data);
	}

	public function edit_profile()
	{
		$id = $this->session->userdata('id_user');

		$peserta = $this->pm->getSiswaById($id)->row();
		$upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/images/foto/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $peserta->image;
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/foto/'.$old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                   
                    
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

		$this->db->where('id_peserta',$id);
		$this->db->update('peserta',['image'=>$new_image]);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Disimpan!', 'success');</script>");
        	redirect('Siswa/profile');
	}

	

	public function d_pribadi()
	{	
		$id = $this->session->userdata('id_user');	
		$cek_pendaftaran = $this->db->get_where('peserta',['id_peserta'=>$id])->row();
		if ($cek_pendaftaran->status_pendaftaran != "Y") {
			$formulir = "readonly";
		}else{
			$formulir = " ";
		}
		$data = [
			'title'=>'Data Pribadi',
			'peserta'=> $this->pm->getSiswaById($id)->row(),
			'jurusan'	=> $this->js->getJurusan()->result(),
			'agama'		=> $this->db->get('tbl_agama')->result(),
			'kebutuhan'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ayah'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ibu'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'pendidikan_ayah'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_ibu'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_wali'	=> $this->db->get('tbl_pendidikan')->result(),
			'penghasilan'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_ayah'	=> $this->db->get('tbl_pekerjaan')->result(),
			'pekerjaan_ibu'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_ibu'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_wali'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_wali'	=> $this->db->get('tbl_penghasilan')->result(),
			'transportasi'	=> $this->db->get('transportasi')->result(),
			'tempat_tinggal' => ['Bersama Orang Tua','Wali','Kos','Asrama','Panti Asuhan'],
			'jarak' => ['Kurang Dari 1 KM', 'Lebih Dari 1 KM'],
			'formulir' => $formulir,
		];

		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama_peserta', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan1', 'required');
		$this->form_validation->set_rules('asal_sekolah', 'Asal sekolah', 'required');

		if ($this->form_validation->run()==false) {

		$this->load->view('template/header_siswa',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('siswa/data_pribadi',$data);
		$this->load->view('template/footer',$data);

		}else{	

			if ($cek_pendaftaran->status_pendaftaran != "Y") {
				$data =[
					'nik' 			 => htmlspecialchars($this->input->post('nik')),
					'nama_peserta'   =>htmlspecialchars( $this->input->post('nama_peserta')),				
					'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
					'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
					'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
					'id_jurusan'	 => htmlspecialchars($this->input->post('id_jurusan')),
					'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah')),
				];
			}else{
				$data =[
					'nik' 			 => htmlspecialchars($this->input->post('nik')),
					'nama_peserta'   => htmlspecialchars($this->input->post('nama_peserta')),				
					'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
					'nisn' => htmlspecialchars($this->input->post('nisn')),				
					'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
					'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir'),
					'no_registrasi_akta_lahir' => htmlspecialchars(this->input->post('no_registrasi_akta_lahir')),
					'agama' => htmlspecialchars($this->input->post('agama')),
					'berkebutuhan_khusus' => htmlspecialchars($this->input->post('berkebutuhan_khusus')),
					'alamat' => htmlspecialchars($this->input->post('alamat')),
					'tempat_tinggal' => htmlspecialchars($this->input->post('tempat_tinggal')),
					'moda_transportasi' => htmlspecialchars($this->input->post('moda_transportasi')),
					'anak_ke' => htmlspecialchars($this->input->post('anak_ke')),
					'no_kip' =>htmlspecialchars($this->input->post('no_kip')),
					'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp')),
					'email' => htmlspecialchars($this->input->post('email')),
					'tinggi_badan' => htmlspecialchars($this->input->post('tinggi_badan')),
					'berat_badan' => htmlspecialchars($this->input->post('berat_badan')),
					'jarak' => htmlspecialchars($this->input->post('jarak')),
					'jumlah_saudara_kandung' => htmlspecialchars($this->input->post('jumlah_saudara_kandung')),
					'id_jurusan'	 => htmlspecialchars($this->input->post('id_jurusan')),
					'jurusan2' => htmlspecialchars($this->input->post('jurusan2')),
					'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah')),
					'no_kk	' => htmlspecialchars($this->input->post('no_kk')),
				];
			}		

			


			$this->db->where('id_peserta',$id)->update('peserta',$data);

			$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Disimpan!', 'success');</script>");
        	redirect('Siswa/d_pribadi');
		}
	}

	public function d_ortu()
	{	
		$id = $this->session->userdata('id_user');
		$cek_pendaftaran = $this->db->get_where('peserta',['id_peserta'=>$id])->row();
		if ($cek_pendaftaran->status_pendaftaran != "Y") {
			$this->session->set_flashdata('message', "<script>swal('Info!', 'Silahkan Lakukan Pembayaran Formulir ke Panitia PPDB!', 'info');</script>");
	        	redirect('Home');
		}
		$data = [
			'title'=>'Data Orang Tua',
			'peserta'=> $this->pm->getSiswaById($id)->row(),
			'jurusan'	=> $this->js->getJurusan()->result(),
			'agama'		=> $this->db->get('tbl_agama')->result(),
			'kebutuhan'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ayah'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ibu'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'pendidikan_ayah'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_ibu'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_wali'	=> $this->db->get('tbl_pendidikan')->result(),
			'penghasilan'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_ayah'	=> $this->db->get('tbl_pekerjaan')->result(),
			'pekerjaan_ibu'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_ibu'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_wali'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_wali'	=> $this->db->get('tbl_penghasilan')->result(),
			'transportasi'	=> $this->db->get('transportasi')->result(),
			'tempat_tinggal' => ['Bersama Orang Tua','Wali','Kos','Asrama','Panti Asuhan'],
			'jarak' => ['Kurang Dari 1 KM', 'Lebih Dari 1 KM'],
		];

		

		$this->form_validation->set_rules('nama_ayah', 'Nama ayah', 'required');
		$this->form_validation->set_rules('tanggal_lahir_ayah', 'tanggal_lahir_ayah', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'required');
		$this->form_validation->set_rules('tanggal_lahir_ibu', 'tanggal_lahir_ibu', 'required');
		$this->form_validation->set_rules('no_ayah', 'No ayah', 'required');
		$this->form_validation->set_rules('no_ibu', 'No ibu', 'required');

		if ($this->form_validation->run()==false) {

		$this->load->view('template/header_siswa',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('siswa/data_orangtua',$data);
		$this->load->view('template/footer',$data);

		}else{			

			$data =[
				
				'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
				'nik_ayah' => htmlspecialchars($this->input->post('nik_ayah')),
				'tempat_lahir_ayah' => htmlspecialchars($this->input->post('tempat_lahir_ayah')),
				'tanggal_lahir_ayah' => htmlspecialchars($this->input->post('tanggal_lahir_ayah')),
				'pendidikan_ayah' => htmlspecialchars($this->input->post('pendidikan_ayah')),
				'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah')),
				'penghasilan_bulanan_ayah' => htmlspecialchars($this->input->post('penghasilan_bulanan_ayah')),
				'berkebutuhan_khusus_ayah' => htmlspecialchars($this->input->post('berkebutuhan_khusus_ayah')),
				'no_ayah' => htmlspecialchars($this->input->post('no_ayah')),
				'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
				'nik_ibu' => htmlspecialchars($this->input->post('nik_ibu')),
				'tempat_lahir_ibu' => htmlspecialchars($this->input->post('tempat_lahir_ibu')),
				'tanggal_lahir_ibu' => htmlspecialchars($this->input->post('tanggal_lahir_ibu')),
				'pendidikan_ibu' => htmlspecialchars($this->input->post('pendidikan_ibu')),
				'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu')),
				'penghasilan_bulanan_ibu' =>htmlspecialchars($this->input->post('penghasilan_bulanan_ibu')),
				'berkebutuhan_khusus_ibu' => htmlspecialchars($this->input->post('berkebutuhan_khusus_ibu')),
				'no_ibu' => htmlspecialchars($this->input->post('no_ibu')),
				
			];


			$this->db->where('id_peserta',$id)->update('peserta',$data);

			$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Disimpan!', 'success');</script>");
        	redirect('Siswa/d_ortu');
		}
	}

	public function d_wali()
	{	
		$id = $this->session->userdata('id_user');
		$cek_pendaftaran = $this->db->get_where('peserta',['id_peserta'=>$id])->row();
		if ($cek_pendaftaran->status_pendaftaran != "Y") {
			$this->session->set_flashdata('message', "<script>swal('Info!', 'Silahkan Lakukan Pembayaran Formulir ke Panitia PPDB!', 'info');</script>");
	        	redirect('Home');
		}
		$data = [
			'title'=>'Data Wali',
			'peserta'=> $this->pm->getSiswaById($id)->row(),
			'jurusan'	=> $this->js->getJurusan()->result(),
			'agama'		=> $this->db->get('tbl_agama')->result(),
			'kebutuhan'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ayah'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'kebutuhan_ibu'	=> $this->db->get('berkebutuhan_khusus')->result(),
			'pendidikan_ayah'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_ibu'	=> $this->db->get('tbl_pendidikan')->result(),
			'pendidikan_wali'	=> $this->db->get('tbl_pendidikan')->result(),
			'penghasilan'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_ayah'	=> $this->db->get('tbl_pekerjaan')->result(),
			'pekerjaan_ibu'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_ibu'	=> $this->db->get('tbl_penghasilan')->result(),
			'pekerjaan_wali'	=> $this->db->get('tbl_pekerjaan')->result(),
			'penghasilan_wali'	=> $this->db->get('tbl_penghasilan')->result(),
			'transportasi'	=> $this->db->get('transportasi')->result(),
			'tempat_tinggal' => ['Bersama Orang Tua','Wali','Kos','Asrama','Panti Asuhan'],
			'jarak' => ['Kurang Dari 1 KM', 'Lebih Dari 1 KM'],
		];

		

		$this->form_validation->set_rules('id_peserta', 'id_peserta', 'required');

		if ($this->form_validation->run()==false) {

		$this->load->view('template/header_siswa',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('siswa/data_wali',$data);
		$this->load->view('template/footer',$data);

		}else{			

			$data =[
				
				'nama_wali' => htmlspecialchars($this->input->post('nama_wali')),
				'nik_wali' => htmlspecialchars($this->input->post('nik_wali')),
				'tempat_lahir_wali' => htmlspecialchars($this->input->post('tempat_lahir_wali')),
				'pendidikan_wali' => htmlspecialchars($this->input->post('pendidikan_wali')),
				'pekerjaan_wali' => htmlspecialchars($this->input->post('pekerjaan_wali')),
				'tanggal_lahir_wali' => htmlspecialchars($this->input->post('tanggal_lahir_wali')),
				'penghasilan_bulanan_wali' => htmlspecialchars($this->input->post('penghasilan_bulanan_wali')),
				'no_wali' => htmlspecialchars($this->input->post('no_wali')),
				
			];


			$this->db->where('id_peserta',$id)->update('peserta',$data);

			$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Disimpan!', 'success');</script>");
        	redirect('Siswa/d_wali');
		}
	}

	public function d_berkas()
	{	
		$id = $this->session->userdata('id_user');
		$cek_pendaftaran = $this->db->get_where('peserta',['id_peserta'=>$id])->row();
		if ($cek_pendaftaran->status_pendaftaran != "Y") {
			$this->session->set_flashdata('message', "<script>swal('Info!', 'Silahkan Lakukan Pembayaran Formulir ke Panitia PPDB!', 'info');</script>");
	        	redirect('Home');
		}
		$data = [
			'title'=>'Data Berkas',
			'berkas' => $this->db->get_where('berkas',['id_peserta'=>$id])->result(),
		];

		$this->form_validation->set_rules('jenis_berkas', 'Jensi Berkas', 'required');

		if ($this->form_validation->run()==false) {

			$this->load->view('template/header_siswa',$data);
			$this->load->view('template/sidebar_siswa',$data);
			$this->load->view('siswa/data_berkas',$data);
			$this->load->view('template/footer',$data);
		}else{


			// cek jika ada gambar yang akan diupload
	        $cek_berkas = $this->db->get_where('berkas',[
					        	'id_peserta'=> $id,
					        	'jenis_berkas'=>$this->input->post('jenis_berkas')
					      ])->num_rows();

	        if ($cek_berkas > 0) {
	        	$this->session->set_flashdata('message', "<script>swal('info!', 'Data Sudah ada!', 'info');</script>");
        		redirect('Siswa/d_berkas');
	        }else{
	            $upload_image = $_FILES['image']['name'];

	            if ($upload_image) {

	                	$config['allowed_types'] = 'jpg|png';
		                $config['max_size']      = '2048';
		                $config['upload_path'] = './assets/images/foto/';

		                $this->load->library('upload', $config);

		                if ($this->upload->do_upload('image')) {
		                   
		                    $new_image = $this->upload->data('file_name');
		                    
		                } else {
		                    // echo $this->upload->dispay_errors();
		                    $this->session->set_flashdata('message', "<script>swal('Info!', 'File Terlalu Besar max : 2Mb!', 'error');</script>");
		                    redirect('Siswa/d_berkas');
		                }
		            }	

				$data =[
					
					'jenis_berkas' => htmlspecialchars($this->input->post('jenis_berkas')),
					'image' => $new_image,
					'id_peserta' => $id,
					
					
				];


				$this->db->insert('berkas',$data);

				$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Disimpan!', 'success');</script>");
	        	redirect('Siswa/d_berkas');
			}
		}
	}

	public function delete_berkas($id)
	{
		$id = decrypt_url($id);

		$berkas = $this->db->get_where('berkas',['id_berkas'=>$id])->row();

        unlink(FCPATH . 'assets/images/foto/'.$berkas->image);

        $this->db->where('id_berkas',$id);
        $this->db->delete('berkas');

        $this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('Siswa/d_berkas');
                    
	}

	public function change_password()
	{	
		$id = $this->session->userdata('id_user');
		$data = [
			'password'	    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		];
		$this->db->where('id_peserta',$id);
		$this->db->update('peserta',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('Home');
	}

	


	

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */