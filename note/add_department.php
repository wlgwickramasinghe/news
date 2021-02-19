<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!-- /theme JS files -->
<?php
  $this->load->view('header/header.php');
?>


	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
<?php   $this->load->view('header/side_bar.php');?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<!-- <div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Add Department</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div> -->

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url();?>index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Add Department</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
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
<form class="form-horizontal form-validate-jquery" action="#" id="departmentForm" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Department</h5>
										<div class="heading-elements">
											<ul class="icons-list">
																<li><a data-action="collapse"></a></li>
																<li><a data-action="reload"></a></li>
																<li><a data-action="close"></a></li>
															</ul>
														</div>
									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter your Department Details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">

												<div class="form-group">
													<label class="col-lg-3 control-label">Select Your Province<span class="text-danger">*</span></label>
													<div class="col-lg-9">
														<select data-placeholder="Select your province" required name="province" class="select">
															<option></option>

																<option value="Northern">Northern</option>
																<option value="North Western">North Western</option>
																<option value="Western">Western</option>
																<option value="North Central">North Central</option>
																<option value="Central">Central</option>
																<option value="Sabaragamuwa">Sabaragamuwa</option>
																<option value="Eastern">Eastern</option>
																<option value="Uva">Uva</option>
																<option value="Southern">Southern</option>

														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Head No<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="headNo" class="form-control" placeholder="Enter department name">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Head Name<span class="text-danger">*</label>
													<div class="col-lg-9">
														<input type="text" required name="headName" class="form-control" placeholder="Enter department head NO">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Address:</label>
													<div class="col-lg-9">
														<input type="text" name="address" class="form-control" placeholder="Enter department address">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 contrDepartment Searchingol-label">Contact Number:</label>
													<div class="col-lg-9">
														<input type="number" name="contact" class="form-control" placeholder="Enter department contact number">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Email:</label>
													<div class="col-lg-9">
														<input type="email" name="email" class="form-control" placeholder="eugene@kopyov.com">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Web Address:</label>
													<div class="col-lg-9">
														<input type="text" name="webAddress" class="form-control" placeholder="Enter department web address">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Remarks:</label>
													<div class="col-lg-9">
														<textarea rows="5" name="remarks" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
													</div>
												</div>
											</div>
										</fieldset>

										<fieldset>
											<legend class="text-semibold">
												<i class="icon-reading position-left"></i>
												Add asset person's details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo2">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo2">
												<div class="form-group">
													<label class="col-lg-3 control-label">Name</label>
													<div class="col-lg-9">
														<input type="text" name="personName" class="form-control" placeholder="Enter name">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Contact Number</label>
													<div class="col-lg-9">
														<input type="text" name="personCNumber" class="form-control" placeholder="Enter number">
													</div>
												</div>


													<div class="form-group">
													<label class="col-lg-3 control-label">Gender:</label>
													<div class="col-lg-9">
														<label class="radio-inline">
															<input type="radio" name="gender2" class="styled" checked="checked" value="0">
															Male
														</label>

														<label class="radio-inline">
															<input type="radio" name="gender2" class="styled" value="1">
															Female
														</label>
													</div>
																</div>

																<div class="form-group">
													<label class="col-lg-3 control-label">Remarks:</label>
													<div class="col-lg-9">
																							<textarea rows="5" name="personRemarks" cols="5" placeholder="" class="form-control"></textarea>
																						</div>
																</div>

															</div>
										</fieldset>

										<div class="text-right">
											<!-- <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button> -->
											<button type="button" onclick="create()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>

							</form>

						</div>

						<div class="col-lg-5">



						</div>

					</div>
					<!-- /main charts -->


					<?php include "header/footer.php"?>

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<script type = 'text/javascript' src = "<?php echo base_url();
	         ?>assets/js/department/department.js"></script>
</body>
</html>
