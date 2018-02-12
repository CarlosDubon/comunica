<footer>
<nav class="dark-blue-nav footer">
    <?php
    wp_nav_menu(array(
        'theme_location'=>'secciones-bottom',
        'container'=>'div',
        'container_class'=>'section-containers',
        'items_wrap'=>'<ul class="drak-ul">%3$s</ul>'
        
    ));
    ?>
</nav>
<div class="row justify-content-between" style="width:100%">
   <div class="col-lg-4">
       <a href="<?php echo esc_url(home_url());?>"><img class="footer-logo" src="<?php echo get_header_image();?>"/></a>
   </div>
   <div class="col-lg-4">
        <?php   
            wp_nav_menu(array(
           'theme_location'=>'social-network',
           'container'=>'div',
           'container_class'=>'container-social-network',
           'items_wrap'=>'<ul class="ul-social">%3$s</ul>'
            ));
        ?>
        <form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
            <input type="search" style="width:70%" class="form-control" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>"
                    value="<?php echo get_search_query() ?>" name="search"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <input type="submit" style="width:25%" class="btn btn-primary"
                value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>
       
   </div>
</div>
<div class="ScrollUp btn btn-secondary">
    <span style="color:#000" class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
</div>
</footer>
<?php wp_footer();?>
</body>
</html>
<script src="<?php bloginfo('template_url') ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/dinamic-bar.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/extras.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/jquery.slides.js"></script>
<script>
$(function(){
  $("#slideshow").slidesjs({
    height: 370,
    navegation: false
  });
});
</script>