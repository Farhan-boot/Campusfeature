<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
    get_header();
    $search_query = get_search_query();
?>
<div style="min-height: 300px">
<!-- Begin Breadcrumb content -->
<div style="font-size: 20px;text-align: center;padding-top: 10px;padding-bottom: 20px">
    <?php printf( __( 'Search Results for : %s', 'naabssmartdesign' ), '<span>' . $search_query . '</span>' ); ?>
</div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="container">
               <div class="col-md-12 col-sm-12" style="border:1px solid #0711AF;margin-bottom: 10px;border-radius: 5px">
            <!-- this is our loop -->
            <h5 style="font-size: 20px;padding-left: 8px"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p style="padding-bottom: 10px;padding-left: 8px">
                <?php
                    $search_query_index=strpos(get_the_content(), "$search_query");
                    $search_query_indexStart=0;
                    if($search_query_indexStart >= 100){$search_query_indexStrat = $search_query_index - 50;}
                    $search_query_indexEnd=$search_query_indexStart + 400;
                    echo getTrimHtml(get_the_content(), $search_query_indexStart, $search_query_indexEnd);
                ?>
            </p>
           </div>
       </div>










            <?php endwhile; else : ?>


            <div style="font-size: 30px;text-align: center;margin-top: 35px">
            <!-- here's where we'll put a search form if there're no posts -->
    <h3><i class="fa fa-exclamation-triangle fa-fw color-red"></i>NOT Found! Try to search another keyword!</h3>
          </div>
            <?php endif; ?>

</div>

<div class="clear"></div>
<div class="container botom-img">
<div class="row botom-row">
    <div class="col-md-12 col-sm-12 botom-bodar">
        
    </div>
</div>
</div>




      
<?php get_footer(); ?>

















