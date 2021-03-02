
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>

	html,body{
	
	background-size: cover;
	background-repeat: no-repeat;
	height: 100%;
	font-family: 'Numans', sans-serif;
	/*background-image:url("<?php echo base_url();?>assets/images/backgrounds/login1.jpg");*/
	
	
  	/*background: url("<?php echo base_url();?>assets/images/backgrounds/login1.jpg") center center cover no-repeat fixed;*/
	}
	.card{
	height: 370px;
	margin-top: 20px;
	margin-left: 750px;
	margin-bottom: 200px;
	width: 320px;
	box-shadow: 10px 20px 10px grey;
	 background-color: rgba(176,176,176,1) !important; 
	}

	/*img.animated-gif{
	  width: 75px;
	  height: 55px;
		margin-top: 140px;
		margin-left: 975px;
		border-radius: 8px;
		/* box-shadow: 5px 20px 10px grey; */
	}*/

	</style>
	<title></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login_validation.js"></script> -->
	<!-- /theme JS files -->

</head>


<!-- <div class="container"> -->
	<div class="d-flex justify-content-center h-100">
		<div class="">
			<!-- <body background="<?php echo base_url();?>assets/images/backgrounds/background.jpg"> -->
			<body class="login-container">

			 <?php echo isset($error) ? $error : ''; ?>
				<!-- Page container -->
				<div class="page-container ">
					<div class="text-center">
					<!-- <p><font size="7">Viva Mint Dentae Dental Surgery</font></p> -->
					</div>
					<!-- <div class="picture1"> -->	
				<!-- 		<img class="animated-gif" src="<?php echo base_url();?>assets/images/backgrounds/gi.gif"> 
  -->
					<!-- </div> -->
					<!-- Page content -->
					<div class="page-content">

						<!-- Main content -->
						<div class="content-wrapper">

								<!-- Content area -->
				<div class="content">

					 <!-- <body background="<?php echo base_url();?>assets/images/backgrounds/background.jpg">  -->
					<!-- Advanced login -->
					<form action="index.html">
						<div class="login-form">
							<div class="text-center">
								<div class="icon-object border-warning-400 text-warning-400"><i class="icon-user"></i></div>
								<h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Username" name="username" id="username" required="required">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

				<!-- 			<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" checked="checked">
											Remember
										</label>
									</div> -->

									<!-- <div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div> -->
							<!-- 	</div>
							</div>
 -->
							<div class="form-group">
								<button type="button" class="btn bg-blue btn-block" onclick="auth()">Login <i class="icon-arrow-right14 position-right"></i></button>
								<!-- <button type="submit" class="btn bg-blue btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button> -->
							</div>

						
							</form>
					<!-- /advanced login -->


					

				</div>
				<!-- /content area -->

						</div>
						<!-- /main content -->

					</div>
					<!-- /page content -->

				</div>

		</div>
	</div>
</div>
</body>
<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/login/login.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/notifications/pnotify.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/components_notifications_pnotify.js"></script>
</html>
