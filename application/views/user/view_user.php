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

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url();?>index.php/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">View User</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-12">

              <div class="panel panel-flat">

              <div class="panel-heading">
                  <div class="col-lg-6"> 
                    <h5 class="text-semibold">User List</h5> 
                  </div>

                  <div class="col-lg-6 text-right"> 
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-right" onclick="location.href='<?php echo base_url();?>index.php/user?page=user'">Add New User <b><i class="icon-plus2"></i></b></button>
                  </div>
               
              </div>               

                <div class="panel-body">
                </div>

                <table class="table datatable-column-search-selects">
                  <thead>
                    <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Phone No</th>
                              <th>E-mail</th>
                              <th hidden>User Post</th>
                              <th>User Group</th>
                              <th>User Name</th>
                              <th>Active</th>
                              <th class="text-center">Actions</th>
                          </tr>
                  </thead>
                  <tbody>

                  <?php 	for($i=0; $i < count($user_list);++$i){?>
                      <tr>
                          <td><?php echo $user_list[$i]['id']; ?></td>
                          <td><?php echo $user_list[$i]['user_title']." ".$user_list[$i]['first_name']." ".$user_list[$i]['last_name']; ?></td>
                          <td hidden><?php echo $user_list[$i]['user_post']; ?></td>
                          <td><?php echo $user_list[$i]['phone_number']; ?></td>
                          <td><?php echo $user_list[$i]['email']; ?></td>
													<td><?php echo $user_list[$i]['user_group']; ?></td>
                          <td><?php echo $user_list[$i]['user_name']; ?></td>
													<td><?php if($user_list[$i]['active']==1){echo "<span class='label label-success'>Active</span>";}else{echo "<span class='label label-danger'>Inactive</span>";} ?></td>

                      <td class="text-center">
												<?php if($this->session->userdata('UserGroup') == 'Admin'){ ?>
											 	<a class="btn border-info text-info-600 btn-flat btn-icon btn-rounded" href="<?php echo base_url();?>index.php/user/edit_user/<?php echo $user_list[$i]['id'];?>?page=user"><i class="icon-database-edit2"></i></a>
                        <?php } ?>
												<!-- <a class="btn border-warning text-warning-600 btn-flat btn-icon btn-rounded" id='<?php echo $user_list[$i]['id'];?>'><i class="icon-bin2"></i></a> -->
                         </td>
                      </tr>
                  <?php  } ?>

                  </tbody>
                  <tfoot>
                    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td hidden></td>
                              <td></td>
                              <td></td>
                              <td hidden></td>
                              <td hidden></td>

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
	         ?>assets/js/user/user.js"></script>
</body>
</html>
