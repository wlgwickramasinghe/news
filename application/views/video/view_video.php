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
							<li><a href="<?php echo base_url();?>index.php/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">View Video</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-12 col-md-10">


              <div class="panel panel-flat">
                 <div class="panel-heading">
                  <div class="col-lg-6"> 
                    <h5 class="text-semibold">Video List</h5> 
                  </div>

                  <div class="col-lg-6 text-right"> 
                    <!-- <button type="button" class="btn btn-primary btn-labeled btn-labeled-right" onclick="location.href='<?php echo base_url();?>index.php/drug/add_drug?page=drug'">Add New Category <b><i class="icon-plus2"></i></b></button> -->
                  </div>
               
              </div>    

                <div class="panel-body">
                </div>

                <table class="table datatable-column-search-selects">
                  <thead>
                    <tr>
							  <th>ID</th>
                              <th>Video</th>
                              <th>Video Link</th>
                              <th>Active</th>
                              <th hidden=""></th>
                              <th hidden=""></th>
                              <th class="text-center">Actions</th>
                          </tr>
                  </thead>
                  <tbody>
                      <!-- <?php print_r($country_list);?> -->
                  <?php 	for($i=0; $i < count($video_list);++$i){?>

                    <tr>
							  <td><?php echo $video_list[$i]['id']; ?></td>
                              <td><?php echo $video_list[$i]['video_name']; ?></td>
                              <td><?php echo $video_list[$i]['url']; ?></td>
                              <td><?php if($video_list[$i]['status']=='A'){echo "<span class='label label-success'>Active</span>";}else{echo "<span class='label label-danger'>Inactive</span>";} ?></td>
                              <td hidden=""></td>
                              <td hidden=""></td>

                      <td class="text-center">
                        <?php if($this->session->userdata('UserGroup') == 'Admin' || $this->session->UserGroup == "Doctor"){ ?>
                        <a class="btn border-info text-info-600 btn-flat btn-icon btn-rounded" href="<?php echo base_url();?>index.php/video/edit_video/<?php echo $video_list[$i]['id'];?>?page=drug"><i class="icon-pencil7"></i></a>
                      <?php } ?>
                       
                      </td>
                          </tr>
                  <?php  } ?>

                  </tbody>
                  <tfoot>
                    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td hidden=""></td>
                              <td hidden=""></td>
                              <td></td>


                          </tr>
                  </tfoot>
                </table>
              </div>


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
	         ?>assets/js/video/video.js"></script>
</body>
</html>
