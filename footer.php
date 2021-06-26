<?php 
    global $redux_demo;
?>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="<?php echo home_url();?>"><img style="max-height: 102px" src="<?php global $redux_demo; echo''.$redux_demo['opt_footer_logo']['url']; ?>" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="">
            <div class="row" style="margin-right: 15px;
    margin-left: 15px;">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                       
                                  <div class="footer-social-info">
                                        <?php if($redux_demo['opt-text-facebook']) : ?>
                                            <a data-toggle="tooltip" data-placement="top" title="facebook" href="<?php echo 'https://www.facebook.com/' . $redux_demo['opt-text-facebook'];?>" title="facebook" class="link share-facebook" aria-hidden="true"><i class="fa fa-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if($redux_demo['opt-text-twitter']) : ?>
                                            <a data-toggle="tooltip" data-placement="top" title="twitter" href="<?php echo 'https://www.twitter.com/' . $redux_demo['opt-text-twitter'];?>" class="link share-twitter"><i class="fa fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if($redux_demo['opt-text-gplus']) : ?>
                                            <a data-toggle="tooltip" data-placement="top" title="google plus" href="<?php echo 'https://plus.google.com/' . $redux_demo['opt-text-gplus'];?>" class="link share-google-plus"><i class="icons fa fa-google-plus"></i></a>
                                        <?php endif; ?>
                                        <?php if($redux_demo['opt-text-skype']) : ?>
                                            <a data-toggle="tooltip" data-placement="top" title="skype" href="<?php echo $redux_demo['opt-text-skype'];?>" class="link share-skype"><i class="fa fa-skype"></i></a>
                                        <?php endif; ?>
                                        <?php if($redux_demo['opt-text-linkedin']) : ?>
                                            <a data-toggle="tooltip" data-placement="top" title="linkedin" href="<?php echo $redux_demo['opt-text-linkedin'];?>" class="link share-pinterest"><i class="fa fa-pinterest"></i></a>
                                        <?php endif; ?> 
                                   </div>

                    
                    
                     
                     
                     
<div class="container" style="margin-left: 50px">
<div class="row footerStyle" style="text-align: left;">
   <div class="col-md-4" style="">
       <p><?php global $redux_demo; echo''.$redux_demo['editor-text-Footer-one']; ?></p> 
   </div> 
   <div class="col-md-4" style="">
       <p><?php global $redux_demo; echo''.$redux_demo['editor-text-Footer-two']; ?></p> 
   </div> 
   <div class="col-md-4" style="">
       <p><?php global $redux_demo; echo''.$redux_demo['editor-text-Footer-three']; ?></p> 
   </div> 
</div>
</div>
                     
                     
                


<!-- Copywrite Text -->


 <p class="copywrite-text"><a href="#">
<!-- FS-JESY -->
&copy;<script>document.write(new Date().getFullYear());</script> Campusfeature All rights reserved | Design & Developed <i class="fa fa-heart-o" aria-hidden="true"></i> By <a href="http://hi.fsjesy.amarsite.net" target="_blank">FS-JESY
</a>
</p>
<!-- FS-JESY -->

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <?php wp_footer(); ?>
    <!-- Popper js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/active.js"></script>
</body>
</html>