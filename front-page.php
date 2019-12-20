<?php
/**
 * Template Name: Home
 */
get_header(); ?>

    <section class="section-banner hero">
        <div class="container">
            <div class="img-box">
                <img class="hero-img" src="<?php echo bloginfo('template_directory'); ?>/img/hero@2x.png" alt="Hero">
                <img class="hero-isometric-img" src="<?php echo bloginfo('template_directory'); ?>/img/isometric-phone-illustration@2x.png" alt="Hero">
            </div>
            <div class="content-box">
                <h1 class="hero-title">Serving the colleges through student validated design.</h1>
                <div class="content big">
                    <p><strong>Students use many digital tools throughout
                        their higher educational journeys.</strong> The lab
                        helps improve students’ experience with them
                        through the application of human-centered
                        design thinking.</p>
                    <p>The Student Centered Design Lab provides the
                        California Community Colleges with design
                        guidance, evaluation, and research.</p>
                </div>
            </div>
        </div>
    </section>


<?php
    while ( the_flexible_field('flexible_content') ) :
        get_template_part( 'templates/'. get_row_layout() );
    endwhile;
?>

<?php /*
    <section class="section-blockquote inverse">
        <div class="container">
            <div class="blockquote-wrap">
                <div class="blockquote-table">
                    <div class="inner-box">
                        <div class="blockquote-box">
                            <div class="content">
                                <p><strong>I think it’s great that you’re looking at student input.</strong> At the end of the day, it’s the student that will be using it and benefiting from it.</p>
                            </div>
                            <div class="blockquote-author">
                                <span class="name">– Student participant</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-info">
        <div class="container">
            <div class="img-box">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/commitment@2x.png" alt="Design with the student in mind">
            </div>
            <div class="content-box">
                <h2 class="section-title">Design with the student in mind.</h2>
                <div class="content">
                    <p>Commitment two of the <i>Vision for Success</i> states that the colleges should “<a href="#" title="">always design and decide with the student in mind</a>.”</p>
                    <p>The lab helps the California Community Colleges <b>keep students at the center</b> of development and refinement efforts. Authentic student input is gathered by the lab team to guide and test the design of technology tools, communication campaigns, and policy initiatives.</p>

                </div>
                <a href="#" class="btn-small" title="Read the vision for success"><span>Read the vision for success</span></a>
            </div>
        </div>
    </section>

    <section class="section-design-thinking inverse">
        <div class="container">
            <h2 class="section-thin-title">Applying <strong>design thinking</strong> to improve the student experience</h2>
            <ul class="development-stages-list">
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon user-natural"></span>
                        </div>
                        <h4 class="stage-name">Empathize</h4>
                    </div>
                </li>
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon design-process"></span>
                        </div>
                        <h4 class="stage-name">Define</h4>
                    </div>
                </li>
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon creativity-idea"></span>
                        </div>
                        <h4 class="stage-name">Ideate</h4>
                    </div>
                </li>
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon design-wireframe"></span>
                        </div>
                        <h4 class="stage-name">Prototype</h4>
                    </div>
                </li>
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon products-testing"></span>
                        </div>
                        <h4 class="stage-name">Test</h4>
                    </div>
                </li>
                <li>
                    <div class="stage-box">
                        <div class="stage-icon-wrap">
                            <span class="custom-icon product-launch"></span>
                        </div>
                        <h4 class="stage-name">Implement</h4>
                    </div>
                </li>
            </ul>

        </div>
    </section>
*/ ?>

    <section class="section-work-with-lab">
        <div class="container">
            <h2 class="section-title">Work with the lab.</h2>
            <div class="section-desc">
                <p>Interested in helping the lab test technology tools, communication campaigns, or policy initiatives, or testing your own products and services through the lab?</p>
            </div>

            <ul class="box-list">
                <li>
                    <div class="box">
                        <h3 class="box-title">Student Participants</h3>
                        <div class="box-img-wrap">
                            <div class="centered-img">
                                <img class="wider" src="<?php echo bloginfo('template_directory'); ?>/img/student_participants@2x.png" alt="Student Participants">
                            </div>
                        </div>
                        <a href="#" class="btn internal-link" title="Sign up as a student participant"><span>Sign up as a student participant</span></a>
                        <div class="box-desc content">
                            <p><b>Join our prospective and current student participant pool by completing the online screener.</b> If you match the profile needed for a study’s requirements, you may be contacted to participate in a study, either in-person or virtually. If selected for a study, you will be compensated for your time with a gift card.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <h3 class="box-title">Project Partners</h3>
                        <div class="box-img-wrap">
                            <div class="centered-img">
                                <img class="wider" src="<?php echo bloginfo('template_directory'); ?>/img/project_partners@2x.png" alt="Project Partners">
                            </div>
                        </div>
                        <a href="#" class="btn internal-link"><span>Partner with us</span></a>
                        <div class="box-desc">
                            <p><b>Have a student-facing technology tool, communications campaign, or policy initiative you’d like feedback on?</b> Please complete the project in-take form so the lab team can learn more about your project’s goals.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

