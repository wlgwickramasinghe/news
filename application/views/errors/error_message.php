<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- /theme JS files -->
<?php $this->load->view('header/header.php'); ?>
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
<?php $this->load->view('header/side_bar.php');?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-12">

								<?php
					if (isset($error)){
						echo '<div class="alert alert-danger"><b>ERROR:</b>'.$error.'</div>';
						exit;
					}
				?>

						</div>

						<div class="col-lg-5">



						</div>

					</div>
					<!-- /main charts -->


					<?php $this->load->view('header/footer.php'); ?>

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<script type = 'text/javascript' src = "<?php echo base_url();
	         ?>assets/js/patient/patient.js"></script>
</body>
</html>
