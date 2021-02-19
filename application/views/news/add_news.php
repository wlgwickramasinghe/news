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
							<li class="active">Add News</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-10">

<form class="form-horizontal form-validate-jquery" action="#" id="news_form" method="POST">
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

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">News Title<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<input type="text" required name="title" class="form-control" placeholder="Enter News Title">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Content<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<textarea name="content"  class="form-control" placeholder="Enter News Content" rows="5"></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Type<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<input type="text" required name="type" class="form-control" placeholder="Enter News Type">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">News Category<span class="text-danger"> *</label>
													<div class="col-lg-9">
														<select class="form-control" name="category">
														<option value="" selected disabled>Please select Category</option>
														<?php for($i=0; $i < count($category_list);++$i){?>

															<option value="<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?>											
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
														<?php for($i=0; $i < count($country_list);++$i){?>

															<option value="<?php echo $country_list[$i]['id']; ?>"><?php echo $country_list[$i]['country']; ?>											
															</option>

														<?php } ?>
													</select> 
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-lg-3 control-label">Status</label>
													<div class="col-lg-9">
														<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked" name="status">
													</div>
												</div>


										<div class="text-right">
											<button type="button" onclick="save_news()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>

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
