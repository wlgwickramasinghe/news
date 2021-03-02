<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('modals/modals.php');?>
<!-- Main sidebar -->
<div class="sidebar sidebar-main">
  <div class="sidebar-content">

    <!-- User menu -->
   <!--  <div class="sidebar-user">
      <div class="category-content">
        <div class="media">
          <a href="#" class="media-left"><img src="<?php echo base_url();?>/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
          <div class="media-body">
            <span class="media-heading text-semibold"><?php echo $this->session->userdata('FullName');?></span>
            <div class="text-size-mini text-muted">
              <i class="icon-pin text-size-small"></i> &nbsp;<?php echo $this->session->userdata('UserGroup');?>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /user menu -->

    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

          <!-- Main -->
          <?php $page = $this->input->get('page');
          if($this->session->UserGroup == "Admin" )
          {

          ?>
          <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
         

        <!--   <li class="<?php if (uri_string() == 'user' || $page == 'user') echo "active";?>">
            <a href="<?php echo base_url();?>index.php?/user/view_user?page=user"><i class="icon-users2"></i> <span>Users</span></a>         
          </li>  -->      
          
        <?php } ?>     

          <?php if($this->session->UserGroup == "Pharmacist" || $this->session->UserGroup == "Doctor" || $this->session->UserGroup == "Admin")
          { ?>

          <li class="<?php if (uri_string() == 'country' || $page == 'country') echo "active";?>">
            <a href="<?php echo base_url();?>index.php/drug/view_drug?page=drug"><i class="icon-droplet"></i> <span>Country</span></a>
            <ul>              
              <li class="<?php if (current_url() == base_url().'view_drug') echo "active";?>"><a href="<?php echo base_url();?>index.php/country/view_country?page=country">Country list </a></li>           
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/country/add_country?page=country">Add Country</a></li>
            </ul>
          </li>

            <li class="<?php if (uri_string() == 'category' || $page == 'category') echo "active";?>">
            <a href="<?php echo base_url();?>index.php/drug/view_drug?page=drug"><i class="icon-droplet"></i> <span>Category</span></a>
            <ul>              
              <li class="<?php if (current_url() == base_url().'view_drug') echo "active";?>"><a href="<?php echo base_url();?>index.php/category/view_category?page=category">Category list </a></li>          
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/category/add_category?page=category">Add Category</a></li>
            </ul>
          </li>

          <li class="<?php if (uri_string() == 'advertisment' || $page == 'advertisment') echo "active";?>">
            <a href="<?php echo base_url();?>index.php/drug/view_drug?page=drug"><i class="icon-droplet"></i> <span>Advertisements</span></a>
            <ul>              
              <li class="<?php if (current_url() == base_url().'view_drug') echo "active";?>"><a href="<?php echo base_url();?>index.php/advertisment/view_advertisment?page=advertisment">Ads list </a></li>          
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/advertisment/add_advertisment?page=advertisment">Add Ads</a></li>
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/advertisment/pending_advertisment?page=advertisment">Pending Ads</a></li>
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/advertisment/approved_advertisment?page=advertisment">Approved Ads</a></li>
            </ul>
          </li>

          <li class="<?php if (uri_string() == 'video' || $page == 'video') echo "active";?>">
            <a href="<?php echo base_url();?>index.php/drug/view_drug?page=drug"><i class="icon-droplet"></i> <span>Video</span></a>
            <ul>              
              <li class="<?php if (current_url() == base_url().'view_drug') echo "active";?>"><a href="<?php echo base_url();?>index.php/video/view_video?page=video">Video list </a></li>          
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/video/add_video?page=video">Add Video</a></li>
            </ul>
          </li>

           <li class="<?php if (uri_string() == 'video' || $page == 'news') echo "active";?>">
            <a href="<?php echo base_url();?>index.php/drug/view_drug?page=drug"><i class="icon-droplet"></i> <span>News</span></a>
            <ul>              
              <li class="<?php if (current_url() == base_url().'view_drug') echo "active";?>"><a href="<?php echo base_url();?>index.php/news/view_news?page=news">News list </a></li>          
              <li class="<?php if (current_url() == base_url().'view_dosage') echo "active";?>"><a href="<?php echo base_url();?>index.php/news/add_news?page=news">Add News</a></li>
            </ul>
          </li>

        <?php } ?>	

         

       </ul>
      </div>
    </div>
    <!-- /main navigation -->
  </div>
</div>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/components_modals.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/report/report.js"></script>
<!-- /main sidebar -->
