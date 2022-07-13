<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow aios-scroll-section" id="content-slideshow" data-aios-scroll-title="slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">Slideshow</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
</section>
<!-- slideshow end -->
<!-- quick-search -->
<section class="hp-quick-search aios-scroll-section" id="content-quick-search" data-aios-scroll-title="quick-search">
    <div class="region-quick-search-container">
        <div class="quick-search-form">
            <div class="primary-qs-item site-title">
                <h3>Quick</h3>
                <h2>Search</h2>
            </div>
            <div class="secondary-qs-item">
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
            <div class="tertiary-qs-item">
                <input type="text" placeholder="City or Zip" aria-label="qs-fields" />
            </div>
            <div class="fourth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Beds</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="fifth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Baths</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="sixth-qs-item">
                <input type="text" placeholder="Min. Price" aria-label="qs-fields" />
            </div>
            <div class="seventh-qs-item">
                <input type="text" placeholder="Max. Price" aria-label="qs-fields" />
            </div>
            <div class="eighth-qs-item">
                <div class="qs-search"> <input type="submit" value="Search" aria-label="qs-submit" /> </div>
            </div>
            <div class="ninth-qs-item">
                <div class="qs-advanced"> <a href="[blogurl]" aria-label="qs-btn"> <span>Advanced</span> </a> </div>
            </div>
        </div>
    </div>
</section>
<!-- quick-search end -->
<!-- welcome -->
<section class="hp-welcome aios-scroll-section" id="content-welcome" data-aios-scroll-title="welcome">
    <div class="region-welcome-container">
        <div class="welcome-primary-section">
            <img alt="agent" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-agent.png" />
        </div>
        <div class="welcome-secondary-section">
            <div class="site-title">
                <h3>Alt</h3>
                <h2>Coins</h2>
            </div>
            <p>Welcome</p>
            <a href="[blogurl]" aria-label="READ MORE" class="site-btn">READ MORE</a>
        </div>
    </div>
</section>
<!-- welcome end -->
<!-- properties -->
<section class="hp-properties aios-scroll-section" id="content-properties" data-aios-scroll-title="properties">
    <div class="region-properties-container">
        <div class="properties-slick">
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-3.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-4.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-5.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-6.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-7.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-8.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="450" height="450"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-9.jpg" />
                </div>
                <div class="properties-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- properties end -->
<!-- communities -->
<section class="hp-communities aios-scroll-section" id="content-communities" data-aios-scroll-title="communities">
    <div class="region-communities-container">
        <p>Sample</p>
        <div class="contact-form ">
            <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
        </div>
    </div>
</section>
<!-- communities end -->
<!-- cta -->
<section class="hp-cta aios-scroll-section" id="content-cta" data-aios-scroll-title="cta">
    <div class="region-cta-container">
    </div>
</section>
<!-- cta end -->
<!-- videos -->
<section class="hp-videos aios-scroll-section" id="content-videos" data-aios-scroll-title="videos">
    <div class="region-videos-container">
        <div class="videos-slick">
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-1.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-2.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-3.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-4.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-5.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="370" height="370"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-6.jpg" />
                </div>
                <div class="videos-content">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- videos end -->
<div class="hp-sidebar">
    <div id="scroll-down">
        <ul class="aios-section-nav"></ul>
        <ul class="comp-social-sidebar">
        </ul>
        <div class="site-side-text">Slideshow</div>
    </div>
</div>


<?php get_footer(); ?>