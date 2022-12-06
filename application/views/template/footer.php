			<footer class="footer">
				<div class="container-fluid">
				
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i></a>
					</div>				
				</div>
			</footer>
		</div>
		
		
	</div>
</div>
	<!--   Core JS Files   -->
	
	<script src="<?= base_url('assets/js/core/popper.min.js');?>"></script>
	<script src="<?= base_url('assets/js/core/bootstrap.min.js');?>"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js');?>"></script>
	<script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js');?>"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js');?>"></script>


	<!-- Chart JS -->
	<script src="<?= base_url('assets/js/plugin/chart.js/chart.min.js');?>"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js');?>"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url('assets/js/plugin/chart-circle/circles.min.js');?>"></script>

	<!-- Datatables -->
	<script src="<?= base_url('assets/js/plugin/datatables/datatables.min.js');?>"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js');?>"></script>

	<!-- Bootstrap wizard -->
	<script src="<?= base_url('assets/js/plugin/bootstrap-wizard/bootstrapwizard.js');?>"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js');?>"></script>
	<script src="<?= base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js');?>"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js');?>"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url('assets/js/atlantis.js');?>"></script>

	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
		});
	</script>

	<?php if ($this->session->userdata('message')): ?>
        <?php echo $this->session->userdata('message'); ?>
    <?php endif ?>

	
</body>
</html>