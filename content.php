<?php 
  global $redux_demo; 
?>
<!-- ##### Hero Area End ##### -->
<!-- ##### Intro News Area Start ##### -->

        <div class="">
            <div class="row justify-content-center">
       <!-- Start Mid-Left Section -->
     <?php if ($redux_demo['MidLeftSection']==1) : ?>
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">
                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>ক্যাম্পাস</h6>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                       <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row" style="margin-right: 0px;margin-left: 0px">
                  <!-- Single News Area -->                          
                             <?php
                                 $notice_category = $redux_demo['Left-Section'];
                                 $notice_args = array(
                                'posts_per_page' => 10,
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

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url('') ?>" alt=""></a>
                                            </div>
                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title">
                                                    <?php $string = get_the_title(); echo getTrimHtml($string,0,130); ?>...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single News Area -->
                                <?php endif;?>
                                <?php endwhile;endif;?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <?php endif; ?>
 <!-- End Mid-Left Section -->

<!-- Sidebar Widget -->
         <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">
                <!-- Newsletter Widget -->
<?php
    $notice_category = $redux_demo['catLstSec-1'];
         $notice_args = array(
        'posts_per_page' => 1,
        'offset' => 0,
        'cat' => $slider,
        'orderby' => 'date',
        'post_type' => 'post',
        'post_status' => 'publish',
         'suppress_filters' => true
             );
$catquery = new WP_Query( $notice_args);
 if($catquery->have_posts()) : while($catquery->have_posts()) : 
 $catquery->the_post(); ?>
               <?php if ($redux_demo['btnLstSec-1']==1) : ?>
                      <div class="single-widget-area add-widget mb-30" style="margin-left: 3px">
                            <a href="<?php the_permalink(); ?>">
                                <img style="min-width: 100%;max-height: 202px" src="<?php echo get_the_post_thumbnail_url('') ?>" alt="">
                            </a>
                        </div>
              <?php endif; ?>
<?php endwhile;endif;?>

     <!-- Newsletter Widget -->
<?php
    $notice_category = $redux_demo['catLstSec-2'];
         $notice_args = array(
        'posts_per_page' => 1,
        'offset' => 0,
        'cat' => $notice_category,
        'orderby' => 'date',
        'post_type' => 'post',
        'post_status' => 'publish',
         'suppress_filters' => true
             );
$catquery = new WP_Query( $notice_args);
 if($catquery->have_posts()) : while($catquery->have_posts()) : 
 $catquery->the_post(); ?>

              <?php if ($redux_demo['btnLstSec-2']==1) : ?>
                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30" style="margin-left: 3px">
                            <a href="<?php the_permalink(); ?>">
                                <img style="min-width: 100%;max-height: 202px" src="<?php echo get_the_post_thumbnail_url('') ?>" alt="">
                            </a>
                        </div>
              <?php endif; ?>

<?php endwhile;endif;?>
                    </div>
                </div>
            </div>
        </div>

    <!-- ##### Intro News Area End ##### -->

    <!-- ##### Video Area Start ##### -->
 <?php if ($redux_demo['opt-switch-ziro']==1) : ?>
    <section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url(<?php global $redux_demo; echo''.$redux_demo['Carousel_Bg_logo']['url']; ?>);">
        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Slides -->
                        <div class="video-slides owl-carousel">
                         <?php
                                 $notice_category = $redux_demo['Middle-Carousel-Slider'];
                                 $notice_args = array(
                                'posts_per_page' => 10,
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

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3 Athor-Single-style">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php the_permalink(); ?>"><img style="max-height: 130px" src="<?php echo get_the_post_thumbnail_url('') ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php the_date(); ?></span>
                             <a href="<?php the_permalink(); ?>" class="post-author">By <?php the_author(); ?></a>
                                <a href="<?php the_permalink(); ?>"  class="post-title">
                                   <?php $string = get_the_title(); echo getTrimHtml($string,0,100); ?>...
                                </a>
                                    
                                </div>
                            </div>
                           <?php endif;?>
                                <?php endwhile;endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php endif; ?>
    <!-- ##### Video Area End ##### -->

    <!-- ##### Top News Area Start ##### -->
      <?php if ($redux_demo['Before-Footer-Section-opt']==1) : ?>
    <div class="top-news-area section-padding-100">
        <div class="">
            <div class="row" style="margin-right: 50px;
    margin-left: 50px;">
    <?php
        $notice_category = $redux_demo['Before-Footer-Section'];
         $notice_args = array(
            'posts_per_page' => 6,
            'offset' => 0,
            'cat' => $notice_category,
            'orderby' => 'date',
             'post_type' => 'post',
            'post_status' => 'publish',
             'suppress_filters' => true
                       );
          $catquery = new WP_Query( $notice_args);
             if($catquery->have_posts()) : while($catquery->have_posts()) : 
                $catquery->the_post();?>
                 <?php if ( has_post_thumbnail() ):?>
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5" style="    padding: 5px;">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url('') ?>" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date"><?php the_date(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="post-title">
                                <?php $string = get_the_title(); echo getTrimHtml($string,0,140); ?>...
                            </a>
                            <a href="<?php the_permalink(); ?>" class="post-author">By <?php the_author(); ?></a>
                        </div>
                    </div>
                </div>
         <?php endif;?>
 <?php endwhile;endif;?>
            <!--
                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="#" class="btn newsbox-btn">Load More</a>
                    </div>
                </div>
             -->
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- ##### Top News Area End ##### -->