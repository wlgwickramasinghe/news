<?php include 'header.php';?>
<div class="btContentWrap btClear">
<div class="row gutter topMediumSpaced ">
<!-- <div class=""> -->
<div class="btContent col-md-9" style="padding-left: 30px;">
         <article class="boldSection btArticle gutter divider btArticleWithSideInfo post-3130 post type-post status-publish format-image has-post-thumbnail hentry category-food-cuisine category-news-trending category-salads tag-food tag-recipe tag-salads post_format-post-format-image btPostSingleItemStandard"><div class="port"><div class="boldCell"><div class="boldRow"><div class="rowItem col-sm-12 btTextLeft"><div class="btArticleContentWrap">
            <div class="btArticleSideinfo">
     
         </div><!-- /btArticleSideinfo -->
   <div class="btArticleContent">
      <header class="header btClear extralarge">
          <?php  for($i=0; $i < count($news_content);++$i){?>
      <div class="btSuperTitle"><span>
         <span class="btArticleCategories">

      <a href="<?php echo base_url();?>index.php/web/category/<?php echo $news_content[$i]['category_id']; ?>" class="btArticleCategory cat-item-9"><?php echo $news_content[$i]['category']; ?></a>
   </span>
      </span>
   </div>
   <div class="dash">
      <h3>
       
      <span class="headline"><?php echo $news_content[$i]['title']; ?></span>
  
   </h3>
</div>
</header><div class="btRegularMediaPosition"><div class="btMediaBox btCarouselSmallNav"><div class="boldPhotoSlide slick-initialized slick-slider"><div aria-live="polite" class="slick-list draggable" style="height: 390.5px;"><div class="slick-track" role="listbox" style="opacity: 1; width: 586px; transform: translate3d(0px, 0px, 0px);"><div class="bpbItem slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 586px;"><img src="<?php echo base_url();?>assets/news/images/<?php echo $news_content[$i]['id']; ?>.jpg" alt="FOOD salads5"></div></div></div></div></div></div><!-- /rowItem --><div class="btArticleExcerpt"></div><div class="btArticleBody portfolioBody btTextLeft"><div class="bt_bb_wrapper">
      <p><?php echo $news_content[$i]['content']; ?>   </p>
       <?php } ?>
</div></div><!-- /btArticleBody --></div><!-- /btArticleContent --></div><!-- /btArticleContentWrap --></div><!-- /rowItem --></div><!-- /boldRow --></div><!-- /boldCell --></div><!-- /port --></article>


   <section class="boldSection btSinglePostBanner gutter bottomMediumSpaced">
      <div class="port">
         <div class="boldRow btTextLeft" id="boldSiteFooterWidgetsRow"><div class="btPostBanner widget_bt_banner_widget no-border rowItem col-md-12 col-sm-12"><div class="bt_banner no-border"><a href="https://themeforest.net/item/food-haus-restaurant-wordpress-theme/19441479?ref=BoldThemes" target="_blank"><img src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/Food-haus-970x90-banner.jpg"></a></div></div> 
         </div>
      </div>
   </section>
   <section class="boldSection gutter bottomMediumSpaced">
      <div class="port">
        
         <div class="boldRow"><div class="rowItem col-sm-12 btTextLeft">


<div id="comments" class="btCommentsBox">   
   <h4>
      <?php echo count($comment_content);?> comments </h4>   
   <ul class="comments">
       <?php  for($i=0; $i < count($comment_content);++$i){?>
            <li class="comment even thread-even depth-1" id="li-comment-60">
         <article id="comment-60" class="">
            <div class="commentAvatar"><img alt="" src="http://1.gravatar.com/avatar/18bf5f60fe665d4856660da61ad37907?s=140&amp;d=mm&amp;r=g" class="avatar avatar-140 photo" height="140" width="140" loading="lazy"></div>  
         <div class="commentTxt">
            <div class="vcard divider">
               <h5 class="author">
                  <span class="fn"><?php echo $comment_content[$i]['datetime']; ?></span>
               </h5>
               <p class="posted"><?php echo $comment_content[$i]['datetime']; ?></p>
            </div>               
               <div class="comment">                

                  <p><?php echo $comment_content[$i]['comment']; ?></p>
<p class="reply"><a rel="nofollow" class="comment-reply-link" href="index2096.html?replytocom=60#respond" data-commentid="60" data-postid="3130" data-belowelement="comment-60" data-respondelement="respond" data-replyto="Reply to Stoffel Jansen" aria-label="Reply to Stoffel Jansen">Reply</a></p>              </div>
            </div>
            
            
         </article>
      </li><!-- #comment-## -->
   <?php } ?>
   
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->

   </ul><!-- .comments -->

   <!-- --------------------------------------- -->

 <div class="panel panel-default">

   <?php

   if(!isset($login_button) && $this->session->userdata('user_data') > 0)  {

    $user_data = $this->session->userdata('user_data');
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$user_data['profile_pic'].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name : </b>'.$user_data["fname"].' '.$user_data['lname']. '</h3>';
    echo '<h3><b>Email :</b> '.$user_data['email'].'</h3>';
    echo '<h3><a href="'.base_url().'index.php/google_login/logout">Logout</h3></div>';
   }
   else
   {
    // echo '<div align="center">'.$login_button . '</div>';
   }

   ?>
  
   </div>




