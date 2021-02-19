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
							<li class="active">Edit Advertisment</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">

<form class="form-horizontal form-validate-jquery" action="#" id="advertisment_form_edit" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Advertisment</h5>

									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter advertisment Details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
									<?php 	for($i=0; $i < count($edit_advertisment);++$i){?>
												<div class="form-group">
													<label class="col-lg-3 control-label">Advertisment Name<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="advertisment" class="form-control" value="<?php echo $edit_advertisment[$i]["ad_name"] ?>" placeholder="Enter Advertisment name">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Width<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="width" class="form-control" value="<?php echo $edit_advertisment[$i]["width"] ?>" placeholder="Enter Width">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Height<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="height" class="form-control" value="<?php echo $edit_advertisment[$i]["height"] ?>" placeholder="Enter Height">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Price<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="price" class="form-control" value="<?php echo $edit_advertisment[$i]["price"] ?>" placeholder="Enter Price">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-lg-3 control-label">Status</label>
													<div class="col-lg-9">
														<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" <?php if($edit_advertisment[$i]["status"] == 'A'){ echo 'checked="checked"'; } ?> name="status">
													</div>
												</div>

											<input type="hidden" name="advertisment_id" class="form-control" placeholder="" value="<?php echo $edit_advertisment[$i]["id"] ?>">
										
											<div class="text-right">
											<button type="button" onclick="update_advertisment()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
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
	         ?>assets/js/advertisment/advertisment.js"></script>
</body>
</html>
