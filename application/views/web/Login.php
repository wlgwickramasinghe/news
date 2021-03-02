<?php include 'header.php';?>

<script src="https://apis.google.com/js/platform.js" async defer></script>
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
         <h4>Login</h4>
      </div>
     
   <div class="row">
      <div class="col-md-4">
      </div>
<div class="col-md-4">
   <input type="text" name="email" placeholder="Email" id="email" required>
        <input type="password" name="password" placeholder="Password" id="pwd" required>
       <!--  <input type="submit" value="Login"> -->
       <button class="btn-success btn" onclick="web_auth()">Login</button>
        <a href="<?php echo $this->facebook->login_url();?>" class="fb btn" style="color:white;">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>   
  <?php

   if(!isset($login_button))
   {

    $user_data = $this->session->userdata('user_data');
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$user_data['profile_pic'].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name : </b>'.$user_data["fname"].' '.$user_data['lname']. '</h3>';
    echo '<h3><b>Email :</b> '.$user_data['email'].'</h3>';
    echo '<h3><a href="'.base_url().'index.php/web/google_logout">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }

   ?>     
</div>
 <div class="col-md-4">
      </div>
   </div>
     
           

  </div><!-- /boldRow --></div><!-- /boldCell --></div><!-- /port -->


 
</div>




</div>
</div>

<script type="text/javascript">
  function web_auth() {

  base_url = 'http://127.0.0.1/DSMS/'
// alert(base_url);
  data = $('#login').serializeArray();
  var email = $('#email').val();
  var pwd = $('#pwd').val();

  $.ajax({
    url: base_url+'index.php/web/login_process',
    type: 'POST',
    dataType: 'json',
    data: { "email":email, "pwd":pwd },
  })
  .done(function() {
      setTimeout(function(){
      window.location = base_url+"index.php/web/banner";
      },1000);
  })
  .fail(function(data) {
      // window.location.href = base_url+'index.php/dashboard'
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