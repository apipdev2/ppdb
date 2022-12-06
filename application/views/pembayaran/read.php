	<table id="datatables" class="display table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>No Pendaftaran</th>
				<th>Tanggal</th>
				<th>Nama Peserta</th>
				<th>JK</th>
				<th>Jurusan</th>
				<th>Jenis</th>
				<th>Pembayaran</th>
				<th>#</th>
			</tr>
		</thead>											
		<tbody>
			<?php $no=1; foreach ($du as $du): ?>
			
			<tr>
				<td><?= $no; ?></td>
				<td><?= $du->no_pendaftaran; ?></td>
				<td><?= date('d-m-Y',strtotime($du->tgl_bayar)); ?></td>
				<td><?= $du->nama_peserta; ?></td>
				<td><?= $du->jenis_kelamin; ?></td>
				<td><?= $du->nama_jurusan; ?></td>
				<td><?= $du->jenis_pembayaran; ?></td>
				<td>Rp.<?= number_format($du->besarnya_pembayaran); ?></td>
				
				<td>
					<a href="<?= base_url('Transaksi_pembayaran/kwitansi_du/'.encrypt_url($du->id)); ?>" class="fas fa-print text-info" target="_blank"></a>
					<?php if ($this->session->userdata('id_level')==1): ?>
						<a href="<?= base_url('Transaksi_pembayaran/delete/'.encrypt_url($du->id)); ?>" class="fas fa-trash text-danger"></a>
					
					<?php endif ?>
				</td>
			</tr>
		
		<?php $no++; endforeach ?>
		</tbody>
	</table>

	<script>
		$(document).ready(function() {
			$('#datatables').DataTable({
			});
		});
	</script>

		


