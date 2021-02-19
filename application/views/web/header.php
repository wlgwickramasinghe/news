
<head>
	<title>Viva Mint Dentae</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/animations.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/fonts.css">
	<script src="<?php echo base_url();?>assets/js/web/js/vendor/modernizr-2.6.2.min.js"></script>
	
	
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<?php $page = $this->input->get('page'); 
// echo $page;
?>

<header class="page_header header_white header_transparent table_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<!-- <a href="index.php" class="logo top_logo"> -->
			    	<!-- <span class="logo-image"></span> -->
			    	<h4><a href="<?php echo base_url();?>index.php/web/index?$page=Home">Viva Mint Dentae</h4></a>
				</a>
				<!-- header toggler -->
				<span class="toggle_menu"><span></span></span>
			</div>
			<div class="col-lg-8 col-md-6 text-right">
                				<!-- main nav start -->
				<nav class="mainmenu_wrapper">
					<ul class="sf-menu">
						<!-- <li class="<?php if (uri_string() == 'Home' || $page == 'Home') echo "active";?> ">
							<a href="<?php echo base_url();?>index.php/web/index?$page=Home">Home</a>
						</li> -->
											
						<!-- services -->
						<li>
							<a <?php if($page == 'services'){ ?> class="list-group-item active"<?php } ?> href="<?php echo base_url();?>index.php/web/services?page=services">Services</a>
						</li>
						<!-- eof services -->

						<!-- appointment -->
						<!-- <li>
							<a href="<?php echo base_url();?>index.php/web/appointment">Appointment</a>
						</li> -->
						<!-- eof appointment -->
						<li><?php 
								$UID = $this->session->userdata('UID');
								if(isset($UID)){
							echo "<h6><a href='". base_url()."index.php/web/load_appointment'>Appointments</a></h6>";
						
						}
							else{
								// echo"<h6><a href='appointment'>Book appointment</a></h6>";
							}	
						 ?>
						</li>

						<!-- appointment -->
						<!-- <li>
							<a href="<?php echo base_url();?>index.php/web/about">about</a>
						</li> -->
						<!-- eof appointment -->

						<!-- contacts -->       
						<li>
							<a  <?php if($page == 'contact'){ ?> class="list-group-item active"<?php } ?>href="<?php echo base_url();?>index.php/web/contact?page=contact">contact</a>							
						</li>
						<li><a <?php if($page == 'profile'){ ?> class="list-group-item active" <?php } ?> href="<?php echo base_url();?>index.php/web/profile?page=profile">My Profie<!-- <?php echo $this->session->userdata('FullName');?> --></a></li>
						<li>
							<?php 
								$UID = $this->session->userdata('UID');
								if(isset($UID)) {						
									echo "<a href='logout'>Logout</a>";
								} 
									else {
									// echo "<h6><a href='".base_url()."index.php/web/web_login'>Login / Signup</a></h6>";
										echo "<h6><a href='web_login'>Login / Signup</a></h6>";
								}
							?>
						</li>
					</ul>
				</nav>
		</div>

<!-- <clear fix> -->

			<!-- <div class="col-lg-3 col-md-4 col-xs-6">							    	
			    	<h6><?php echo $this->session->userdata('FullName');?></h6>
			    	
			<ul class="sf-menu">
				<li>
					<?php 
						$UID = $this->session->userdata('UID');
						if(isset($UID)) {						
							echo "<a href='logout'>Logout</a>";
						} 
							else {
							echo "<h6><a href='appointment'>Login</a></h6>";
						}
					?>
				</li>
			</ul>
			</div> -->
		<!-- 	<ul>
				<li><a href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>
			</ul> -->
									
						

						<!-- eof contacts -->						
						
			
				<!-- eof main nav -->
			
		</div>
	</div>
</header>