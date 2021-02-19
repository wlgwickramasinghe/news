<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<?php
       $this->load->view('header/core_link');
    ?>
		<script type="text/javascript">
			var base_url = "<?php echo base_url()?>"
		</script>


</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href=""><b><?php echo $this->session->userdata('HospitaName');?></b></a> -->

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">



				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url();?>/assets/images/placeholder.jpg" alt="">
						<span><?php echo $this->session->userdata('FullName');?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">

						<li><a href="<?php echo base_url();?>index.php/login/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>

							<input type="hidden" name="flashData" id="flashDataSuccess" class="form-control" placeholder="Enter number" value="<?php echo $this->session->flashdata('SUCCESSMSG'); ?>">


				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
