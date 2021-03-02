<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- /theme JS files -->
<?php $this->load->view('header/header.php'); ?>
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
<?php $this->load->view('header/side_bar.php'); ?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url();?>index.php/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Edit Country</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">

<form class="form-horizontal form-validate-jquery" action="#" id="country_form_edit" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Country</h5>

									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter Country Details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
<?php 	for($i=0; $i < count($edit_country);++$i){?>
												<div class="form-group">
													<label class="col-lg-3 control-label">Country Name<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="country" class="form-control" value="<?php echo $edit_country[$i]["country"] ?>" placeholder="Enter country name">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-lg-3 control-label">Status</label>
													<div class="col-lg-9">
														<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" <?php if($edit_country[$i]["status"] == 'A'){ echo 'checked="checked"'; } ?> name="status">
													</div>
												</div>

											<input type="hidden" name="country_id" class="form-control" placeholder="" value="<?php echo $edit_country[$i]["id"] ?>">
										
											<div class="text-right">
											<button type="button" onclick="update_country()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
<?php }?>
							</form>

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
	         ?>assets/js/country/country.js"></script>
</body>
</html>
