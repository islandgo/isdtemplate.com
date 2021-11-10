<?php get_header(); ?>
<!-- intro video -->
<div class="intro-video">
    <video src="<?php echo get_stylesheet_directory_uri() ?>/video/Final-Intro-Video.mp4" muted="" autoplay=""
        playsinline=""></video>
    <!-- <div class="intro-video-close-wrap">
        <a href="#" aria-label="skip" class="aios-initial-setup-dead-link"><img alt="skip" class="img-skip"
                src="[stylesheet_directory]/images/skip.jpg" /></a>
    </div> -->
</div>
<!-- intro video end -->

<!-- slideshow -->
<section class="hp-slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">hidden h2</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
</section>
<!-- slideshow end -->

<!-- quick-search -->
<section class="hp-quick-search">
    <div class="region-quick-search-container">
        <div class="quick-search-form">
            <div class="primary-qs-item">
                <select aria-label="qs-fields">
                    <option value="SFR,CND">House / Condo</option>
                    <option value="SFR">House Only</option>
                    <option value="CND">Condo Only</option>
                    <option value="RI">Multi-Family</option>
                    <option value="COM">Commercial</option>
                    <option value="LL">Lots / Land</option>
                    <option value="RI">Multi-Unit Residential</option>
                    <option value="MH">Mobile Home</option>
                    <option value="RNT">Rental</option>
                    <option value="FRM">Farms</option>
                </select>
            </div>
            <div class="secondary-qs-item">
                <input type="text" placeholder="City or Zip" aria-label="qs-fields" />
            </div>
            <div class="tertiary-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Beds</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="fourth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Baths</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="fifth-qs-item">
                <input type="text" placeholder="Min. Price" aria-label="qs-fields" />
            </div>
            <div class="sixth-qs-item">
                <input type="text" placeholder="Max. Price" aria-label="qs-fields" />
            </div>
            <div class="seventh-qs-item">
                <div class="qs-search"> <input type="submit" value="Search" aria-label="qs-submit" /> </div>
            </div>
            <div class="eighth-qs-item">
                <div class="qs-advanced"> <a href="[blogurl]" aria-label="qs-btn"> <span>Advanced</span> </a> </div>
            </div>
        </div>
    </div>
</section>
<!-- quick-search end -->
<!-- contact -->
<section class="hp-contact">
    <div class="region-contact-container">
        <p>Sample</p>
        <div class="contact-form ">
            <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
        </div>
    </div>
</section>
<!-- contact end -->
<!-- communities -->
<section class="hp-communities">
    <div class="region-communities-container">
        <div class="communities-slick">
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-1.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-2.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-3.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-4.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-5.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-6.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-7.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-8.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-9.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-10.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-11.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper"> <canvas width="529" height="370"></canvas> <img
                        alt="communities" class="img-communities canvas-img"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/communities-img-12.jpg" /> </div>
                <div class="communities-content">
                    <h3>Howard County</h3>
                    <p> 4932 LANSDOWNE ROAD, <br /> FREDERICKSBURG, VA 22408 </p> <span
                        class="site-btn-secondary">Button</span>
                </div>
            </a>
        </div>
</section>
<!-- communities end -->
<?php get_footer(); ?>