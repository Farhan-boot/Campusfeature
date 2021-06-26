<?php get_header(); ?>


<div class="text-center" style="font-weight: bold;">
            <?php if (have_posts()) : ?>

            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            <h2 class="pagetitle"><?php single_cat_title(); ?></h2>

            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h2 class="pagetitle">Author Archive</h2>

            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h2 class="pagetitle">Blog Archives</h2>

            <?php } ?>
</div>


<!--
<?php while(have_posts()) : the_post(); ?>

          <?php the_post_thumbnail(); ?>
            <h1><?php the_title();?></h1>  
            <?php the_content();?>
 <?php endwhile; ?>
-->

     

<div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">









<?php while(have_posts()) : the_post(); ?>
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5" style="padding-left: 20px;
    padding-right: 20px;">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date"><?php  the_time('d');?> <?php  the_time('M Y');?> </span>
                            <a href="<?php the_permalink(); ?>" class="post-title">
                                <?php echo wp_trim_words( get_the_title(), 5, '...' );?>
                            </a>
                            <p>
                                 <?php echo wp_trim_words( get_the_content(), 12, '...' );?>
                            </p>
                        </div>
                    </div>
                </div>
 <?php endwhile; ?>

<div class="col-md-12 pageg" style="text-align: center;">
            <?php 
previous_posts_link();
next_posts_link();
             ?>
</div>
            </div>
        </div>
    </div>


 <?php else : ?>
            <h2 class="center" style="min-height: 170px">Not Found</h2>
           
<?php endif; ?>













<?php get_footer();?>