<?php /*
    <section class="section-blockquote inverse">
        <div class="container">
            <div class="blockquote-wrap">
                <div class="blockquote-table">
                    <div class="inner-box">
                        <div class="blockquote-box">
                            <div class="content">
                                <p><b>Our vision for change puts a sharp focus on students’ goals and needs,</b> designing and making decisions that put students first, having high expectations and high levels of support for all students, including working adults.</p>
                            </div>
                            <div class="blockquote-author">
                                <span class="name">– Eloy Ortiz Oakley</span>
                                <span class="position">Chancellor,<br> CALIFORNIA COMMUNITY COLLEGES</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="blockquote-photo-img centered-img">
                            <img class="higher" src="<?php echo bloginfo('template_directory'); ?>/img/avatar@2x.png" alt="Avatar">
                        </div>
                        <div class="blockquote-author">
                            <span class="name">– Eloy Ortiz Oakley</span>
                            <span class="position">Chancellor,<br> CALIFORNIA COMMUNITY COLLEGES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
*/ ?>

    <section class="section-lab-services">
        <div class="container">
            <h2 class="section-title">Lab Services</h2>
            <div class="section-desc">
                <p>Student Centered Design Lab services are equity- and outcome-focused, and they are aligned with the Student Success Metrics.</p>
            </div>

            <h3 class="small-title">Lab services include</h3>

            <div class="inner-row">
                <div class="row-title-box">
                    <h3 class="row-title">Insights</h3>
                </div>
                <ul class="box-list services-list">
                    <li>
                        <div class="box">
                            <div class="box-img-wrap">
                                <span class="custom-icon work-office-companies"></span>
                            </div>
                            <div class="inner-box">
                                <h3 class="box-title">Expert Review</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Technical evaluation</li>
                                        <li>Design quality evaluation</li>
                                        <li>Cognitive walkthrough</li>
                                        <li>Heuristic evaluation</li>
                                        <li>Accessibility evaluation</li>
                                        <li>Persona development</li>
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
                                <h3 class="box-title">Student Feedback</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Visual preference (in-person and virtual)</li>
                                        <li>Usability testing (in-person and virtual)</li>
                                        <li>Field research</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="inner-row">
                <div class="row-title-box">
                    <h3 class="row-title">Research</h3>
                </div>
                <ul class="box-list services-list">
                    <li>
                        <div class="box">
                            <div class="box-img-wrap">
                                <span class="custom-icon business-products"></span>
                            </div>
                            <div class="inner-box">
                                <h3 class="box-title">Quantitative</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Google nalytics review</li>
                                        <li>Search log analysis</li>
                                        <li>User surveys</li>
                                        <li>Segmentation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="box-img-wrap">
                                <span class="custom-icon chat-people"></span>
                            </div>
                            <div class="inner-box">
                                <h3 class="box-title">Qualitative</h3>
                                <div class="box-desc">
                                    <ul>
                                        <li>Card sorting</li>
                                        <li>Tree test</li>
                                        <li>Affinity mapping</li>
                                        <li>Mental models</li>
                                        <li>Diary studies</li>
                                        <li>User interviews</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn internal-link" title="More about the lab’s services"><span>More about the lab’s services</span></a>
        </div>
    </section>

<?php get_footer(); ?>