<?php
/**
 * This file adds the Home Page to the Enterprise Pro Theme.
 *
 * @author StudioPress
 * @package Enterprise Pro
 * @subpackage Customizations
 */

add_action( 'genesis_meta', 'enterprise_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function enterprise_home_genesis_meta() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-bottom' ) ) {

		//* Force full-width-content layout setting
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		//* Add enterprise-pro-home body class
		add_filter( 'body_class', 'enterprise_body_class' );

		//* Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		//* Add home top widgets
		add_action( 'genesis_after_header', 'enterprise_home_top_widgets' );

		//* Add home bottom widgets
		add_action( 'genesis_loop', 'enterprise_home_bottom_widgets' );

	}
}

function enterprise_body_class( $classes ) {

		$classes[] = 'enterprise-pro-home';
		return $classes;

}

function home_hero() {
   ?>
		<div class="hero home-hero" style="background-image:url('<?php  echo home_url(); ?>/wp-content/uploads/2018/10/Home-Header-List.jpg')";>
			<div class="hero-inner">
                <div class="hero-text">
                    <h1>Better Life, <br>Better Business</h1>
                    <p>Business and life coaching</p>
                    <a href="#" class="button contact-trigger">Learn More</a>
                </div>
            </div>
		</div>
        <div class="clear6"></div>
	<?php
}

add_action('genesis_before_content_sidebar_wrap', 'home_hero', 10);

function home_videos() {
    ?>


    <div class="clear6"></div>
    <div class="one-half first">
        <div class="inner-wrap">
            <div class="video-script-wrap">
                <h2>Watch Video</h2>
                <div class="vimeo-container">
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/AD2-8BWOvXA?controls=0&?modestbranding=1&autoplay=0&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="video-button-wrap">
                <span>I’m Christoph Nauer, certified business and life coach, helping business owners increase productivity, profits and improve personal life. I coach business owners to work smarter, not longer to nurture yourself and your relationships, AND making more money with less stress. My coaching includes strategies and plans, both financially and timewise.
				<br/><br />With a comprehensive approach, we set goals in 6 categories, attention to only one or two of them can lead to work-life imbalance with negative consequences for all involved - yourself, your family, employees, clients, AND your bottom line.
				<br/><br />Keeping healthy work-life boundaries will help you stay off the hamster’s wheel. I check on performance regularly, to hold you accountable. I also offer customized leadership training, team building and employee retention on a long term basis. You will learn how to delegate, own your schedule, get things done, have less stress, more time and money and longer vacations. A growing list of my happy clients experience a sense of control and empowerment in both business and life.
				</span>

                </p>
                <p class="video-button-wrap hide-desktop">
                    <br><br><a href="#" class="button home-button-trigger read-more">Read More</a>
                </p>
            </div>
        </div>

    </div>
    <div class="one-half">
        <div class="inner-wrap">
            <div class="video-script-wrap">
                <h2>Watch Video</h2>
                <div class="vimeo-container">
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/Om8rLNb7EmU?controls=0&?modestbranding=1&autoplay=0&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <p class="video-button-wrap">
                <span>Investing in business coaching has a ROI of 529%, it can be as high as 788% if adding increased employee retention, not to mention all the tax write off for coaching. In addition to one-on-one coaching, I also have monthly mastermind group sessions. I have a 30-day money back guarantee. I let you know in the beginning what you can expect in 90 days. What does it cost you to wait?<br /><br />Call me if you have any of these symptoms, or different ones:
                <ul style="text-align:center;">
					<li>Work on average 12 or more hours a day,</li>
					<li>Exercise less than twice a week,</li>
					<li>Have not taken a vacation for a couple of years, have no days off,</li>
					<li>Not delegate, or not have enough staff, do everything yourself,</li>
					<li>Bring work home frequently,</li>
					<li>Have problem sleeping,</li>
					<li>Doubt yourself, have anxiety and fear of losing control, fear of failure,</li>
					<li>Work is all consuming, your relationships are stressed.</li>
                </ul>
                </span>
                </p>
            </div>
            <p class="video-button-wrap hide-desktop">
                <br><br><a href="#" class="button home-button-trigger read-more">Read More</a>
            </p>
        </div>
    </div>
    <div class="clear6"></div>
    <div class="one-half first hide-mobile">
        <div class="inner-wrap">
            <p class="video-button-wrap">
                <br><br><a href="#" class="button home-button-trigger read-more">Read More</a>
            </p>
        </div>
    </div>
    <div class="one-half hide-mobile">
        <div class="inner-wrap">
            <p class="video-button-wrap">
                <br><br><a href="#" class="button home-button-trigger read-more">Read More</a>
            </p>
        </div>
    </div>
    <div class="clear6 hide-mobile"></div>
    <?php
}

add_action('genesis_before_content_sidebar_wrap', 'home_videos', 11);

add_action('genesis_before_content_sidebar_wrap',  'balance_boxes', 12);

