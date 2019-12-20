<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

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
            <img src="<?php echo bloginfo('template_directory'); ?>/img/contact_banner2x.png" alt="">
        </div>
    </section>



<?php
    while ( the_flexible_field('flexible_content') ) :
        get_template_part( 'templates/'. get_row_layout() );
    endwhile;
?>

<?php /*

    <section class="section-content">
        <div class="container">
            <h2 class="section-title">Have a student-facing tool you'd like to discuss?</h2>
            <div class="content">
                <p><strong>The lab is devoted</strong> to helping the California Community Colleges improve statewide student success among all students.</p>
                <p>Let's connect. The Student Centered Design Lab improves student success by providing student-centered research, design, guidance, and evaluation services for new and existing student-facing digital products, communication campaigns, and policymaking projects. Please fill out the lab’s project intake form to tell the team more about your project and its needs.</p>
            </div>
            <ul class="btn-list">
                <li><a href="#" class="btn" title="Have a Project ?"><span>Have a Project ?</span></a></li>
            </ul>
        </div>
    </section>

    <section class="section-form">
        <div class="container">
            <h3 class="box-title">Contact us now to begin the conversation.</h3>
            <div class="form-wrap"></div>
        </div>
    </section>



 user-natural : User natural
design-process : Design process
creativity-idea : Creativity idea
design-wireframe : Design wireframe
products-testing : Products testing
product-launch : Product launch
work-office-companies : Work office-companies
messages-people : Messages people
business-products : Business products
chat-people : Chat people
other : Other
 */?>
<?php get_footer(); ?>


