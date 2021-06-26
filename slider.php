<?php 
  global $redux_demo; 
?>
<div class="" style="padding-left:15px;padding-right:15px">
<div class="row" style="padding-left: 50px;padding-right: 50px">


<div class="col-md-8 col-sm-12 slider">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<?php 
$mainslider = new WP_Query(array(
'post_type' =>'FS_JESYslider',
'posts_per_page' =>'8'
  ));
?>
    <ol class="carousel-indicators">
  <?php if(have_posts()) : while($mainslider->have_posts()) : $mainslider->the_post(); ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $mainslider->current_post; ?>" class="<?php if($mainslider->current_post==0) : ?>active<?php endif; ?>"></li>
  <?php endwhile; endif; ?>
    </ol>
    <?php rewind_posts(); ?>
    <div class="carousel-inner" style="max-width:100%;">
<?php if(have_posts()) : while($mainslider->have_posts()) : $mainslider->the_post(); ?>
      <div class="carousel-item <?php if($mainslider->current_post==0) : ?>active<?php endif; ?>">


       



<?php 
 $post_thumbnail_id = get_post_thumbnail_id();
    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
<div class="container">
  <img src="<?php echo $post_thumbnail_url; ?>" alt="" />
</div>



        <div class="carousel-caption d-none d-md-block" style="background-color: #0377cda1;border-radius: 2px">
          <h5><a style="color:white;font-size:1.6rem;" href="<?php 
          the_permalink();
          
          ?>">
              
              
              
              
               <?php echo wp_trim_words( get_the_title(), 8, '...' );?>
          </a></h5>
          
        </div>
      </div>
  <?php endwhile; endif; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




   <?php if ($redux_demo['btnAbtSec']==1) : ?>

<div class="col-md-4 col-sm-12">
    <!-- ##### Hero Area Start ##### -->
    <div class="">
        <!--
 <h6 style="font-weight: bold;">Top News</h6>
         -->
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row" style="padding-left: 3px">
                        <!-- Single Blog Post Area -->               

    <?php
     $notice_category = $redux_demo['abtSliderCat'];
     $notice_args = array(
    'posts_per_page' => 2,
    'offset' => 0,
    'cat' => $notice_category,
    'orderby' => 'date',
     'post_type' => 'post',
    'post_status' => 'publish',
      'suppress_filters' => true
                  );
  $catquery = new WP_Query( $notice_args);
 if($catquery->have_posts()) : while($catquery->have_posts()) : 
  $catquery->the_post();
                 ?>
<?php if ( has_post_thumbnail() ):?>

                        <div class="col-12 col-md-12" style="height:219px">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="<?php the_permalink(); ?>"><img style="max-height: 200px;min-height: 200px" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), array('300' , '170')) ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php the_date(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="post-title"> <?php echo wp_trim_words( get_the_title(), 5, '...' );?></a>

                                </div>
                            </div>
                     
                        </div>
<?php endif;?>
<?php endwhile;endif;?>


                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
<?php
     $notice_category = $redux_demo['abtSliderCat'];
     $notice_args = array(
    'posts_per_page' => 2,
    'offset' => 0,
    'cat' => $notice_category,
    'orderby' => 'date',
     'post_type' => 'post',
    'post_status' => 'publish',
      'suppress_filters' => true
                  );
  $catquery = new WP_Query( $notice_args);
 if($catquery->have_posts()) : while($catquery->have_posts()) : 
  $catquery->the_post();
                 ?>
<?php if ( has_post_thumbnail() ):?>

                        <!-- Single Blog Post Area -->                                            
                        <div class="col-12 col-md-12" style="height:219px">
                            <!-- Single Blog Post Area -->


                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="<?php the_permalink(); ?>"><img style="max-height: 200px;min-height: 200px" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), array('300' , '170')) ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php the_date(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="post-title">
                                         <?php echo wp_trim_words( get_the_title(), 5, '...' );?>
                                    </a>
                                </div>
                            </div>


                   

                        </div>
<?php endif;?>
<?php endwhile;endif;?>





                    </div>
                </div>
            </div>
        </div>







    </div>
    </div>
 <?php endif; ?>









    </div>
</div>