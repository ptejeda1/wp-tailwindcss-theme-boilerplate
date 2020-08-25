<?php

/*
 * Template Name: Thank You
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
						<h5>We’ve received your message, and we’ll make sure it gets to the right people. </h5>
						<h5>We’ll respond as soon as possible. </h5>
					</div>		
				</div>
			</div>
			<div class="w-1/3 lg:w-full lg:max-w-full">
				<div class="side-blurb">					
					<ul class="contact-list pl-4 lg:pl-0">
						<li>
							<div>
								<div class="type">Corporate Office</div>
								<p>Emles Advisors, LLC.</p>
								<p>555 Broadway Ave</p>
								<p>City, State Zip</p>
							</div>
						</li>
						<li>
							<div>
								<div class="type">Media Contact</div>
								<p>e. <a href="mailto:media@emles.com">media@emles.com</a></p>
								<p>t. (213) 555-0113</p>
							</div>
						</li>
						<li>
							<div>
								<div class="type">ETFs & Mutual Funds</div>
								<p>e. <a href="mailto:media@emles.com">media@emles.com</a></p>
								<p>t. (213) 555-0113</p>
							</div>
						</li>
						<li>
							<div>
								<div class="type">Private Assets</div>
								<p>e. <a href="mailto:media@emles.com">media@emles.com</a></p>
								<p>t. (213) 555-0113</p>
							</div>
						</li>
						<li>
							<div>
								<div class="type">Digital Assets</div>
								<p>e. <a href="mailto:media@emles.com">media@emles.com</a></p>
								<p>t. (213) 555-0113</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();