<?php include 'header.php';?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/notifications/pnotify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/components_notifications_pnotify.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container_login {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 18px;
  line-height: 20px;
  text-decoration: none; 
  color: white;/* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3b5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #c32f10;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
<div class="btContentWrap btClear">
<div class="row gutter topMediumSpaced bottomMediumSpaced">

<div class="btContent col-md-12" style="padding-left: 30px;">

<div class="port">
<div class="boldCell">
   <div class="boldRow">
      <div class="row" style="justify-content: center;">
         <h4>User Signup</h4>
      </div>
     <form class="form-horizontal form-validate-jquery" action="#" id="web_user_signup" method="">
   <div class="row">
      <div class="col-md-4">
      </div>
<div class="col-md-4">
      <input type="text" name="fname" placeholder="First Name" required>
      <input type="text" name="lname" placeholder="Last Name" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <input type="password" name="con_pwd" placeholder="Confirm Password" required>
       
      <button type="button" onclick="web_signup()" class="btn-success btn">Sign up</button>  
      <h5 class="">Alreday Signup, <a href="<?php echo base_url();?>index.php/web/login">Login</a></h5>   
         
     
</div>
 <div class="col-md-4">
      </div>
   </div>
 </form>
     
           

  </div><!-- /boldRow --></div><!-- /boldCell --></div><!-- /port -->


 
</div>




</div>
</div>
<script type="text/javascript">
  
function web_signup() {

    base_url = 'http://127.0.0.1/DSMS/'

  data = $('#web_user_signup').serializeArray();

  $.ajax({
    url: base_url+'index.php/web/web_signup',
    type: 'POST',
    dataType: 'json',
    data: data
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Form submited successfully',
        addclass: 'alert bg-success alert-styled-left'
    });
    $('#web_user_signup')[0].reset();

      setTimeout(function(){
      window.location = base_url+"index.php/web/login";
      },1000);

  })
  .fail(function(data) {
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  })
  })
}
</script>

<?php include 'footer.php';?>