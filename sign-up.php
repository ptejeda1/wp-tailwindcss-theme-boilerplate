<?php

/*
 * Template Name: Sign Up
 * Template Post Type: page
 */

get_header();

?>

<section style="background-color: #143e60;">
	<div class="m-auto w-1200">
		<div class="hero plain has-bg-color">
			<div class="text-center m-auto max-w-xl pb-16">
				<h1>Be in the Know</h1>
				<p>You’ll be the first to know when we share announcements, trends and events that are impacting industry. Sign up to receive news and insights from the Emles team. </p>
			</div>
		</div>
	</div>
</section>

<div class="" style="background: #f4f4f4;">
	<div class="wrap flex w-1200">
		<div class="m-auto flex w-full items-start lg:block main-content has-border px-12 md:px-6 py-10 -mt-10 bg-white mb-24 lg:pt-0">
			<div class="w-2/3 lg:max-w-3xl lg:w-full lg:mt-10 lg:max-w-full">
				<div class="main-content max-w-2xl lg:max-w-full">
					<form action="" class="form sign-up mb-10">
						<!-- <label for="*All Required Fields" class="required">*All Required Fields</label> -->
						<div class="flex items-center mb-5 xs:block">
							<label for="Apply Now" class="title w-full"><h3>Sign Up</h3></label>
							<label for="*All Required Fields" class="required" style="margin-bottom: 0;">*All Required Fields</label>
						</div>
						<input type="text" placeholder="First Name*" required>
						<input type="text" placeholder="Last Name *" required>
						<input type="text" placeholder="Email Address *" required>
						<input type="text" placeholder="Confirm Email Address *" required>
						<input type="text" placeholder="Company/Institution">

						<div class="flex items-center">
							<input type="checkbox" id="company-insights" class="mr-4">
							<label for="company-insights"><span class="text-base">company-insights</span></label>
						</div>
						<div class="flex items-center">
							<input type="checkbox" id="media" class="mr-4">
							<label for="media"><span class="text-base">Media (News/Press Releases)</span></label>
						</div>
						<input type="submit" value="Submit">

						<div class="mt-10 mb-8"><hr></div>

						<div class="text-sm">
							<p>Nunc nec turpis elit. Nulla dapibus odio a turpis pretium, in vestibulum dui viverra. Integer cursus accumsan magna, ac rhoncus magna lacinia quis. Integer nulla odio, hendrerit consequat justo ac, blandit mattis dui. </p>
							<p>Quisque vulputate quis purus ac ullamcorper. Praesent consectetur arcu et ipsum scelerisque, non egestas urna varius. Donec gravida lectus neque, sed condimentum nisl tincidunt vel. </p>
							<p>Phasellus congue vehicula dui eget viverra. Sed mollis quam a neque congue, vitae vestibulum arcu vestibulum. Sed quis ligula blandit, viverra erat a, vulputate nisi. Praesent viverra ex at nunc porttitor, et tincidunt turpis commodo. Phasellus quis tempor eros, vitae lobortis felis.</p>
							<p>Donec ac molestie sem. Donec imperdiet tempor velit, eget mattis ipsum tempor non. Ut vel purus purus. Nulla non leo ac ipsum scelerisque condimentum. Aenean magna sem, pharetra et ex vel, fringilla mattis lacus. Ut eget libero luctus, interdum est a, condimentum neque. Aliquam a enim ut lacus lobortis semper in in mi. Vivamus viverra vitae lorem a iaculis. Nam vel purus efficitur, viverra justo eget, posuere velit. Suspendisse id semper justo. Etiam vehicula eu ligula non luctus. Mauris rutrum posuere ex. Aenean ut massa sed sem placerat rutrum a eget lacus.</p>
						</div>
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
								<div class="type">ETFs &amp; Mutual Funds</div>
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