<!-- -------------------------------------------------    -->
<div id="respond" class="comment-respond">
   <h3 id="reply-title" class="comment-reply-title">Leave a Reply 
      <small>
         <a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel Reply</a>
      </small>
   </h3>
   <form action="" method="post" id="commentform" class="comment-form" novalidate="">
      <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
      <div class="pcItem btComment col-md-6">
         <label for="comment">Comment 
            <span class="required">*</span>
         </label>
         <p>
            <textarea id="comment" name="comment" cols="20" rows="2" aria-required="true"></textarea>
         </p>
      </div>
      <div class="row">
         <div class="pcItem col-md-8">
               <label for="author">Name 
               <span class="required">*</span>
               </label>
               <p>
               <input id="author" name="author" type="text" value="" aria-required="true">
               </p>
         </div>
         <div class="pcItem col-md-8">
               <label for="email">Email 
                  <span class="required">*</span>
               </label>
               <p>
                  <input id="email" name="email" type="text" value="" aria-required="true">
               </p>
         </div>
      <div class="col-md-12">
               <p class="comment-form-cookies-consent comment-notes">
                  <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                  <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
               </p>
         </div>
      </div>
               <p class="form-submit">
                  <button type="submit" value="Post Comment" id="btSubmit" class="btBtn btnFilledStyle btnRightPosition btnSmall btnAccent btnAccentColor btnIco" name="submit">
                  <span class="btnInnerText">Post Comment</span>
                  <span class="btIco ">
                     <span data-ico-fa="" class="btIcoHolder"></span>
                  </span>
                  </button>
                  <input type="hidden" name="comment_post_ID" value="3130" id="comment_post_ID">
                     <input type="hidden" name="comment_parent" id="comment_parent" value="0">
               </p>
      </form>
</div>


                  <!-- #respond -->
   
</div><!-- #comments --></div><!-- /rowItem --></div><!-- /boldRow --></div><!-- /port --></section>     </div>



<!-- </div> -->
<!-- <div class=""> -->

<aside class="btSidebar btTextLeft col-md-3" style="width:auto; padding-right:30px; ">
   <div class="btBox widget_categories">
<ul> 
    <?php  for($i=0; $i < count($category_list);++$i){?>
   <li class="h6 cat-item cat-item-6"><a href="<?php echo base_url();?>index.php/web/category/<?php echo $category_list[$i]['id']; ?>"><?php echo $category_list[$i]['category']; ?> 
   <span>23</span></a>
   </li>
   <?php } ?>  
</ul>
</div><div class="btBox widget_bt_banner_widget no-border"><div class="bt_banner no-border"><a href="https://themeforest.net/item/industrial-manufacturing-factory-wordpress-theme/18939815?ref=BoldThemes" target="_blank"><img src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/Industrial-300x250-banner.jpg"></a></div></div><div class="btBox widget_bt_recent_posts"><h4><span>Recent Posts</span></h4><div class="popularPosts"><ul>
   <li><div class="ppImage"><a href="http://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/"><img width="160" height="160" src="<?php echo base_url();?>assets/web/uploads/sites/2/2017/03/travel_01-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-160x160.jpg 160w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-180x180.jpg 180w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-300x300.jpg 300w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-600x600.jpg 600w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-320x320.jpg 320w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-640x640.jpg 640w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-1280x1280.jpg 1280w" sizes="(max-width: 160px) 100vw, 160px"></a></div><div class="ppTxt"><header class="header btClear small">
   <div class="btSuperTitle"><span>March 17, 2017</span></div><div class="dash"><h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/">How’s New York in the Christmas time?</a></span></h4></div></header>
</div></li>
  
</ul>
</div>
</div>

<div class="btBox widget_recent_comments">
   <h4><span>Recent Comments</span></h4>
   <ul id="recentcomments">
        <?php  for($i=0; $i < count($recent_comment);++$i){?> 
      <li class="recentcomments"><span class="comment-author-link">M02</span> on <?php echo $recent_comment[$i]['comment']; ?></li>      
   <?php } ?>
   </ul>
</div>
</aside>


<!-- </div> -->
</div>
</div>

<?php include 'footer.php';?>