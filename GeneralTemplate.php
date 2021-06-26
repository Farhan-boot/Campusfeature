<?php 

/*
Template Name:General-Template
*/

?>


<?php get_header(); ?>

<div class="clear"></div>
<!-- start slider -->
<div class="container">
  <div class="col-md-12">

<?php while(have_posts()) : the_post();?>

<h2 class="text-center"><?php the_title();?></h2>
<?php the_content();?>

<?php endwhile ?>


  </div>

<!-- start notice -->

  </div></br></br></br>
  <!-- end notice -->

<div class="clear"></div>
<div class="container botom-img">
<div class="row botom-row">
	<div class="col-md-12 col-sm-12 botom-bodar">
		
	</div>
</div>
</div>
<?php get_footer(); ?>

<div class="clear"></div>

