<?php
    $title   = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $form    = get_sub_field('select_form');
    $form_id = ($form && is_array($form) && count($form) == 1) ? $form[0] : '';

	if ($title || $form_id) :
		?>
        <section class="section-form">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h3 class="box-title">'.$title.'</h3>';

                    if ($form_id)
                        echo '<div class="form-wrap">'.do_shortcode('[contact-form-7 id="'.$form_id.'" title="'.esc_attr(strip_tags($title)).'"]').'</div>';
                ?>
            </div>
        </section>
		<?php
	endif;
/*
 <ul class="form-list">
	<li><label for="your-find-us">First, how did you learn about the Student Centered Design Lab? <span>*</span></label>[text* your-find-us id:your-find-us class:input-style ]</li>
	<li><label for="project-desc">Please describe your project and its goal(s).<span>*</span></label>[textarea* project-desc id:project-desc class:input-style ]</li>
	<li><label for="user-feedback">Please describe the type of user feedback specifically needed for your project. (Ex. prospective CCC students, current CCC students, students of a particular age, race/ethnicity, socioeconomic status, etc.)<span>*</span></label>[textarea* user-feedback id:user-feedback class:input-style ]</li>
	<li><label for="discovery-or-research">Have you conducted any type of discovery or research for your project? (Please select ALL that apply.) <span>*</span></label>[checkbox* discovery-or-research use_label_element id:discovery-or-research "Competitor / market analysis" "Content inventory or audit" "Analytics review" "Existing data analysis and synthesis" "User interviews" "User focus groups" "User surveys" "Other"][text discovery-or-research_other id:discovery-or-research_other class:input-style]</li>
	<li><label for="share-links">Please share links to any relevant research files.</label>[textarea share-links id:share-links class:input-style ]</li>
	<li><label for="timeline-project">What is the timeline for your project?<span>*</span></label>[radio timeline-project use_label_element id:project "2 weeks" "4 weeks" "2 months" "3 months" "6 months"]</li>
	<li><label for="allotted-budget">What is your allotted budget for your project?<span>*</span></label>[textarea* allotted-budget id:allotted-budget class:input-style ]</li>
	<li><label for="another-event">Is the project planned to coincide with another event?<span>*</span></label>[textarea* another-event id:another-event class:input-style ]</li>
	<li><label for="your-stakeholders">What other stakeholders are part of your project? (Please select ALL that apply.)<span>*</span></label>[checkbox* your-stakeholders use_label_element id:your-stakeholders "Web or Application Developers" "User Interface Designers" "Project Managers" "Product Managers" "Content Strategists" "Interaction Designers" "Information Architects" "User Researchers" "Other"][text your-stakeholders_other id:your-stakeholders_other class:input-style]</li>
	<li><label for="your-organization">Organization<span>*</span></label>[text* your-organization id:your-organization class:input-style ]</li>
	<li><label for="your-first-name">First name<span>*</span></label>[text* your-first-name id:your-first-name class:input-style ]</li>
	<li><label for="your-last-name">Last name<span>*</span></label>[text* your-last-name id:your-last-name class:input-style ]</li>
	<li><label for="your-email">Email<span>*</span></label>[email* your-email id:your-email class:input-style ]</li>
	<li><label for="your-phone-number">Phone Number<span>*</span></label>[tel* your-phone-number id:your-phone-number class:input-style ]</li>
	<li>[submit class:btn "Submit"]</li>
</ul>
 */