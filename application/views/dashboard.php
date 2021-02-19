<!-- Styles -->
<style>
#chartdiv {
	width: 100%;
	height: 500px;
}
#chartdiv1 {
  width: 100%;
  height: 500px;
}
</style>

<!-- Resources -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/amcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/pie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/animate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/export.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/js/charts/am/export.css" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/light.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/dashboard/dashboard.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/charts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/am/animated.js"></script>

<!-- Chart code -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
include "header/header.php";
			include "header/dashboard_link.php";
?>
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
<?php include "header/side_bar.php"?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<?php if($this->session->userdata('UserGroup') =="Admin" || $this->session->userdata('UserGroup') =="Doctor"){ ?>

						
					<div class="row">
						<div class="col-lg-4">
							<!-- Pending Appointments -->
							<div class="panel bg-teal-400">
								<div class="panel-body">
									<div class="heading-elements">
									</div>
									 <h1 class="no-margin"><?php echo $appointment_pending; ?></h1> 
									Pending Appointments
									<div class="text-muted text-size-small"></div>
								</div>
								<div class="container-fluid">
									<div id="members-online"></div>
								</div>
							</div>
							<!-- /Pending Appointments -->
						</div>
						<div class="col-lg-4">
							<!-- Members online -->
							<div class="panel bg-primary-400">
								<div class="panel-body">
									<div class="heading-elements">
									</div>
									 <h1 class="no-margin"><?php echo $patient_pending; ?></h1> 
									Today Pending Patients
									<div class="text-muted text-size-small"></div>
								</div>
								<div class="container-fluid">
								</div>
							</div>
							<!-- /members online -->
						</div>


						<div class="col-lg-4">
							<!-- Pharmacy Queue -->
							<div class="panel bg-success-400">
								<div class="panel-body">
									<div class="heading-elements">
									</div>
									<h1 class="no-margin"><?php echo $pharmacy_queue; ?></h1>
									Today's Pharmacy Queue
								</div>
								<div class="text-muted text-size-small"></div>
							</div>
							<!-- /Pharmacy Queue -->
						</div>
					</div>	

						<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-12">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>Drug Name</th>
												<th class="col-md-2">Formulation</th>
												<th class="col-md-2">Stock</th>
												<th class="col-md-2">Reorder Level</th>
												<th class="col-md-2">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr class="active border-double">
												<td colspan="5">Low Stock Drugs </td>
												<td class="text-right">
													<span class="progress-meter" id="today-progress" data-progress="30"></span>
												</td>
											</tr>
											<?php 	for($i=0; $i < count($low_stock_drugs);++$i){?>
											<tr>
												<td>
													<div class="media-left media-middle">
															<a href="<?php echo base_url();?>index.php/drug/edit_drug/<?php echo $low_stock_drugs[$i]['id'];?>" class="btn bg-pink-400 btn-rounded btn-icon btn-xs">
																D<span class="letter-icon"></span>
															</a>
													</div>
													<div class="media-left">
														<div class=""><a href="<?php echo base_url();?>index.php/drug/edit_drug/<?php echo $low_stock_drugs[$i]['id'];?>" class="text-default text-semibold"><?php echo $low_stock_drugs[$i]['name']; ?></a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-danger position-left"></span>
															Low Stock
														</div>
													</div>
												</td>
												<td><span class="text-muted"><?php echo $low_stock_drugs[$i]['formulation']; ?></span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i>  <?php echo $low_stock_drugs[$i]['stock']; ?></span></td>
												<td><span class="text-info"></i>  <?php echo $low_stock_drugs[$i]['reorder_level']; ?></span></td>
												<td><span class="label bg-danger">Low</span></td>

											</tr>
										<?php } ?>

										</tbody>
									</table>

								</div>
							</div>
							<!-- /marketing campaigns -->


						</div>


					</div>
					<!-- /dashboard content -->

					
					<div class="row">

					<div class="col-md-6">
						<div class="panel panel-flat">
							<div class="pull-right" style="margin-top: 15px;margin-right: 10px;">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-calendar5"></i></span>
										<input type="text" class="form-control pickadate" placeholder="Select Date&hellip;" onchange="gen_pie_chart(this.value)">
								</div>
							</div>
							<div id="chartdiv"></div>
						</div>
					</div>

					<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="pull-right" style="margin-top: 15px;margin-right: 10px;">
								</div>
								<div id="chartdiv1"></div>
							</div>
					</div>

				</div>
				<?php } ?>

					<?php include "header/footer.php"?>
					<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/c3/c3.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets/js/charts/c3/c3_bars_pies.js"></script>


				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/dashboard/dashboard.js"></script>
<script type="text/javascript">

  // var timeout = setTimeout("location.reload(true);",10000);
  // function resetTimeout() {
  //   clearTimeout(timeout);
  //   timeout = setTimeout("location.reload(true);",10000);
  // }
</script>
</html>
