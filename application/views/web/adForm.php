<?php include 'header.php';?>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<div class="btContentWrap btClear">
    <div class="btContentHolder" style="padding:20px;">
        <div class="btContent">
            <div class="bt_bb_wrapper">
<!-- form -->

                           <?php

   if(!isset($login_button))
   {
    if($this->session->userdata('id') > 0){
    $user_data = $this->session->userdata('user_data');
    // print_r($user_data);
    echo '<div class="panel-heading"></div><div class="panel-body">';
    echo '<img src="'.$user_data['profile_pic'].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name : </b>'.$user_data["fname"].' '.$user_data['lname']. '</h3>';
    // echo '<h3><b>Email :</b> '.$user_data['email'].'</h3>';
    echo '<h3><a href="'.base_url().'index.php/web/google_logout">Logout</h3></div>';
}
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }

   ?>
<div class="card-group">
                <div class="card" style="background-color:white">
<form class="form-horizontal form-validate-jquery" action="#" id="ad_create_form" enctype="multipart/form-data" method="POST">
                <div class="card-body">
                        <form>
                        <div  class="col">
                        <div class="gap-20"></div>
                            <div  class="row">
      
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Banner Category</label>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="category">
                                        <option selected disabled> Select a category </option>
                                       
                                        <?php  for($i=0; $i < count($category_list);++$i){?>
                                        <option value="<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?></option>
                                        <?php };?>
                                    </select>
                                </div>
                            </div>

                            <div class="gap-20"></div>

<!-- row 01.1 -->
                  <!--           <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Country</label>
                                </div>
                                <div class="col">
                                    <select class="form-control">
                                        <option selected disabled>-- Select a country --</option>
                                        <?php foreach($country as $row):?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->country;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div> -->

                            <div class="gap-20"></div>

                            <!-- row 02 -->
                            <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Ad Banner Sizes</label>
                                </div>
                                <div class="col">

                                <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bannerradio" id="size01" value="2500" checked>
                                        <label class="form-check-label" for="size01">
                                            300 x 300
                                        </label>
                                    </div>
                                </div>
                                    <div class="col">
                                        <img src="<?php echo base_url();?>assets/images/videos/300x300.png" class="rounded mx-auto d-block" alt="300x300" style="width:60px;height:60px;">
                                    </div>
                                </div>
                                    
                                            <br>

                                    <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bannerradio" id="size02" value="2000">
                                        <label class="form-check-label" for="size02">
                                            300 x 500
                                        </label>
                                    </div>
                                </div>
                                    <div class="col">
                                        <img src="<?php echo base_url();?>assets/images/videos/300x500.png" class="rounded mx-auto d-block" alt="300x500" style="width:60px;height:100px;">
                                    </div>
                                </div>

                                <br>
                                
                                <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bannerradio" id="size03" value="1500">
                                        <label class="form-check-label" for="size03">
                                            600 x 150
                                        </label>
                                    </div>
                                </div>
                                    <div class="col">
                                        <img src="<?php echo base_url();?>assets/images/videos/600x150.png" class="rounded mx-auto d-block" alt="600x150" style="width:120px;height:30px;">
                                    </div>
                                </div>


                                </div>
                            </div>

                            <div class="gap-20"></div>

                            <!-- row 03 -->
                            <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Start date</label>
                                </div>
                                <div class="col">
                                    <input type="date" id="startdate" name="strat_date">
                                </div>
                            </div>

                              <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">End date</label>
                                </div>
                                <div class="col">
                                    <input type="date" id="enddate" onchange="diff()" name="end_date">
                                </div>
                            </div>
                            <script type="text/javascript">
