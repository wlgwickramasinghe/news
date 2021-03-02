<!DOCTYPE html>
<html lang="en-US" data-bt-theme="Bold News 1.4.0">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>News Web</title>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script type="text/javascript" src="<?php echo base_url();?>assets/css/js/jquery.js"></script>
  <!-- Popper Jquery -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- Owl Carousel -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/css/js/owl.carousel.min.js"></script>
  <!-- Color box -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/css/js/jquery.colorbox.js"></script>
  <!-- Smoothscroll -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/css/js/smoothscroll.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/css/js/popper.min.js"></script>

  <!-- Template custom -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/css/js/custom.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/owl.theme.default.min.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/colorbox.css">
<style type="text/css">
img.wp-smiley,
img.emoji {
display: inline !important;
border: none !important;
box-shadow: none !important;
height: 1em !important;
width: 1em !important;
margin: 0 .07em !important;
vertical-align: -0.1em !important;
background: none !important;
padding: 0 !important;
}

.parallelogram1 {
width: 120px;
height: 30px;
transform: skew(-15deg);
background: #EE0606;
display: inline-flex;
}

.parallelogram2 {
width: 120px;
height: 30px;
transform: skew(-15deg);
background: #EE8806;
display: inline-flex;
}
.text{
color: #fff;
font-size:12px;
font-style:bold;
padding-left: 12px;
padding-right: 12px;
padding-bottom: 8px;
font-weight: 900;
}
.news {
    /*width: 160px;*/
    background-color: black;
    width: fit-content;
   vertical-align: middle;
    height: auto;
    text-align: center;
    color: white;

}

.news-scroll a {
    text-decoration: none;
    display : inline-flex;
    padding: 5px;
    height: auto;

}
.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}
/*news slider styles strat here*/
.b-0 {
    bottom: 0;
}
.bg-shadow {
    background: rgba(76, 76, 76, 0);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
    background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
.top-indicator {
    right: 0;
    top: 1rem;
    bottom: inherit;
    left: inherit;
    margin-right: 1rem;
}
.overflow {
    position: relative;
    overflow: hidden;
}
.zoom img {
    transition: all 0.2s linear;
}
.zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

.carousel-cell1 {
    width: 200px;
    /* height:40%; */
    
    }

    /* cell number */
    .carousel-cell1:before {
      display: block;
    }


   #map {
      /* height: 400px; */
      /* The height is 400 pixels */
      width: 100%;
      /* The width is the width of the web page */
   }


   #cf {
  position:relative;
  height:25px;
  width:25px;
  margin:0 auto;
}

#cf img {
  position:absolute;
  left:0;
  -webkit-transition: opacity 400ms ease-in-out;
  -moz-transition: opacity 400ms ease-in-out;
  -o-transition: opacity 400ms ease-in-out;
  transition: opacity 400ms ease-in-out;
}

#cf img.top:hover {
  opacity:0;
}
   

