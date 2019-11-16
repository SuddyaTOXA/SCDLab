<?php
/**
 * Template Name: Home
 */
get_header(); ?>

    <section class="section section-blue">
        <div class="container">
            <h3 class="section-title">Our Services</h3>
            <ul class="services-list">
                <li>
                    <div class="service-box">
                        <div class="left-box">
                            <div class="icon-box">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="right-box">
                            <div class="inner-box">
                                <h4 class="service-title">Student Needs Discovery</h4>
                                <div class="content">
                                    <ul>
                                        <li>Expert evaluation</li>
                                        <li>Student recruitment</li>
                                        <li>Qualitative research</li>
                                        <li>Quantitative research</li>
                                        <li>Data analysis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-box">
                        <div class="left-box">
                            <div class="icon-box">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="right-box">
                            <div class="inner-box">
                                <h4 class="service-title">Solution Development</h4>
                                <div class="content">
                                    <ul>
                                        <li>Ideation</li>
                                        <li>Prototyping</li>
                                        <li>Expert validation</li>
                                        <li>Student validation</li>
                                        <li>Solution certification</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="btn-box">
                <button class="button" type="button">
                    <span class="button__text">Button</span>
                </button>
                <a href="" title="More about our services" class="btn">More about our services →</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <a href="" title="Contact us" class="btn">Contact us <span>→</span></a>
        </div>
    </section>

    <section class="section section-blue">
        <div class="container">
            <h3 class="section-title">Our projects’ features</h3>
            <div class="content">
                <ul class="list-two-columns">
                    <li>Outcome aligned</li>
                    <li>Equity-focused</li>
                    <li>Direct student benefit</li>
                    <li>Statewide or national reach</li>
                    <li>Aligned with system metrics (Vision for Success, Student Success Metrics, etc.)</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-content">
        <div class="container">
            <div class="content">

				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					the_content();

				endwhile; else: endif;
				?>

            </div>
        </div>
    </section>


<?php get_footer(); ?>