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
								<a href="#"><?= $title; ?></a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								
								<div class="card-body">


									<form action="" method="post">
										
												<input type="hidden" name="id_peserta" value="<?= $peserta->id_peserta; ?>">
												<div class="form-group">
														<label>Jenis Potongan</label>
														<select name="id_potongan" id="id_potongan" class="form-control">
															<option value="">Pilih</option>
														<?php foreach ($potongan as $potongan): ?>
														<?php if ($peserta->id_potongan == $potongan->id_potongan): ?>
														<option value="<?= $potongan->id_potongan; ?>" selected><?= $potongan->jenis_potongan; ?> |Rp. <?= number_format($potongan->nominal); ?></option>
														<?php else: ?>
														<option value="<?= $potongan->id_potongan; ?>"><?= $potongan->jenis_potongan; ?> |Rp. <?= number_format($potongan->nominal); ?></option>									
														<?php endif ?>
														<?php endforeach ?>
														</select>
													</div>

													


										<button class="btn btn-success float-right mt-3 ">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




	