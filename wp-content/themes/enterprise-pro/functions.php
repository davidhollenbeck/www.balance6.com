<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'enterprise', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'enterprise' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Enterprise Pro', 'enterprise' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/enterprise/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'enterprise_load_scripts' );
function enterprise_load_scripts() {

	wp_enqueue_script( 'enterprise-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( '10plus-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,700,300italic|Titillium+Web:600', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'additional-fonts', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700', array(), CHILD_THEME_VERSION );
}

//* Add new image sizes
add_image_size( 'featured-image', 358, 200, TRUE );
add_image_size( 'home-top', 750, 600, TRUE );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'height'          => 80,
	'width'           => 320,
) );

//* Add support for additional color style options
add_theme_support( 'genesis-style-selector', array(
	'enterprise-pro-black'	=> __( 'Enterprise Pro Black', 'enterprise' ),
	'enterprise-pro-green'	=> __( 'Enterprise Pro Green', 'enterprise' ),
	'enterprise-pro-orange'	=> __( 'Enterprise Pro Orange', 'enterprise' ),
	'enterprise-pro-red'    => __( 'Enterprise Pro Red', 'enterprise' ),
	'enterprise-pro-teal'	=> __( 'Enterprise Pro Teal', 'enterprise' ),
) );

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	'site-inner',
	'footer-widgets',
	'footer',
) );

//* Rename Primary and Secondary Menu
add_theme_support( 'genesis-menus', array( 'primary' => __( 'After Header Menu', 'enterprise' ), 'secondary' => __( 'Footer Menu', 'enterprise' ) ) );

//* Reposition the primary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header_right', 'genesis_do_nav', 7 );

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 7 );

//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'enterprise_secondary_menu_args' );
function enterprise_secondary_menu_args( $args ){

	if( 'secondary' != $args['theme_location'] )
	return $args;

	$args['depth'] = 1;
	return $args;

}

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

//* Relocate after entry widget
remove_action( 'genesis_after_entry', 'genesis_after_entry_widget_area' );
add_action( 'genesis_after_entry', 'genesis_after_entry_widget_area', 5 );

add_filter('genesis_footer_creds_text', 'sp_footer_creds_filter');
function sp_footer_creds_filter( $creds ) {
	$creds = 'Website by <a href="https://10plusbrand.com" style="color:#31b2ed;">10+ Brand</a>';
	return $creds;
}

function balance_boxes() {
    ?>
    <div class="inner-wrap">
        <!-- <p style="text-align:center;"><span class="text-logo"><img src="<?php  echo home_url(); ?>/wp-content/uploads/2018/09/Balance-6-TextOnly.png" /></span></p> -->
        <div class="home-box-container first box-money">
            <h4>Money:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Productivity</p>
            <p>Profits</p>
            <p>Leadership</p>
            <p>Staff motivation & retention</p>
            <p>Strategic planning</p>
            <p>Money saving goals</p>
        </div>

        <div class="home-box-container box-health">
            <h4>Health:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Diet</p>
            <p>Exercise</p>
            <p>Sleep</p>
            <p>Weight management</p>
            <p>Energy level</p>
        </div>

        <div class="home-box-container box-relationship">
            <h4>Relationship:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Self esteem</p>
            <p>Overcoming negativity</p>
            <p>With family, significant other, kids</p>
            <p>With business associates, employees</p>
            <p>Communication, Team-building</p>
        </div>

        <div class="clear6"></div>

        <div class="home-box-container first box-time">
            <h4>Time Management:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Delegating work</p>
            <p>Vacation & downtime scheduling</p>
            <p>Time blocking</p>
            <p>Work/Home boundaries</p>
        </div>

        <div class="home-box-container box-self">
            <h4>Self Improvement:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Continuing education</p>
            <p>Personal goals</p>
            <p>Talent Development</p>
            <p>New Skills</p>
            <p>Hobbies & Interests</p>
        </div>

        <div class="home-box-container box-power">
            <h4>Higher Power:</h4>
            <h6 class="hover-instructions">Hover mouse to learn more</h6>
            <p>Spirituality</p>
            <p>Charity</p>
            <p>Community service</p>
            <p>Meditation/Prayer</p>
            <p>Support a cause</p>
        </div>

        <div class="clear6"></div>
    </div>

    <?php
}

function b6_wys($content) {
    if( $content ): ?>
        <div class="b6-inner-row b6-wys">
            <div class="b6-wys-inner">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="clear6"></div>
    <?php endif;
}

function b6_vidloop($video_id) {
    if( $video_id): ?>
    <div class="b6-inner-row b6-vidloop">
        <iframe class="b6-vidloop-container" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>?autoplay=1&origin=http://balance6.com&controls=0&disablekb=1&fs=0&iv_load_policy=3&loop=1&modestbranding=1&playsinline=1&rel=0&showinfo=0&playlist=<?php echo $video_id; ?>"></iframe>
    </div>
    <?php endif;
}

function b6_button($button) {
    $link = $button['link'];
    $text = $button['text'];
    if($link && $text): ?>
    <div class="b6-inner-row b6-button-container">
        <a href="<?php echo $link; ?>" class="button"><?php echo $text; ?></a>
    </div>
    <?php endif;
}

function b6_cta() {
    ?>
    <div class="inner-wrap">
        <h2 style="text-align:center; margin-bottom:35px;">Get A Free Assessment</h2>

        <p style="text-align:center;"><a href="#" class="button assessment-trigger" target="_blank">Download</a></p>
    </div>
    <?php

}

function b6_hero($hero) {

    $image = $hero['image'];
    $headline = $hero['headline'];
    $sub_headline = $hero['sub_headline'];
    $link_text = $hero['link_text'];
    $link = $hero['link'];
    $link_class = $hero['link_class'];
    $image_position = $hero['image_position'];

    if ($image && $headline):
        ?>
        <div class="hero services-hero image-separator-<?php echo $image_position; ?>" style="background-image:url('<?php echo $image; ?>')";>
            <div class="hero-inner">
                <div class="hero-text">
                    <h1><?php echo $headline; ?></h1>
                    <p><?php echo $sub_headline; ?></p>
                    <a href="<?php echo $link; ?>" class="button <?php echo $link_class; ?>"><?php echo $link_text; ?></a>
                </div>
            </div>
        </div>
        <div class="clear6"></div>
    <?php endif;
}

function b6_footer($group) {
    $image = $group['image'];
    $sub_headline = $group['sub_headline'];
    $headline = $group['headline'];
    $link = $group['link'];
    $link_text = $group['link_text'];
    $link_class = $group['link_class'];
    $image_position = $group['image_position'];

    if ($image && $headline):
    ?>
    <div class="image-separator-fs image-separator-<?php echo $image_position; ?>" style="background-image: url('<?php  echo $image; ?>'); background-attachment:initial; height:800px;">
        <div class="contact-info">
            <?php echo $sub_headline; ?>
        </div>
        <div class="image-cta">
            <h1><?php echo $headline; ?></h1><br/>
            <a href="<?php echo $link; ?>" class="button <?php echo $link_class; ?>" target="_blank"><?php echo $link_text; ?></a>
        </div>
    </div>

    <?php endif;

}

function tagline_bullets($class) {
    ?>
    <div class="tagline-bullets <?php echo $class; ?>">
        <h2>Higher Productivity | Better Relationships | More Profits </h2>
    </div>
    <?php
}