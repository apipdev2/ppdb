			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $title; ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= base_url('Dashboard'); ?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('Peserta'); ?>">Peserta</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"><?= $title; ?></a>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									
								</div>
								
								<div class="card-body">

									
									<form action="" method="post">
										<div id="pribadi">
											<h2 class="text-center bg-info text-light">
												Data Pribadi
											</h2>
											<div class="row">

												<div class="col-md-6">

													<div class="form-group">
														<label>NISN</label>
														<input type="text" name="nisn" class="form-control">
													</div>

													<div class="form-group">
														<label>NIK</label>
														<input type="text" name="nik" class="form-control">
													</div>

													<div class="form-group">
														<label>No KK</label>
														<input type="number" name="no_kk" class="form-control">
													</div>


													<div class="form-group">
														<label>Nama Peserta</label>
														<input type="text" name="nama_peserta" class="form-control">
													</div>																									
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tempat_lahir" class="form-control">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tanggal_lahir" class="form-control">
													</div>

													<div class="form-group">
														<label>Jenis Kelamin</label>
														<select name="jenis_kelamin" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<option value="L">Laki-laki</option>
															<option value="P">Perempuan</option>
														</select>
													</div>

													<div class="form-group">
														<label>Agama</label>
														<select name="agama" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($agama as $agama): ?>								<option value="<?= $agama->agama; ?>"><?= $agama->agama; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Alamat</label>
														<textarea name="alamat" class="form-control"></textarea>
													</div>

													<div class="form-group">
														<label>Tempat Tinggal</label>
														<select name="tempat_tinggal" class="form-control">
															<option value="">Pilih</option>											
															<option value="Bersama orang Tua">Bersama orang Tua</option>
															<option value="Wali">Wali</option>
															<option value="Kos">Kos</option>
															<option value="Asrama">Asrama</option>
															<option value="Panti Asuhan">Panti Asuhan</option>
															
														</select>
													</div>

													<div class="form-group">
														<label>Jarak</label>
														<select name="jarak" class="form-control">
															<option value="" selected disabled="">Pilih</option>					
															<option value="Kurang Dari 1 KM">Kurang Dari 1 KM</option>
															<option value="Lebih Dari 1 KM">Lebih Dari 1 KM</option>
															
														</select>
													</div>

													<div class="form-group">
														<label>Moda Transportasi</label>
														<select name="moda_transportasi" class="form-control">
															<option value="">Pilih</option>
															<?php foreach ($transportasi as $ts): ?>
															<option value="<?= $ts->nama_transportasi; ?>"><?= $ts->nama_transportasi; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													

													
												</div>
												<div class="col-md-6">

													<div class="form-group">
														<label >Berkebutuhan Khusus</label>
														<select name="berkebutuhan_khusus" class="form-control">
															<option value="-" selected disabled="">Pilih</option>
															<?php foreach ($kebutuhan as $kebutuhan): ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Tinggi Badan (Cm)</label>
														<input type="number" name="tinggi_badan" class="form-control">
													</div>

													<div class="form-group">
														<label>Berat Badan (Kg)</label>
														<input type="number" name="berat_badan" class="form-control">
													</div>

													<div class="form-group">
														<label>Anak Ke-</label>
														<input type="number" name="anak_ke" class="form-control">
													</div>

													<div class="form-group">
														<label>Jumlah Saudara Kandung</label>
														<input type="number" name="jumlah_saudara_kandung" class="form-control">
													</div>

													<div class="form-group">
														<label>Pilih Jurusan (1)</label>
														<select name="id_jurusan" class="form-control">
															<option value="">Pilih</option>
															<?php foreach ($jurusan as $js): ?>
															<option value="<?= $js->id_jurusan; ?>"><?= $js->nama_jurusan; ?></option>
															<?php endforeach ?>
														</select>
													</div>	

													<div class="form-group">
														<label>Pilih Jurusan (2)</label>
														<select name="jurusan2" class="form-control">
															<option value="">Pilih</option>
															<?php foreach ($jurusan as $js): ?>
															<option value="<?= $js->nama_jurusan; ?>"><?= $js->nama_jurusan; ?></option>
															<?php endforeach ?>
														</select>
													</div>	

													<div class="form-group">
														<label>Asal Sekolah</label>
														<textarea name="asal_sekolah" class="form-control"></textarea>
													</div>

													<div class="form-group">
														<label>No KIP</label>
														<input type="text" name="no_kip" class="form-control">
													</div>

													<div class="form-group">
														<label>No Akta Lahir</label>
														<input type="text" name="no_registrasi_akta_lahir" class="form-control">
													</div>

													
													<div class="form-group">
														<label>No HP</label>
														<input type="number" name="no_hp" class="form-control">
													</div>

													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control">
													</div>

													<div class="form-group">
														<label>Seragam Jurusan</label>
														<select name="size_jurusan" id="" class="form-control">
														<option value="" selected="" disabled="">pilih</option>
														<?php foreach ($size_jurusan as $size): ?>
														<option value="<?= $size; ?>"><?= $size; ?></option>															
														<?php endforeach ?>
														</select>
													</div>
													<div class="form-group">
														<label>Seragam Olahraga</label>
														<select name="size_olahraga" id="" class="form-control">
														<option value="" selected="" disabled="">pilih</option>
														<?php foreach ($size_olahraga as $size): ?>
														<option value="<?= $size; ?>"><?= $size; ?></option>
															
														<?php endforeach ?>
														</select>
													</div>

													

												</div>
											</div>
										</div>

										<div id="ortu">
											<h2 class="text-center bg-info text-light">
												Data Orang Tua
											</h2>
											<div class="row">

												<div class="col-md-6">


													<div class="form-group">
														<label>NIK Ayah</label>
														<input type="text" name="nik_ayah" class="form-control">
													</div>

													<div class="form-group">
														<label>Nama Ayah</label>
														<input type="text" name="nama_ayah" class="form-control">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir Ayah</label>
														<input type="text" name="tempat_lahir_ayah" class="form-control">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir Ayah</label>
														<input type="date" name="tanggal_lahir_ayah" class="form-control">
													</div>

													<div class="form-group">
														<label>Pendidikan Ayah</label>
														<select name="pendidikan_ayah" class="form-control">
															<option value="" selected disabled="">Pilih Pendidikan</option>
															<?php foreach ($pendidikan_ayah as $p): ?>
																<option value="<?= $p->nama_pendidikan; ?>"><?= $p->nama_pendidikan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan Ayah</label>
														<select name="pekerjaan_ayah" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($pekerjaan as $pekerjaan): ?>					<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan Ayah</label>
														<select name="penghasilan_bulanan_ayah" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($penghasilan as $penghasilan): ?>					<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Ayah</label>
														<input type="number" name="no_ayah" class="form-control">
													</div>

													<div class="form-group">
														<label >Berkebutuhan Khusus Ayah</label>
														<select name="berkebutuhan_khusus_ayah" class="form-control">
															<option value="-" selected disabled="">Pilih</option>
															<?php foreach ($kebutuhan_ayah as $kebutuhan): ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php endforeach ?>
														</select>
													</div>

													

													
												</div>
												<div class="col-md-6">
													
													<div class="form-group">
														<label>NIK ibu</label>
														<input type="text" name="nik_ibu" class="form-control">
													</div>

													<div class="form-group">
														<label>Nama ibu</label>
														<input type="text" name="nama_ibu" class="form-control">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir ibu</label>
														<input type="text" name="tempat_lahir_ibu" class="form-control">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir ibu</label>
														<input type="date" name="tanggal_lahir_ibu" class="form-control">
													</div>

													<div class="form-group">
														<label>Pendidikan ibu</label>
														<select name="pendidikan_ibu" class="form-control">
															<option value="" selected disabled="">Pilih Pendidikan</option>
															<?php foreach ($pendidikan_ibu as $p): ?>
																<option value="<?= $p->nama_pendidikan; ?>"><?= $p->nama_pendidikan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan ibu</label>
														<select name="pekerjaan_ibu" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($pekerjaan_ibu as $pekerjaan): ?>					<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan ibu</label>
														<select name="penghasilan_bulanan_ibu" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($penghasilan_ibu as $penghasilan): ?>					<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Ibu</label>
														<input type="number" name="no_ibu" class="form-control">
													</div>

													<div class="form-group">
														<label >Berkebutuhan Khusus Ibu</label>
														<select name="berkebutuhan_khusus_ibu" class="form-control">
															<option value="-" selected disabled="">Pilih</option>
															<?php foreach ($kebutuhan_ibu as $kebutuhan): ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php endforeach ?>
														</select>
													</div>

												</div>
											</div>
										</div>

										<div id="wall">
											<h2 class="text-center bg-info text-light">
												Data Wali 
											</h2>
											<div class="row">

												<div class="col-md-6">


													<div class="form-group">
														<label>NIK Wali</label>
														<input type="text" name="nik_wali" class="form-control">
													</div>

													<div class="form-group">
														<label>Nama Wali</label>
														<input type="text" name="nama_wali" class="form-control">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir Wali</label>
														<input type="text" name="tempat_lahir_wali" class="form-control">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir Wali</label>
														<input type="date" name="tanggal_lahir_wali" class="form-control">
													</div>

													

													
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Pendidikan Wali</label>
														<select name="pendidikan_wali" class="form-control">
															<option value="" selected disabled="">Pilih Pendidikan</option>
															<?php foreach ($pendidikan as $p): ?>
																<option value="<?= $p->nama_pendidikan; ?>"><?= $p->nama_pendidikan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan Wali</label>
														<select name="pekerjaan_wali" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($pekerjaan_wali as $pekerjaan): ?>					<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan Wali</label>
														<select name="penghasilan_bulanan_wali" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($penghasilan_wali as $penghasilan): ?>					<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Wali</label>
														<input type="number" name="no_wali" class="form-control">
													</div>

												</div>
											</div>
										</div>

										
										

										<button class="btn btn-success float-right">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				function dp(){

					var x = document.getElementById("pribadi");
						if (x.style.display === "block") {
					        x.style.display = "none";					   
					    }else{
					    	x.style.display = "block";
					    }
				}

				function da(){

					var x = document.getElementById("ayah");
						if (x.style.display === "block") {
					        x.style.display = "none";					   
					    }else{
					    	x.style.display = "block";
					    }
				}
			</script>
