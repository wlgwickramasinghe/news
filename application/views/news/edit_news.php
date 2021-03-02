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
							<li class="active">Edit News</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">
<form class="form-horizontal form-validate-jquery" action="#" id="news_form_edit" enctype="multipart/form-data" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">News</h5>

									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter News Details
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>
											<!-- <?php print_r($edit_news);?>   -->
											<div class="collapse in" id="demo1">
											<?php 	for($i=0; $i < count($edit_news);++$i){?>
												<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">News Title<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<input type="text" required name="title" class="form-control" value="<?php echo $edit_news[$i]["title"] ?>" placeholder="Enter News Title">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Content<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<input type="text" required name="content" class="form-control" value="<?php echo $edit_news[$i]["content"] ?>" placeholder="Enter News Content">
													</div>
												</div>

												<div class="form-group">
	<label class="col-lg-3 control-label">image</label>
	<div class="col-lg-9">
		<input type="file" name="image_file" value="<?php echo $edit_news[$i]["image"] ?>"  class="form-control"></br>
		<span class="label label-block label-danger">Select a new image if you need to change the exisiting image, otherwise keep blank</span>
	</div>
</br>	
</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Type<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<input type="text" required name="type" class="form-control" value="<?php echo $edit_news[$i]["type"] ?>" placeholder="Enter News Type">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-lg-3 control-label">News Category<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<select class="form-control" name="category">
														<option value="" selected disabled>Please select Category</option>
														<?php for($x=0; $x < count($category_list);++$x){?>

															<option value="<?php echo $category_list[$x]['id']; ?>"><?php echo $category_list[$x]['category']; ?>											
															</option>

														<?php } ?>
													</select> 
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Country<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<select class="form-control" name="country">
														<option value="" selected disabled>Please select Country</option>
														<?php for($y=0; $y < count($country_list);++$y){?>

															<option value="<?php echo $country_list[$y]['id']; ?>"><?php echo $country_list[$y]['country']; ?>											
															</option>

														<?php } ?>
													</select> 
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Language<span class="text-danger"> *</label>
													<div class="col-lg-3">
														<select class="form-control" name="language">
														<option value="" selected disabled>Please select Language</option>								
														
															<option value="Sinhala">Sinhala</option>
															<option value="English">English</option>
															<option value="Tamil">Tamil</option>		
																						
													</select> 
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Status</label>
													<div class="col-lg-9">
														<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" <?php if($edit_news[$i]["status"] == 'A'){ echo 'checked="checked"'; } ?> name="status">
													</div>
												</div>
									 		

											<input type="hidden" name="news_id" class="form-control" placeholder="" value="<?php echo $edit_news[$i]["id"] ?>">
										
											<div class="text-right">
											<button type="button" onclick="update_news()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
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
	         ?>assets/js/news/news.js"></script>
</body>
</html>
