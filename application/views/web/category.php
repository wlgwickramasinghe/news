<?php include 'header.php';?>
<style type="text/css">
   .btGridOuterContent{
      background-color: #e5e5e5;
      margin: 10px;

   }
   .col-md-3{
      width: 23%
   }
</style>

<div class="btContentWrap btClear">
   <div class="btContentHolder">
      <div class="btContent">
         <div class="bt_bb_wrapper">
            <section id="bt_section6035f765258fb"  class="boldSection topSmallSpaced bottomSpaced gutter boxed inherit" >
               <div class="port">
                  <div class="boldCell">
                     <div class="boldCellInner">
                        <div class="boldRow " >
                           <div class="boldRowInner">
                              <div class="rowItem col-md-12 col-ms-12  btTextLeft"  data-width="12">
                                 <div class="rowItemContent" >
                                    <div class="btClear btSeparator topSmallSpaced noBorder" >
                                       <hr>
                                       </div>
                                       
                                        
                                       <div class="btGridContainer classic btGridGap-20 " >
                                                <?php  if(strpos($this->uri->segment(2), 'sinhala') !==false ){ ?>
                                 <?php  for($i=0; $i < count($category_news);++$i){?>
                                         
                     <div class="btGridOuterContent topSmallSpaced col-md-3">
   <div class="btMediaBox" data-hw="0.6671875" style="height: 178.139px;">
      <div class="bpbItem">
         <a href="<?php echo base_url();?>web/sinhala_single/<?php echo $category_news[$i]['id']; ?>">
            <img class="img-fluid" src="<?php echo base_url();?>assets/news/images/<?php echo $category_news[$i]['id']; ?>.jpg" alt="travel_01-640x427.jpg">
         </a>
      </div>
   </div>   
   <div class="btGridContent">
      <header><div class="dash"><h4><span class="headline"><a href="<?php echo base_url();?>web/single/<?php echo $category_news[$i]['id']; ?>"><?php echo $category_news[$i]['title']; ?></a></span></h4></div></header><p><?php echo $category_news[$i]['content']; ?></p>
     
   </div>
</div>

                                     <?php } ?>
     <?php   } else if (strpos($this->uri->segment(2), 'tamil') !==false){ ?>
                                 <?php  for($i=0; $i < count($category_news);++$i){?>
                                         
                     <div class="btGridOuterContent topSmallSpaced col-md-3">
   <div class="btMediaBox" data-hw="0.6671875" style="height: 178.139px;">
      <div class="bpbItem">
         <a href="<?php echo base_url();?>web/tamil_single/<?php echo $category_news[$i]['id']; ?>">
            <img class="img-fluid" src="<?php echo base_url();?>assets/news/images/<?php echo $category_news[$i]['id']; ?>.jpg" alt="travel_01-640x427.jpg">
         </a>
      </div>
   </div>   
   <div class="btGridContent">
      <header><div class="dash"><h4><span class="headline"><a href="<?php echo base_url();?>web/single/<?php echo $category_news[$i]['id']; ?>"><?php echo $category_news[$i]['title']; ?></a></span></h4></div></header><p><?php echo $category_news[$i]['content']; ?></p>
     
   </div>
</div>

                                     <?php } ?>
         <?php }  else { ?>
                                 <?php  for($i=0; $i < count($category_news);++$i){?>
                                         
                     <div class="btGridOuterContent topSmallSpaced col-md-3">
   <div class="btMediaBox" data-hw="0.6671875" style="height: 178.139px;">
      <div class="bpbItem">
         <a href="<?php echo base_url();?>web/single/<?php echo $category_news[$i]['id']; ?>">
            <img class="img-fluid" src="<?php echo base_url();?>assets/news/images/<?php echo $category_news[$i]['id']; ?>.jpg" alt="travel_01-640x427.jpg">
         </a>
      </div>
   </div>   
   <div class="btGridContent">
      <header><div class="dash"><h4><span class="headline"><a href="<?php echo base_url();?>web/single/<?php echo $category_news[$i]['id']; ?>"><?php echo $category_news[$i]['title']; ?></a></span></h4></div></header><p><?php echo $category_news[$i]['content']; ?></p>
     
   </div>
</div>

                                     <?php } ?>
      <?php } ?> 

                                          <!-- <?php  for($i=0; $i < count($category_news);++$i){?>
                                         
                     <div class="btGridOuterContent topSmallSpaced col-md-3">
   <div class="btMediaBox" data-hw="0.6671875" style="height: 178.139px;">
      <div class="bpbItem">
         <a href="<?php echo base_url();?>index.php/web/single/<?php echo $category_news[$i]['id']; ?>">
            <img class="img-fluid" src="<?php echo base_url();?>assets/news/images/<?php echo $category_news[$i]['id']; ?>.jpg" alt="travel_01-640x427.jpg">
         </a>
      </div>
   </div>   
   <div class="btGridContent">
      <header><div class="dash"><h4><span class="headline"><a href="<?php echo base_url();?>index.php/web/single/<?php echo $category_news[$i]['id']; ?>"><?php echo $category_news[$i]['title']; ?></a></span></h4></div></header><p><?php echo $category_news[$i]['content']; ?></p>
     
   </div>
</div>

                                     <?php } ?> -->
                                       </div>
                                   
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <!-- /boldthemes_content -->
      </div>
      <!-- /contentHolder -->
   </div>
   <!-- /contentWrap -->

<?php include 'footer.php';?>