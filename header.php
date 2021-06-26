<?php 
    global $redux_demo;
?>
<!DOCTYPE html>
<html lang="en">
<!-- FS-Jesy -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php bloginfo('name'); ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo $redux_demo['media-favicon']['url'];?>">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_deregister_script('jquery');wp_head(); ?>
</head>

<body>
    <!-- Preloader -->
    <!--
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
-->
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div style="border:1px solid #0711af" class="hide"></div>
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">
                    <div id="Logo">
                        <!-- Nav brand -->
                        <a href="<?php echo home_url();?>" class="nav-brand"><img src="<?php global $redux_demo; echo''.$redux_demo['opt_header_logo']['url']; ?>" alt=""></a>
                        <!-- Navbar Toggler -->
                     </div>
                      
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                           
<div class="row">
        <div class="col-md-12">
            
              <div style="float: left;padding-left: 25px;color:green">
                             <b>সর্বশেষ পোস্ট: : </b><marquee onmouseover="this.stop();" onmouseout="this.start();"><?php echo do_shortcode('[lastest-post]'); ?></marquee>
                              
              </div>
            
                <div class="" style="float: right;">
                 <?php get_search_form(); ?>
                </div>
        </div>
        
     
        <div class="col-md-12">
                     <!-- Close Button -->
                             <div class="classycloseIcon">
                                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                             </div>
                             
                           
                             <div class="classynav" style="text-align: center;">
                             <?php
                               
                                $args = array(
                                        'theme_location' => 'top-bar',
                                        'depth'          => 10,
                                        'container'      => false,
                                        'menu_class'     => 'megamenu',
                                        'walker'         => new Bootstrap_Walker_Nav_Menu()
                                );
 
                                wp_nav_menu($args);
                       
                               ?>
                             </div>
         </div>                  
</div>
         <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Breaking News Area Start ##### -->
   <hr>
    <!-- ##### Breaking News Area End ##### -->