function home_cta_one() {
    ?>
    <div class="inner-wrap">
        <h2 style="text-align:center; margin-bottom:35px;">Get A Free Assessment</h2>

        <p style="text-align:center;"><a href="#" class="button assessment-trigger" target="_blank">Download</a></p>
    </div>
    <?php

}

add_action('genesis_before_content_sidebar_wrap', 'home_cta_one', 13);












remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

function home_separator_two() {
	?>
    <div class="image-separator-fs" style="background-image: url('<?php  echo home_url(); ?>/wp-content/uploads/2018/09/Home2.jpg');">
        <div class="separator-contact-inner">
            <?php tagline_bullets('image'); ?>
            <a href="#" class="button contact-trigger">Contact Us</a>
        </div>
    </div>

	<?php

}

add_action('genesis_after_entry', 'home_separator_two', 15);

function work_with_coach() {
	?>
    <div class="inner-wrap">
        <div class="percentage-list">
            <h2 style="text-align:center; margin-bottom:35px;">Business owners experience the following outcomes as a result of working with a coach:</h2>
            <ul>
                <li>Self-awareness: <span>67.6%</span></li>
                <li>Setting better goals: <span>62.4%</span></li>
                <li>More balanced life: <span>60.5%</span></li>
                <li>Lower stress levels: <span>57.1%</span></li>
                <li>Self-discovery: <span>52.9%</span></li>
                <li>Self-confidence: <span>52.4%</span></li>
                <li>Improvement in quality of life: <span>43.3%</span></li>
                <li>Enhanced communication skills: <span>39.5%</span></li>
                <li>Project completion: <span>35.7%</span></li>
                <li>Health or fitness improvement: <span>33.8%</span></li>
                <li>Better relationship w/ boss, co-workers: <span>33.3%</span></li>
                <li>Better family relationship(s): <span>33.3%</span></li>
                <li>Increased energy: <span>31.9%</span></li>
                <li>More fun: <span>31.9%</span></li>
                <li>More income: <span>25.7%</span></li>
                <li>Stopped a bad habit: <span>25.7%</span></li>
                <li>Change in career: <span>24.3%</span></li>
                <li>More free time: <span>22.9%</span></li>
                <li>Increased profitability of business: <span>17.1%</span></li>
                <li>Other: <span>15.3%</span></li>
                <li>Started new business: <span>12.9%</span></li>
                <li>Empowered employees: <span>11.0%</span></li>
            </ul>
        </div>
    </div>
	<?php
}

add_action('genesis_after_entry', 'work_with_coach', 16);

function home_separator_three() {
	?>
    <div class="image-separator-fs quote" style="background-image: url('<?php  echo home_url(); ?>/wp-content/uploads/2018/09/Home3.jpg');">
        <h1 class="image-quote">"No one can be successful in business for the long term, if their personal life is a mess."</h1>
    </div>

	<?php

}

add_action('genesis_after_entry', 'home_separator_three', 17);




function home_testimonials() {
    ?>
    <div class="testimonial-slider">
		<div class="testimonial">
			<div class="testimonial-content">
				<div class="testimonial-icon">
					<i class="fa fa-quote-left"></i>
				</div>
				<p class="description">
					“my team’s production increased 4x over!”
				</p>
				<h3 class="title"><span class="post">- Rebecca</span></h3>
			</div>

		</div>
		<div class="testimonial">
			<div class="testimonial-content">
				<div class="testimonial-icon">
					<i class="fa fa-quote-left"></i>
				</div>
				<p class="description">
					“I am taking more vacations than I ever have before and my income has gone up!”
				</p>
				<h3 class="title"><span class="post">- Marcella</span></h3>
			</div>

		</div>
		<div class="testimonial">
			<div class="testimonial-content">
				<div class="testimonial-icon">
					<i class="fa fa-quote-left"></i>
				</div>
				<p class="description">
					“I have begun to focus more of my time and energy on things that really matter.”
				</p>
				<h3 class="title"><span class="post">- Jim</span></h3>
			</div>

		</div>
		<div class="clear6"></div>
	</div>
    <?php
}

add_action('genesis_after_entry', 'home_testimonials', 18);

function home_footer() {
	?>
    <div class="image-separator-fs" style="background-image: url('<?php  echo home_url(); ?>/wp-content/uploads/2018/09/shutterstock_192420545.jpg'); background-attachment:initial; height:800px;">
        <div class="contact-info">
            <span><strong>Phone: (925) 286-1886</strong></span>
            <span><strong>Email: Life@Balance6.Biz</strong></span>
        </div>
        <div class="image-cta">
            <h1>Get A Free Assessment</h1><br/>
            <a href="#" class="button assessment-trigger" target="_blank">Download</a>
        </div>
    </div>

	<?php

}

add_action('genesis_after_entry', 'home_footer', 19);

genesis();

