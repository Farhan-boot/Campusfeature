<?php get_header(); ?>

<div class="container" style="padding:20px">
<div class="row"> 

<div class="col-md-12">
<div class="btn glyphicon">
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>Go-Back</a>"; 
?>
</div>
</div>

	
<div class="col-md-8 col-sm-12">  
<?php if (have_posts())  while (have_posts()) : the_post(); ?>
<div class="themeumlms-course-wrap sin-sty">
<figure class="themeumlms-course-img">   	
<?php the_post_thumbnail('medium_large',array( 'class' => 'sing-thumb img-responsive img-thumbnail' ));?>
</figure>
  </div>
<p>
<?php
if ( has_post_thumbnail() ) {    
}
else {
    echo the_time('d M Y');
}
?>
</p>
<div class="">
 <h4 class=""><?php the_title(); ?></h4>
 <p><?php  the_content(); ?></p></br>
  <?php endwhile; ?>
</div>
</div>



<div class="col-md-4 col-sm-12" style="text-align: center;"> 
<div class="single-widget-area news-widget mb-30">
                                     
				<ul style="line-height: 48px;border-bottom: 1px solid black" class="catagory">
				    <?php wp_list_categories( array(
				        'orderby'    => 'name',
				        'show_count' => false,
				        'exclude'    => array( 10 )
				    ) ); ?> 
				</ul>

</div>

</div>

</div>
</div> 
<div class="clear"></div>
<?php get_footer(); ?>