function diff(){
    var date1 = new Date(document.getElementById("startdate").value);

var date2 = new Date(document.getElementById("enddate").value);

var difference = date2 - date1;

var days = difference/(24*3600*1000);
document.getElementById('due').value = days;

var adprice = document.querySelector('input[name="bannerradio"]:checked').value;
alert(adprice);

document.getElementById('price').value = adprice * days;

}    


                            </script>
                            
                            <div class="gap-20"></div>

                            <!-- row 04 -->
                            <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Duration</label>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <input type="text" id="due" name="duration">
                                    </div>
                                    <select class="form-control" id="inputGroupSelect01">
                                       <!--  <option value="1" selected>Hours</option> -->
                                        <option value="2">Days</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="gap-20"></div>

                            <!-- row 05 -->
                            <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Price</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="price" name="price" value="">
                                </div>
                            </div>

                            <div class="gap-20"></div>

                            <!-- row 06 -->
                            <div class="row">
                                <div class="col">
                                    <label for="formFile" class="form-label">Upload your Banner</label>
                                </div>
                                 <div class="col">
                              <input type="file" name="banner_image" >
                               </div>
                            </div>

                             <div class="gap-20"></div>

                            <div class="row">
                                  <div class="col"></div>
                            <div class="col">
                                <button type="button" onclick="create_ad()" class="btn btn-primary" id="pnotify-solid-styled-left">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            </div>

                        </div>
                        </div>
                    </form>
                        </div>
<!-- second column -->
<div class="card" style="background-color:white">
<div class="gap-20"></div>
                <div class="card-body">
                        <div  class="col">
                            <!-- row 01 -->
                            <div  class="row" style="background-color:#59B9D8;padding:20px;border-radius:5px">
                                <div class="col">
                                    <label class="form-label" style="font-size:20px;">Total to Pay</label>
                                </div>
                                <div class="col">
                                    <label class="form-label" style="font-size:20px;">Rs. 0.00 </label>
                                </div>
                            </div>

                            <div class="gap-20"></div>

                            <!-- row 02 -->
                            <div  class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">How Would You Like to Pay?</label>
                                </div>
                                <div class="col">
                                
                        <!--         <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="method01" checked onclick="show1();" >
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Credit Card
                                        </label>
                                    </div>
                                </div>
                                    <div class="col">
                                    <div class="row">
                                    <img src="<?php echo base_url();?>assets/images/videos/mastercard.png" class="rounded mx-auto d-block" alt="master card" style="width:30px;height:30px;">
                                    <img src="<?php echo base_url();?>assets/images/videos/visa.png" class="rounded mx-auto d-block" alt="visa card" style="width:30px;height:30px;">
                                    </div>
                                        
                                    </div>
                                </div> -->
                                    
                                            <br>

                                    
                                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="method02" onclick="show2();" >
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Paypal
                                        </label>
                                    </div>
                                </div>
                                    <div class="col">
                                        <img src="<?php echo base_url();?>assets/images/videos/paypal.png" class="rounded mx-auto d-block" alt="paypal" style="width:100px;height:25px;">
                                    </div>
                                </div>
                                    
                                            <br>

                                </div>
                            </div>

                            <div class="gap-20"></div>


<div class="card" id="div2" style="display:none;">
 <!-- row 03 -->
    <div class="card-body" style="display: flex;justify-content: center;align-items: center;">
                <!-- <div  class="row" style="padding:15px;"> -->
                <a class="btn btn-primary" href="https://www.paypal.com/paypalme/" style="background-color:#59B9D8;border-radius:5px;color:white" role="button">Pay with Paypal</a>
                    <!-- <input class="btn btn-primary" type="submit" value="Pay Now with paypal"  href="https://www.paypal.com/paypalme/"> -->
                <!-- </div> -->
            </div>                           
    </div>
</div>
                        </div>
                        <!-- </div> -->
                        </form>
                        </div>
                            

                </div>
<!-- end of form -->
            </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //Save News
function create_ad() {

  base_url = 'http://127.0.0.1/DSMS/'

var formData = new FormData($('#ad_create_form')[0]);

  $.ajax({
  url: base_url+'index.php/web/create_ad',
  method:"POST",
  data: formData, 
  contentType: false,  
  cache: false,  
  processData:false,  
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
    // $('#news_form')[0].reset();
  //    setTimeout(function(){
  // window.location = base_url+"index.php/news/view_news?page=news";
  // },1000);
  })
  .fail(function(data) {
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  });
  });
}

</script>
<?php include 'footer.php';?>