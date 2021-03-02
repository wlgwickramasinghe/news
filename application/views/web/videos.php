<?php include 'header.php';?>

<div class="btContentWrap btClear">
<div class="btContentHolder" style="padding:20px;">

<script>
function setvideo(src) {
    document.getElementById('div_video').innerHTML = '<video class="embed-responsive-item" controls muted id="theVideo" src="'++'"> ';
    document.getElementById('video_ctrl').play();
}
</script>

<!-- <button onClick="setvideo('<?php echo base_url();?>assets/images/videos/video03.mp4');">Video1</button>
<div id="div_video"> </div> -->


<!-- Modal -->
<div class="modal fade modal-fade-transform: scale(.8)" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top:160px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
        <div class="embed-responsive embed-responsive-16by9" id="modal-body">
        <!-- <iframe src="https://player.vimeo.com/video/205117786" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
          <!-- <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tcA4VNxz1gQ" allowfullscreen></iframe> -->
            <video class="embed-responsive-item" controls muted id="theVideo" src="<?php echo base_url();?>assets/images/videos/video03.mp4"> 
              <!-- <source id="theVideo" type="video/mp4"> -->
            </video>
            <!-- <div id=div_video></div> -->
        </div>
      </div>
    </div>
  </div>
</div> 
<!-- end of new modal -->


		<div class="btContent">
		
			<div class="bt_bb_wrapper">


	<section id="bt_section60333026bae88"  class="boldSection bottomMediumSpaced inherit" style="background-color:#fff  !important;">
        

	<!-- <div style="width:100%;background-color:#e8e8e8;height:40px;display: flex;align-items: center;">
									<h4 style="padding-left:20px;">Latest World News Videos</h4>						
                                    </div> -->




        <div style="width:100%;background-color:#e8e8e8;height:40px;display: flex;align-items: center;">
            <h4 style="padding-left:20px;">World News (15 Videos)</h4>						
        </div>
        

<!-- Carousel  -->
		<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }' style="padding:2px;">

      <div class="carousel-cell1" style="margin:2px;">

		<div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news11.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" id='btn1'>
		<div id="cf" class='btn' >
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	
	  </div>


      <div class="carousel-cell1" style="margin:2px;">
	  
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news01.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn2'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>

	  </div>

      <div class="carousel-cell1" style="margin:2px;">

	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news12.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn3'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>

	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news10.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn4'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news02.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn1'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news06.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn2'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn3'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news04.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn4'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news09.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn1'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn2'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news07.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn3'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>

	  <div class="carousel-cell1" style="margin:2px;">
	  <div class="card text-white">
		<img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
		<div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
		<a href="#" data-toggle="modal" data-target="#basicModal" class='btn' id='btn4'>
		<div id="cf">
		<img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
		<img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
		</div>
  		</a>
  		</div>
		</div>
	  </div>
    </div>
	<br><br>
<!-- End of Carousel -->

<div style="width:100%;background-color:#e8e8e8;height:40px;display: flex;align-items: center;">
<h4 style="padding-left:20px;">Latest international coronavirus videos (15)</h4>						
        </div>
        
<!-- Carousel  -->
<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }' style="padding:2px;">

<div class="carousel-cell1" style="margin:2px;">

  <div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news10.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell1" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news04.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news12.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news01.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news03.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news09.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>
</div>
<br><br>
<!-- End of Carousel -->


<div style="width:100%;background-color:#e8e8e8;height:40px;display: flex;align-items: center;">
<h4 style="padding-left:20px;">US Politics of the Day (15)</h4>						
        </div>
        
<!-- Carousel  -->
<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }' style="padding:2px;">

<div class="carousel-cell" style="margin:2px;">

  <div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news04.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news11.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news12.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news10.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news07.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news06.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news01.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>
</div>
<br><br>
<!-- End of Carousel -->

<div style="width:100%;background-color:#e8e8e8;height:40px;display: flex;align-items: center;">
<h4 style="padding-left:20px;">Latest international sports videos (15)</h4>						
        </div>


<!-- Carousel  -->
<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }' style="padding:2px;">

<div class="carousel-cell" style="margin:2px;">

  <div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news08.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news06.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">

<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news10.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>

</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news09.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news01.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news09.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news12.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news11.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news07.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news05.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news01.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>

<div class="carousel-cell" style="margin:2px;">
<div class="card text-white">
  <img src="<?php echo base_url();?>assets/images/videos/news02.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="display: flex;align-items: center;justify-content:center;">
  <a href="#" data-toggle="modal" data-target="#basicModal">
  <div id="cf">
  <img class="bottom" src="<?php echo base_url();?>assets/images/videos/play-2.png" />
  <img class="top" src="<?php echo base_url();?>assets/images/videos/play-1.png" />
  </div>
	</a>
	</div>
  </div>
</div>
</div>
<br><br>
<!-- End of Carousel -->
        
					</section>


				</div>		
			</div><!-- /boldthemes_content -->
		</div><!-- /contentHolder -->
	</div><!-- /contentWrap -->

<?php include 'footer.php';?>