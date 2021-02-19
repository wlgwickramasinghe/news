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
							<li class="active">Edit User</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">


							<!-- <form class="form-horizontal form-validate-jquery" action="<?php //echo base_url();?>index.php/department/DepartmentRegister" method="POST"> -->
<form class="form-horizontal form-validate-jquery" action="#" id="user_form" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Users</h5>

									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter your User Details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
<?php 	for($i=0; $i < count($open_user);++$i){?>
												<div class="form-group">
													<label class="col-lg-3 control-label">Title <span class="text-danger">*</span></label>
													<div class="col-lg-9">
														<select data-placeholder="Select user title" required name="user_title" class="select">
															<option></option>

																<option <?php if ($open_user[$i]["user_title"] == "Mr." ) echo 'selected' ; ?> value="Mr.">Mr.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Ms." ) echo 'selected' ; ?> value="Ms.">Ms.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Mrs." ) echo 'selected' ; ?> value="Mrs.">Mrs.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Rev." ) echo 'selected' ; ?> value="Rev.">Rev.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Dr." ) echo 'selected' ; ?> value="Dr.">Dr.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Prof." ) echo 'selected' ; ?> value="Prof.">Prof.</option>
																<option <?php if ($open_user[$i]["user_title"] == "Hon." ) echo 'selected' ; ?> value="Hon.">Hon.</option>

														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">First Name<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="first_name" class="form-control" placeholder="Enter first name" value="<?php echo $open_user[$i]["first_name"]?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Last Name</label>
													<div class="col-lg-9">
														<input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo $open_user[$i]["last_name"]?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Phone Number<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="phone_number" class="form-control" placeholder="Enter Phone number" value="<?php echo $open_user[$i]["phone_number"]?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">E-mail<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="email" class="form-control" placeholder="Enter E-mail" value="<?php echo $open_user[$i]["email"]?>">
													</div>
												</div>

                        <!-- <div class="form-group">
                          <label class="col-lg-3 control-label">User Post <span class="text-danger">*</span></label>
                          <div class="col-lg-9">
                            <select data-placeholder="Select user title" required name="user_post" class="select">
                              <option></option>

                                <option <?php if ($open_user[$i]["user_post"] == "Admin" ) echo 'selected' ; ?> value="Doctor">Admin</option>
                                <option <?php if ($open_user[$i]["user_post"] == "Doctor" ) echo 'selected' ; ?> value="Doctor">Doctor</option>
                                <option <?php if ($open_user[$i]["user_post"] == "Pharmacist" ) echo 'selected' ; ?> value="Pharmacist">Pharmacist</option>
                                <option <?php if ($open_user[$i]["user_post"] == "LabTech" ) echo 'selected' ; ?> value="LabTech">LabTech</option>
                                <option <?php if ($open_user[$i]["user_post"] == "Admission" ) echo 'selected' ; ?> value="Admission">Admission</option>

                            </select>
                          </div>
                        </div> -->

                        <div class="form-group">
                          <label class="col-lg-3 control-label">User Group <span class="text-danger">*</span></label>
                          <div class="col-lg-9">
                            <select data-placeholder="Select user group" required name="user_group" class="select">
                              <option></option>

                              <option <?php if ($open_user[$i]["user_group"] == "Doctor" ) echo 'selected' ; ?> value="Doctor">Doctor</option>
                              <option <?php if ($open_user[$i]["user_group"] == "Nurse" ) echo 'Nurse' ; ?> value="Nurse">Nurse</option>
                              <option <?php if ($open_user[$i]["user_group"] == "Pharmacist" ) echo 'selected' ; ?> value="Pharmacist">Pharmacist</option>                             
                              <option <?php if ($open_user[$i]["user_group"] == "Admission" ) echo 'selected' ; ?> value="Admission">Admission</option>

                            </select>
                          </div>
                        </div>

												<div class="form-group">
													<label class="col-lg-3 control-label">User Name  <span class="text-danger">*</span></label>
													<div class="col-lg-9">
														<input type="text" name="user_name" class="form-control" placeholder="Enter username" value="<?php echo $open_user[$i]["user_name"]?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Active</label>
													<div class="col-lg-9">

															<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" <?php if($open_user[$i]["active"] == 1){ echo 'checked="checked"'; } ?> name="active">

													</div>
												</div>

                        <input type="hidden" name="user_id" class="form-control" placeholder="" value="<?php echo $open_user[$i]["id"] ?>">

											</div>

										<div class="text-right">
											<!-- <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button> -->
											<button type="button" onclick="update_user()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
                  <?php } ?>
									</div>
								</div>

							</form>

						</div>

						<div class="col-lg-5">



						</div>

					</div>
					<!-- /main charts -->


					<?php $this->load->view('header/footer.php');?>

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<script type = 'text/javascript' src = "<?php echo base_url();
	         ?>assets/js/user/user.js"></script>
</body>
</html>
