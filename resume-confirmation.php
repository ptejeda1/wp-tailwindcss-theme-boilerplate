<?php

/*
 * Template Name: Resume Confirmation
 * Template Post Type: page
 */

get_header();

?>


<div class="m-auto w-1200">
	<div class="hero plain">
		<div class="wrap">
			<h1>Thank You</h1>
		</div>
	</div>
</div>

<div class="callout py-16 pb-10 lg:pt-0 lg:pb-16 lg:mb-16" style="background: #f4f4f4;">
	<div class="w-1050 flex m-auto lg:mb-8 lg:block lg:pt-5">
		<div class="m-auto flex w-full items-start lg:block">
			<div class="w-2/3 lg:max-w-3xl lg:w-full lg:mt-10 lg:max-w-full">
				<div class="main-content max-w-2xl lg:max-w-full">
					<div class="blurb mb-16">
						<h5>Thank you for submitting your resume. </h5>
						<p>Your application has been received and will be reviewed by the appropriate staff to determine if your qualifications match the position’s requirements. </p>
						<p>If you are chosen for an interview, we will reach out to you to schedule a time to discuss this opportunity further. Thank you again for your interest in in Emles! </p>
					</div>		
				</div>
			</div>
			<div class="w-1/3 lg:w-full lg:max-w-full">
				<div class="side-blurb">					
					<?php get_template_part( 'templates/partials/sideblurb' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();