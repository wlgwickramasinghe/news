<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- /theme JS files -->
<?php include "header/header.php";?>
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
<?php include "header/side_bar.php"?>
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
							<li class="active">View Department</li>
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
						<div class="col-lg-12">


              <div class="panel panel-flat">
                <div class="panel-heading">
                  <h5 class="panel-title">Department Searching</h5>
                  <div class="heading-elements">
                    <ul class="icons-list">
                              <li><a data-action="collapse"></a></li>
                              <li><a data-action="reload"></a></li>
                              <li><a data-action="close"></a></li>
                            </ul>
                          </div>
                </div>

                <div class="panel-body">
                </div>

                <table class="table datatable-column-search-selects">
                  <thead>
                    <tr>
                              <th>Province</th>
                              <th>Head NO</th>
                              <th>Head Name</th>
                              <th>Address</th>
                              <th>Contact Number</th>
                              <th>Email</th>
                              <th>Web Address</th>
                              <th>Remarks</th>
                              <th class="text-center">Actions</th>
                          </tr>
                  </thead>
                  <tbody>

                  <?php 	for($i=0; $i < count($department_list);++$i){?>

                    <!-- print_r($department_list); -->

                    <tr title="Assets Person : <?php echo $department_list[$i]['personName'];?>,  Contact Number : <?php echo $department_list[$i]['personCNumber'];?>">
                              <td><?php echo $department_list[$i]['province']; ?></td>
                              <td><?php echo $department_list[$i]['headNo']; ?></td>
                              <td><?php echo $department_list[$i]['headName']; ?></td>
                              <td><?php echo $department_list[$i]['contact']; ?></td>
                              <td><?php echo $department_list[$i]['address']; ?></td>
                              <td><?php echo $department_list[$i]['email']; ?></td>
                              <td><?php echo $department_list[$i]['webAddress']; ?></td>
                              <td><?php echo $department_list[$i]['remarks']; ?></td>
                              <!-- <td><span class="label label-info">$320,800</span></td> -->
                      <td class="text-center">
                        <ul class="icons-list">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="edit"><a href="<?php echo base_url();?>index.php"><span class="label label-info"><i class="icon-wrench"></span></i><span class="label label-info"> Edit</span></a></li>
                              <li class="delete" id='<?php echo $department_list[$i]['id'];?>'><a href="#"><span class="label label-danger"><i class="icon-trash"></span></i><span class="label label-danger"> Delete</span></a></li>
                              <!-- <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li> -->
                            </ul>
                          </li>
                        </ul>
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
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
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
