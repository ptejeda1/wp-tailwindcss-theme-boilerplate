<?php

/*
 * Template Name: Careers Single
 * Template Post Type: page
 */

get_header();

?>

<div class="breadcrumbs bar pt-4 pb-5">
	<div class="m-auto w-1200">
		<ul>
			<li><a href="">‹ Back to Careers</a></li>
		</ul>
	</div>
</div>

<div class="m-auto w-1200">
	<div class="hero plain">
		<div class="wrap">
			<h1>Quisque sollicitudin, risus id</h1>
			<p>Location, Division, Position Type</p>
			<a href="" class="btn">Apply Now <span class="icon-arrow">&#8963;</span></a>
		</div>
	</div>
</div>

<div class="callout py-16 pb-10 lg:pt-0 lg:pb-16 lg:mb-16" style="background: #f4f4f4;">
	<div class="w-1050 flex m-auto lg:mb-8 lg:block lg:pt-5">
		<div class="m-auto flex w-full items-start lg:block">
			<div class="w-2/3 lg:max-w-3xl lg:w-full lg:mt-10 lg:max-w-full">
				<div class="main-content max-w-2xl lg:max-w-full">
					<div class="blurb mb-16">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus pharetra massa, scelerisque aliquet tellus molestie ut. Pellentesque rhoncus, justo aliquet congue molestie, ipsum turpis sollicitudin erat, non porta velit nisi ac enim.</p>

						<p>Sed mattis mi id enim accumsan euismod sed cursus nisi. Phasellus interdum ornare nunc, sit amet condimentum nisl eleifend eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rutrum est. Integer auctor eros lacus, non scelerisque urna tincidunt tristique. Aliquam vitae lorem non libero eleifend sollicitudin id et tellus. Quisque et eleifend quam.</p>

						<h2>Responsibilities</h2>
						<ul class="list-items ml-8 mb-10 md:ml-0">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						</ul>

						<h2>Qualifications</h2>
						<ul class="list-items ml-8 mb-10 md:ml-0">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						</ul>

						<h2>Benefits and Perks</h2>
						<ul class="list-items ml-8 mb-10 md:ml-0">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						</ul>
					</div>		

					<form action="" class="form mb-20">
						<div class="flex items-center mb-5 xs:block">
							<label for="Apply Now" class="title w-full">Apply Now</label>
							<label for="*All Required Fields" class="required" style="margin-bottom: 0;">*All Required Fields</label>
						</div>
						<input type="text" placeholder="First Name*" required>
						<input type="text" placeholder="Last Name *" required>
						<input type="text" placeholder="Phone *" required>
						<input type="text" placeholder="Email Address *" required>
						<input type="text" placeholder="Email Address *" required>

						<label for="inquiry" class="mt-5" style="margin-bottom: 0;">Resume *</label>
						<label for=""><small>Attach resume as .pdf, .doc, .docx, .txt, .ppt, or .rtf</small></label>
						<input type="file">
						
						<input type="submit" value="Submit Application">
					</form>			
				</div>
			</div>
			<div class="w-1/3 lg:w-full lg:max-w-full">
				<div class="side-blurb">					
					
					<?php get_template_part( 'templates/partials/sideblurb' ); ?>
					

					<div class="share button flex justify-between items-center">
						<span>Share</span>
						<ul class="flex">
							<li><a href="" class="icon ml-2 inline-block"><?php get_template_part( 'templates/partials/icon-facebook' ); ?></a></li>	
							<li><a href="" class="icon ml-2 inline-block"><?php get_template_part( 'templates/partials/icon-twitter' ); ?></a></li>	
						</ul>
					</div>
				</div>

				

			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();