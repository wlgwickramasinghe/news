<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- /theme JS files -->
<?php $this->load->view('header/header.php');?>
<!-- Page container -->
<div class="page-container">
	<!-- Page content -->
	<div class="page-content">
		<?php $this->load->view('header/side_bar.php');?>
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-default">

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url();?>index.php/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li class="active">Add User</li>
					</ul>

				</div>
			</div>
			<!-- /page header -->



			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">

					<div class="col-lg-7">

						<form class="form-horizontal form-validate-jquery" action="#" id="user_form" method="">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Users</h5>

								</div>

								<div class="panel-body">
									<fieldset>
										<legend class="text-semibold">
											<i class="icon-file-text2 position-left"></i>
											Enter User Details
											<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse in" id="demo">
											<div class="form-group">
												<label class="col-lg-3 control-label">Title <span class="text-danger">*</span></label>
												<div class="col-lg-9">
													<select data-placeholder="Select user title" required name="user_title" class="select2-selection--single select2-selection__rendered select">
														<option></option>
														<option value="Mr.">Mr.</option>
														<option value="Ms.">Ms.</option>
														<option value="Mrs.">Mrs.</option>										
														<option value="Dr.">Dr.</option>		
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">First Name<span class="text-danger">*</label>
												<div class="col-lg-9">
													<input type="text" required name="first_name" class="form-control" placeholder="Enter first name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Last Name</label>
												<div class="col-lg-9">
													<input type="text" name="last_name" class="form-control" placeholder="Enter last name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Phone Number<span class="text-danger">*</label>
												<div class="col-lg-9">
													<input type="text" required name="phone_number" class="form-control" placeholder="Enter Phone number">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">E-mail<span class="text-danger">*</label>
												<div class="col-lg-9">
													<input type="text" required name="email" class="form-control" placeholder="Enter E-mail">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">User Group<span class="text-danger">*</span></label>
												<div class="col-lg-9">
													<select data-placeholder="Select user group" required name="user_group" class="select">
														<option></option>
														<option value="Admin">Admin</option>
														<option value="Doctor">Doctor</option>
														<option value="Pharmacist">Pharmacist</option>			
														<option value="Admission">Admission</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">User Name<span class="text-danger">*</span></label>
												<div class="col-lg-9">
													<input type="text" name="user_name" class="form-control" placeholder="Enter username">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 contrDepartment Searchingol-label">Password<span class="text-danger">*</span></label>
												<div class="col-lg-9">
													<input type="password" name="password" class="form-control" placeholder="Enter password">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 contrDepartment Searchingol-label">Confirm Password<span class="text-danger">*</span></label>
												<div class="col-lg-9">
													<input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-3 control-label">Active</label>
												<div class="col-lg-9">							
													<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked" name="active">
												</div>
											</div>	
										</div>
											<div class="text-right">
												<button type="button" onclick="create_user()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
											</div>
									</div>

								</div>

							</form>

						</div>

					</div>
								
					<?php $this->load->view('header/footer.php');?>

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/user/user.js"></script>

	</body>

</html>
