
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- /global stylesheets -->

	<!-- Theme JS files -->

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/components_buttons.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>

	<!-- Form validation -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_validation.js"></script>

	<!-- Notification popup -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/notifications/pnotify.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/components_notifications_pnotify.js"></script>

	<!--Data table -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>

	<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/datatables_api.js"></script>

	<!-- Field limitatios -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_controls_extended.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/autosize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/formatter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/passy.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/inputs/maxlength.min.js"></script>

	<!-- DatePicker -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/picker_date.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<!-- Buttons -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/velocity/velocity.ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/buttons/spin.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/buttons/ladda.min.js"></script>

	<!-- Patient overview -->

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/echarts/echarts.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/echarts/theme/limitless.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/user_pages_profile.js"></script>

     <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/picker_date.js"></script>
	<!-- sidebar navigation -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script> 
   
</head>

