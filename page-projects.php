<?php
/**
 * Template Name: Projects
 */
get_header(); ?>



<?php

    get_template_part( 'templates/section', 'banner' );

    while ( the_flexible_field('flexible_content') ) :
        get_template_part( 'templates/'. get_row_layout() );
    endwhile;
?>

<?php /*
     <section class="section-banner inverse">
        <div class="container">
            <div class="content-box">
                <h1 class="hero-title">Page tagline and description</h1>
                <div class="content big">
                    <p>We’re devoted to improving statewide student success through improving the student experience with technology tools and student-focused campaigns.</p>
                </div>
            </div>
        </div>
        <div class="centered-img">
            <img src="<?php echo bloginfo('template_directory'); ?>/img/projects_banner2x.png" alt="">
        </div>
    </section>


    <section class="section-content">
        <div class="container">
            <h2 class="section-title">What to expect?</h2>
            <div class="content">
                <p><strong>Our typical project outputs</strong> include research reports, actionable summaries, raw data, and design artifacts. Through Project Discovery and Solution Development.....</p>
            </div>
            <ul class="btn-list">
                <li><a href="#" class="btn" title="Contact the Lab"><span>Contact the Lab</span></a></li>
            </ul>
        </div>
    </section>


    <section class="section-article-list">
        <div class="container">
            <h2 class="box-title">Recent Projects</h2>
            <ul class="article-list">
                <li>
                    <div class="article-box">
                        <div class="img-box">
                            <a href="#" class="centered-img">
                                <img src="<?php echo bloginfo('template_directory'); ?>/img/solution@2x.png" alt="">
                            </a>
                        </div>
                        <div class="content-box">
                            <h3 class="small-title">Student Journey Project</h3>
                            <div class="content">
                                <p>With the overarching goal of creating a more seamless, equitable student onboarding process, we set out to understand how improved tool design could reduce prospective student drop-offs. The project included a landscape analysis of existing student-facing tools, persona development, student journey mapping, and development of a behavioral design framework to reduce barriers to student success.</p>
                            </div>
                            <ul class="btn-list">
                                <li><a href="#" class="btn-small" title="Read the project case study"><span>Read the project case study</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="article-box">
                        <div class="img-box">
                            <a href="#" class="centered-img">
                                <img src="<?php echo bloginfo('template_directory'); ?>/img/solution@2x.png" alt="">
                            </a>
                        </div>
                        <div class="content-box">
                            <h3 class="small-title">Wellness Central User Research Study</h3>
                            <div class="content">
                                <p>Before systemwide promotion of a new health and wellness tool, we gathered user feedback from current students about the tool’s messaging, navigability, and likelihood of tool usage. Interviews with current California community college students revealed several recommendations for an improved user experience.</p>
                            </div>
                            <ul class="btn-list">
                                <li><a href="#" class="btn-small" title="Read the project case study"><span>Read the project case study</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
*/ ?>

<?php get_footer(); ?>