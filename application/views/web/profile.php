<!DOCTYPE html>

<body>

<div class="preloader">
	<div class="preloader_image"></div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">

<!-- template sections -->

<?php
       $this->load->view('header/core_link');
    ?>
<?php                     
        include("header.php");
     
    ?> 

<section class="page_breadcrumbs cs parallax section_padding_25">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="highlight bold">Profile</h1>
				<ol class="breadcrumb">
					<li>
						<a href="">
							HomePage
						</a>
					</li>
					<li>
						<a href="#">Pages</a>
					</li>
					<li class="active">Profile</li>
				</ol>
			</div>
		</div>
	</div>
</section>

 <!-- <?php print_r($webuser_profile); ?> -->

    <!-- <?php echo $webuser_profile ?> -->

<!--      <?php for($i=0; $i < count($webuser_profile);++$i) { ?>   

<?php } ?> -->


<section class="ls topmargin_50 section_padding_30 bottommargin_30" id="services">
    <div class="container">
        <h4 class="bottommargin_30">My Profile</h4>
        <div class="row topmargin_30 bottommargin_30">
            <table class="table datatable-column-search-selects">
                <thead>
                    <tr>                       
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>E-mail</th>
                        <th hidden>User Post</th>                     
                        <th>User Name</th>
                        <th>Active</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i < count($webuser_profile);++$i){ ?>
                      <tr>                        
                        <td><?php echo $webuser_profile[$i]['user_title']." ".$webuser_profile[$i]['first_name']." ".$webuser_profile[$i]['last_name']; ?></td>
                        <td hidden><?php echo $webuser_profile[$i]['user_post']; ?></td>
                        <td><?php echo $webuser_profile[$i]['phone_number']; ?></td>
                        <td><?php echo $webuser_profile[$i]['email']; ?></td>             
                        <td><?php echo $webuser_profile[$i]['user_name']; ?></td>
                        <td><?php if($webuser_profile[$i]['active']==1){echo "<span class='label label-success'>Active</span>";}else{echo "<span class='label label-danger'>Inactive</span>";} ?></td>

                        <td class="text-center">                          
                          <button type="button" id="" onclick="load_edit_profile()" name="" class="theme_button wide_button color1">Edit Profile</button>
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
          
     
        <!-- </div> -->
    </div>
</div>
</section>

<section class="ls bottommargin_30 section_padding_30 columns_padding_10 columns_margin_10" id="web_edit_profile" hidden="true">
    <div class="container">

        <?php   for($i=0; $i < count($webuser_profile);++$i){?>
            <form class="contact-form row columns_padding_5" id="user_form" action="">
                    <input type="hidden" name="user_id" class="form-control" placeholder="" value="<?php echo $webuser_profile[$i]["id"] ?>">

                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">Title <span class="required">*</span></label>
                            <select name="user_title" class="form-control">
                    <option <?php if ($webuser_profile[$i]["user_title"] == "Mr." ) echo 'selected' ; ?> value="Mr.">Mr.</option>
                    <option <?php if ($webuser_profile[$i]["user_title"] == "Ms." ) echo 'selected' ; ?> value="Ms.">Ms.</option>
                    <option <?php if ($webuser_profile[$i]["user_title"] == "Mrs." ) echo 'selected' ; ?> value="Mrs.">Mrs.</option>
                    <option <?php if ($webuser_profile[$i]["user_title"] == "Dr." ) echo 'selected' ; ?> value="Dr.">Dr.</option>
                            </select>    
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">First Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="<?php echo ($webuser_profile[$i]["first_name"]);?>" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">Last Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="<?php echo ($webuser_profile[$i]["last_name"]);?>" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">Phone Number <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="<?php echo ($webuser_profile[$i]["phone_number"]);?>" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">E-mail <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="<?php echo ($webuser_profile[$i]["email"]);?>" name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">User Name <span class="required">*</span></label>
                          <input type="text" name="user_name" class="form-control" placeholder="Enter username" value="<?php echo $webuser_profile[$i]["user_name"];?>">
                             <!-- <input type="text"  size="30" value="Admission" name="user_group" id="user_group" class="hidden" placeholder="user group"> -->
                        </div>
                    </div>
                    <div class="col-sm-6" hidden="">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">User Group <span class="required">*</span></label>
                          <input type="text" name="user_group" class="form-control" placeholder="Enter usergroup" value=<?php echo $webuser_profile[$i]["user_group"];?>>
                             <!-- <input type="text"  size="30" value="Admission" name="user_group" id="user_group" class="hidden" placeholder="user group"> -->
                        </div>
                    </div> 
                    <div class="col-sm-6" >
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">Old Password <span class="required">*</span></label>
                          <input type="password" name="old_password" class="form-control" placeholder="Enter Old Password" value="">
                            
                        </div>
                    </div>
                    <div class="col-sm-6" >
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">New Password <span class="required">*</span></label>
                          <input type="password" name="new_password" class="form-control" placeholder="Enter New Password" value="">
                           
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name" class="sr-only">Confirm Password<span class="required">*</span></label>
                            <input type="Password" aria-required="true" size="30" name="confirm_password" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                   <div class="col-sm-6" hidden="">
                        <div class="contact-form-name">                           
                            <select class="form-control" name="user_group">
                                <option value="Admission">Admission</option>
                            </select>
                        </div>
                    </div>                
                    <div class="form-group hidden">
                        <label class="col-lg-3 control-label">Active</label>
                        <div class="col-lg-9">                                           
                            <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" name="active" checked="checked">
                        </div>
                    </div>                          
                    <div class="col-sm-12">        
                        <div class="contact-form-email">                
                            <div class="contact-form-submit topmargin_10">             
                                <button type="button" id="" onclick="user_update()" name="" class="theme_button wide_button color1">Update User</button>
                            </div>
                        </div>
                    </div>

                </form>

                <?php } ?>
</div>
</section>


<?php                     
        include("footer.php");
    ?> 

</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->

    <script type="text/javascript">

    function load_edit_profile(){
        $('#web_edit_profile').show();
        $('#hide_button').show();

        function edit_user($id){


        };
    }
 
    </script>
<!-- 
	<script src="<?php echo base_url();?>assets/js/web/js/compressed.js"></script> 
    <script src="<?php echo base_url();?>assets/js/web/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/user/user.js"></script>
    <script src="<?php echo base_url();?>assets/js/login/login.js"></script>  
    <script src="<?php echo base_url();?>assets/js/pages/login_validation.js"></script> -->

    <script src="<?php echo base_url();?>assets/js/web/js/compressed.js"></script> 
    <script src="<?php echo base_url();?>assets/js/web/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/login_validation.js"></script>
    <script src="<?php echo base_url();?>assets/js/login/login.js"></script>
    <script src="<?php echo base_url();?>assets/js/user/user.js"></script>
    <script src="<?php echo base_url();?>assets/js/appointment/appointment.js"></script>    

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
    <!-- <script type="text/javascript" src="pnotify.custom.min.js"></script> -->
<!-- <link href="pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" /> -->

		
	</body>

</html>