.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
.btn {
}
/*news slider styles end here*/

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
      <link rel='stylesheet' id='wp-block-library-css'  href='<?php echo base_url();?>assets/web/css/dist/block-library/style.mind96d.css' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-block-vendors-style-css'  href='<?php echo base_url();?>assets/web/css/vendors-stylecce7.css' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='bt_dev_style-css'  href='<?php echo base_url();?>assets/web/framework/css/styled96d.css' type='text/css' media='all' /> -->
      <link rel='stylesheet' id='contact-form-7-css'  href='<?php echo base_url();?>assets/web/plugins/contact-form-7/includes/css/styles9dff.css?ver=5.3.2' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css'  href='<?php echo base_url();?>assets/web/css/dashicons.mind96d.css' type='text/css' media='all' />
      <link rel='stylesheet' id='post-views-counter-frontend-css'  href='<?php echo base_url();?>assets/web/plugins/post-views-counter/css/frontend3ba1.css?ver=1.3.3' type='text/css' media='all' />
      <style id='woocommerce-inline-inline-css' type='text/css'>
         .woocommerce form .form-row .required { visibility: visible; }
      </style>
      <link rel='stylesheet' id='bold-news-style-css'  href='<?php echo base_url();?>assets/web/css/styled96d.css' type='text/css' media='screen' />
      <link rel='stylesheet' id='bold-news-print-css'  href='<?php echo base_url();?>assets/web/css/printd96d.css' type='text/css' media='print' />
      <link rel='stylesheet' id='bold-news-magnific-popup-css'  href='<?php echo base_url();?>assets/web/css/magnific-popupd96d.css' type='text/css' media='screen' />
      <link crossorigin="anonymous" rel='stylesheet' id='bold-news-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRoboto+Slab%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRoboto+Slab%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRoboto+Condensed%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRoboto+Condensed%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='boldthemes_css-css'  href='<?php echo base_url();?>assets/web/framework/css/styled96d.css' type='text/css' media='all' /> -->
      <script type='text/javascript' src='<?php echo base_url();?>assets/web/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
      <script type='text/javascript' src='<?php echo base_url();?>assets/web/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
      
      <script type='text/javascript' src='<?php echo base_url();?>assets/web/framework/js/html5shiv.min68b3.js?ver=1' id='html5shiv-js'></script>
      <script type='text/javascript' src='<?php echo base_url();?>assets/web/framework/js/respond.min68b3.js?ver=1' id='respond-js'></script>
   
      <script type='text/javascript' src='<?php echo base_url();?>assets/web/framework/js/header.miscd96d.js' id='bold-news-header-misc-js'></script>     
      
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/style.css">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/web/css/responsive.css"> <!-- FontAwesome -->    
   
      <link rel="icon" href="<?php echo base_url();?>assets/webuploads/sites/2/2017/03/favicon-80px.png" sizes="32x32" />
      <link rel="icon" href="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/favicon-80px.png" sizes="192x192" />
      <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/favicon-80px.png" />
      <meta name="msapplication-TileImage" content="http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/favicon-80px.png" />
       <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const satasme = { lat: 6.9195, lng: 80.0997 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: satasme,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: satasme,
          map: map,
        });
      }
    </script>
    <!-- New -->

<script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCUyOIgp8YMYfJco2CxMmqUvrpU2D-4BY&libraries=geometry&callback=initMap">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- end of New -->
   </head>
   <body class="page-template-default page page-id-2347 page-child parent-pageid-3667 theme-bold-news bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btNoSidebar" data-autoplay="0" >
      <div class="btPageWrap" id="top">
         <header class="mainHeader btClear gutter ">
            <div class="port">
              <div id="top-bar" class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="ts-date">
            <i class="fa fa-calendar-check-o"></i>
            <?php echo date('d F, Y (l)'); ?>
          </div>
          <ul class="unstyled top-nav">
            <li><a href="<?php echo base_url();?>web/aboutus">About Us</a></li>
               <?php 
               if( $this->session->userdata('Web_UID') > 0) { ?>
           <li><a href="<?php echo base_url();?>web/banner">Advertise</a></li>
            <?php  } else { ?>
              <li><a href="<?php echo base_url();?>web/login">Advertise</a></li>
             <?php  } ?>
           
            <li><a href="<?php echo base_url();?>web/contactus">Contact Us</a></li>
            <li><a href="<?php echo base_url();?>web/sinhala">Sinhala</a></li>
            <li><a href="<?php echo base_url();?>web/index">English</a></li>
            <li><a href="<?php echo base_url();?>web/tamil">Tamil</a></li>
          </ul>
        </div><!--/ Top bar left end -->
       <?php      
       $data = get_ip_address(); 
function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                   echo '<script language="javascript">alert("'.$ip.'"); </script>';
                    echo $ip;
                  
                }
            }
        }
    }
}

