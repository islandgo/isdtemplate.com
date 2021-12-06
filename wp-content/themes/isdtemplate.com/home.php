<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">hidden h2</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
</section>
<!-- slideshow end -->
<!-- welcome -->
<section class="hp-welcome">
    <div class="region-welcome-container">
    </div>
</section>
<!-- welcome end -->
<?php get_footer(); ?>