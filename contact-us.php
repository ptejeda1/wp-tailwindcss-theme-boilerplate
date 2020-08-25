<?php

/*
 * Template Name: Contact us
 * Template Post Type: page
 */

get_header();

?>


<div class="m-auto w-1200">
	<div class="hero plain">
		<div class="wrap">
			<h1>Contact Us</h1>
		</div>
	</div>
</div>

<div class="callout py-16 pb-10 lg:pt-0 lg:pb-16 lg:mb-16" style="background: #f4f4f4;">
	<div class="w-1050 flex m-auto lg:mb-8 lg:block lg:pt-5">
		<div class="m-auto flex w-full items-start lg:block">
			<div class="w-2/3 lg:max-w-3xl lg:w-full lg:mt-10 lg:max-w-full">
				<div class="main-content max-w-2xl lg:max-w-full">
					<div class="blurb mb-16">
						<h5>If you have a question about our products or company, please use the form below to connect. </h5>
						<p>To make sure your request makes it to the right team, be sure to provide your full name, phone number, and details of your question. </p>
						<p>We’re always happy to discuss our solutions and our products. We’ll get back to you as soon as we can. </p>
					</div>		

					<form action="" class="form mb-20">
						<div class="flex items-center mb-5 xs:block">
							<label for="*All Required Fields" class="required" style="margin-bottom: 0;">*All Required Fields</label>
						</div>
						<input type="text" placeholder="First Name*" required>
						<input type="text" placeholder="Last Name *" required>
						<input type="text" placeholder="Phone *" required>
						<input type="text" placeholder="Email Address *" required>
						<input type="text" placeholder="Confirm Email Address *" required>
						<input type="text" placeholder="Company">
						<label for="inquiry">Inquiry *</label>
						<textarea name="" id="" cols="40" rows="10"></textarea>

						<input type="submit" value="Submit Inquiry">
					</form>			
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