?>
 


        <div class="col-md-4 top-social text-lg-right text-md-center">
          <ul class="unstyled">
            <li>
              <a title="Facebook" href="#">
                <span class="social-icon"><i class="fa fa-facebook"></i></span>
              </a>
              <a title="Twitter" href="#">
                <span class="social-icon"><i class="fa fa-twitter"></i></span>
              </a>
              <a title="Google+" href="#">
                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
              </a>
             <!--  <a title="Linkdin" href="#">
                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
              </a> -->
             <!--  <a title="Rss" href="#">
                <span class="social-icon"><i class="fa fa-rss"></i></span>
              </a> -->
              <!-- <a title="Skype" href="#">
                <span class="social-icon"><i class="fa fa-skype"></i></span>
              </a> -->
               <li><a href="<?php echo base_url();?>web/signup">Sign up</a></li>
               <!-- <li><a href="<?php echo base_url();?>index.php/login/logout"><i class="icon-switch2"></i> Logout</a></li> -->
               <?php 
               if( $this->session->userdata('Web_UID') > 0) { ?>
               <?php  echo $this->session->userdata('Web_FullName'); ?>
               <li><a href="<?php echo base_url();?>web/logout">Log out</a></li>

            <?php  } else { ?>
              <li><a href="<?php echo base_url();?>web/login">Login</a></li>
             <?php  } ?>
                
             
            </li>
          </ul><!-- Ul end -->
        </div><!--/ Top social col end -->
      </div><!--/ Content row end -->
    </div><!--/ Container end -->
  </div><!--/ Topbar end -->
               <!-- /topBar -->
               <div class="btLogoArea menuHolder btClear">
                  <span class="btVerticalMenuTrigger">&nbsp;<span class="btIco btIcoDefaultType"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a></span></span>
                  <span class="btHorizontalMenuTrigger">&nbsp;<span class="btIco btIcoDefaultType"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a></span></span>
                  <div class="logo">
                     <span>
                     <a href="<?php echo base_url();?>web"><img class="btMainLogo" data-hw="4.84" src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/02/bold-news-logo.png" alt="Bold News"></a></span>
                  </div>
                  <!-- /logo -->
                  <div class="topBarInLogoArea">
                     <div class="topBarInLogoAreaCell">
                        <div class="btTopBox widget_bt_banner_widget no-border">
                           <div class="bt_banner no-border" >
                            <a href="<?php echo base_url();?>index.php/web/banner" target="_blank"><img src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/Industrial-970x90-banner.jpg" /></a></div>
                        </div>
                     </div>
                     <!-- /topBarInLogoAreaCell -->
                  </div>
                  <!-- /topBarInLogoArea -->
               </div>
               <!-- /menuHolder -->
               <div class="btBelowLogoArea btClear">
                  <div class="menuPort">
                     <div class="logoBelowInline">
                        <span>
                        <a href="<?php echo base_url();?>"><img class="btMainLogo" data-hw="4.84" src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/02/bold-news-logo.png" alt="Bold News"></a>							
                        </span>
                     </div>
                     <!-- /logo -->
                     <div class="topBarInMenu">
                        <div class="topBarInMenuCell">
                           <div class="parallelogram1">
                              <p class="text">Breaking News</p>
                           </div>
                           <div class="parallelogram2">
                              <p class="text">Popular News</p>
                           </div>
                           <div class="btTopBox widget_search">
                              <div class="btSearch">
                                 <span class="btIco btIcoDefaultType btIcoDefaultColor"><a href="#" target="_self" data-ico-fa="&#xf002;" class="btIcoHolder"></a></span>
                                 <div class="btSearchInner gutter" role="search">
                                    <div class="btSearchInnerContent port">
                                       <form action="http://bold-news.bold-themes.com/main-demo/" method="get">
                                        <input type="text" name="s" placeholder="Looking for..." class="untouched">
                                          <button type="submit" data-icon="&#xf105;"></button>
                                       </form>
                                       <div class="btSearchInnerClose"><span class="btIco "><a href="#" target="_self" data-ico-fa="&#xf00d;" class="btIcoHolder"></a></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /topBarInMenu -->
                     </div>
                     <!-- /topBarInMenuCell -->
                     
<nav>
   <!-- <?php echo $this->uri->segment(2); ?>  -->
  <ul id="menu-primary-menu" class="menu">                          
       
        <?php  if(strpos($this->uri->segment(2), 'sinhala') !==false ){ ?>
           <?php  for($i=0; $i < count($category_list);++$i){?>
<li id="menu-item-3950"  class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-3950"><span class="bt_mega_menu_title" style="color:red;">
  <a href="<?php echo base_url();?>web/sinhala_category/<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?></a> </span>                              
     </li>
       <?php } ?>  
     <?php   } else if (strpos($this->uri->segment(2), 'tamil') !==false){ ?>
       <?php  for($i=0; $i < count($category_list);++$i) { ?>
<li id="menu-item-3950" class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-3950"><span class="bt_mega_menu_title">
  <a href="<?php echo base_url();?>web/tamil_category/<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?></a> </span>                              
     </li>
       <?php } ?> 
         <?php }  else { ?>
           <?php  for($i=0; $i < count($category_list);++$i) { ?>
    <li id="menu-item-3950" class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-3950"><span class="bt_mega_menu_title">
  <a href="<?php echo base_url();?>web/category/<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?></a> </span>                              
     </li> 
       <?php } ?> 
      <?php } ?> 
                                                 
  </ul>
</nav>
                  </div>
                  <!-- .menuPort -->
               </div>
               <!-- /menuHolder / btBelowLogoArea -->
            </div>
            <!-- /port -->
         </header>