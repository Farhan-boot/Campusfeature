<?php get_header(); ?>

<div class="clear"></div>
<!-- start slider -->
<div class="container">
  <div class="col-md-8">

<?php while(have_posts()) : the_post();?>

<h2 class="text-center"><?php the_title();?></h2>
<?php the_content();?>

<?php endwhile ?>


  </div>

<!-- start notice -->
<div class="col-md-4 col-sm-12 notis member-wrap">
    <div class="gdlr-item-title-wrapper gdlr-item pos-left ">
   <div class="gdlr-item-title-head">
    <i>Notice Board</i>
   <a href="Template notice.html" class="notice-btn" role="button">View All</a>
    </div>

    </div>
     
    
	  <div class="gdlr-item gdlr-blog-widget">
	  <div class="gdlr-ux gdlr-blog-widget-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
<article id="post-2255" class="post-2255 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
	<div class="gdlr-standard-style">
	<div class="post-header">

<?php

$notice = new WP_Query(array(
'post_type' =>'NB',
'posts_per_page' =>'6'

  ));

?>


<?php while($notice->have_posts()) : $notice->the_post(); ?>

              <article class="nt">
                  <span class="date">
   <?php  the_time('d');?>
   <p>
     <?php  the_time('M Y');?>  
   </p>             

                  </span>
<h3><a href="<?php the_permalink(); ?>"><?php $string = get_the_title(); echo getTrimHtml($string,0,45); ?>...</a></h3>
              </article>

  <?php endwhile; ?>

  </div>
	</div>
</article>
	</div>
	</div>
  </div>
  </div></br>
  <!-- end notice -->

<div class="clear"></div>
<div class="container botom-img">
<div class="row botom-row">
	<div class="col-md-12 col-sm-12 botom-bodar">
		
	</div>
</div>
</div>

<?php get_footer(); ?>


