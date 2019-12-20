<?php
/**
 * Template Name: Services
 */
get_header(); ?>

    <section class="section-banner">
        <div class="container">
            <div class="img-box">
                <img class="hero-img" src="<?php echo bloginfo('template_directory'); ?>/img/services_hero@2x.png" alt="Hero">
            </div>
            <div class="content-box">
                <h1 class="hero-title">Providing actionable student insights, recommendations, and design resources.</h1>
                <div class="content big">
                    <p>The lab helps the California Community Colleges keep <strong>students' user experience (UX)</strong> front and center.</p>
                    <p>Authentic student input is gathered and incorporated into the (re)design processes of systemwide technology tool, communication campaign, and public policy efforts.</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="hr-line">

    <section class="section-info">
        <div class="container">
            <div class="img-box">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/student_feedback@2x.png" alt="Gathering student feedback">
            </div>
            <div class="content-box">
                <h2 class="section-title">Gathering student feedback.</h2>
                <div class="content">
                    <p>Access to a <strong>diverse student participant pool</strong> is vital to student-centered design.</p>
                    <p>Whether you’re aiming to discover students’ unmet usability needs or test hypotheses, the lab team can help. </p>
                </div>
                <ul class="btn-list">
                    <li><a href="#" class="btn" title="Student Participation"><span>Student Participation</span></a></li>
                    <li><a href="#" class="btn" title="Contact the Lab"><span>Contact the Lab</span></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-lab-services inverse bg-blue">
        <div class="container">
            <h2 class="section-title">Quantitative and Qualitative Research</h2>
            <div class="inner-row">
                <ul class="box-list services-list">
                    <li>
                        <div class="box">
                            <div class="box-img-wrap">
                                <span class="custom-icon work-office-companies"></span>
                            </div>
                            <div class="inner-box">
                                <h3 class="box-title">Expert Insights</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Cognitive walkthrough</li>
                                        <li>Design quality evaluation</li>
                                        <li>Heuristic evaluation</li>
                                        <li>Technical evaluation</li>
                                        <li>Accessibility evaluation</li>
                                        <li>Google Analytics and search log analyses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="box-img-wrap">
                                <span class="custom-icon messages-people"></span>
                            </div>
                            <div class="inner-box">
                                <h3 class="box-title">Student Insights</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Usability testing</li>
                                        <li>User interviews</li>
                                        <li>User focus groups</li>
                                        <li>User surveys</li>
                                        <li>Field research</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-two-columns">
        <div class="container">
            <div class="columns-wrap">
                <div class="column-box">
                    <div class="reverse-box">
                        <div class="inner-box">
                            <h2 class="section-title">Developing student-centric solutions.</h2>
                        </div>
                        <div class="inner-box">
                            <img src="<?php echo bloginfo('template_directory'); ?>/img/solution@2x.png" alt="Design with the student in mind">
                        </div>
                    </div>
                </div>
                <div class="column-box">
                    <div class="content">
                        <p>The lab team and its partners co-design solutions that are designed with the student in mind, for an improved student experience.</p>
                        <h5>Typical solution development activities include:</h5>
                        <ul>
                            <li>Ideation</li>
                            <li>Prototyping</li>
                            <li>Expert validation</li>
                            <li>Student validation</li>
                            <li>Solution certification</li>
                        </ul>
                        <p>Based on partners’ needs, solutions may include a cognitive walkthrough analysis, affinity mapping, segmentation analysis, or persona development.</p>
                        <p>Projects are tailored to partners’ needs and may include in-depth written analyses, prototypes, wireframes, or full-solution development.</p>
                    </div>
                    <ul class="btn-list">
                        <li><a href="#" class="btn-small" title="Learn more about the Lab"><span>Learn more about the Lab</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>