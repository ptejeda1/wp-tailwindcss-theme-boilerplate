<?php

/*
 * Template Name: Leadership Single
 * Template Post Type: page
 */

get_header();

?>

<div class="breadcrumbs bar pt-4 pb-5">
	<div class="m-auto w-1200">
		<ul class="flex justify-between items-center">
			<li><a href="">‹ Back to Leadership</a></li>
			<li>
				<ul class="flex">
					<li><a href="">About</a></li>
					<li><a href="">Leadership</a></li>
					<li class="active"><a href="">Gabriel Hammond</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>

<div class="has-bg-color mb-16" style="background-color: #003349;">
	<div class="m-auto w-1200">
		<div class="hero offset-bottom plain extended relative z-10">
				<div class="max-w-3xl m-auto">
					<div class="flex sm:flex-wrap-reverse sm:justify-center sm:text-center">
						<div class="img-wrap bg-center bg-cover bg-no-repeat p-40 -mb-10 mr-10" style="background-image: url(https://picsum.photos/200);"></div>
						<div class="sm:mb-10">
							<h1>Gabriel Hammond</h1>
							<p>Chief Executive Officer</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

<div class="m-auto w-1200">
	<div class="main-content main-single pt-10 pb-24">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus pharetra massa, scelerisque aliquet tellus molestie ut. Pellentesque rhoncus, justo aliquet congue molestie, ipsum turpis sollicitudin erat, non porta velit nisi ac enim. Vivamus cursus, tortor quis semper vulputate, enim enim sollicitudin libero, at ullamcorper ipsum lectus in magna. Ut enim est, tincidunt non mollis nec, congue sed lacus. Fusce efficitur pretium urna, at interdum nunc eleifend sed. Donec pretium, ligula at varius vulputate, enim turpis luctus velit, vel pharetra magna velit at lacus. Suspendisse lobortis neque vitae sapien posuere, nec tincidunt orci blandit. In quis blandit nisi.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut a non illum modi magnam fugiat tempore dolores optio doloribus unde, recusandae, sint possimus similique ducimus accusamus repellat adipisci cumque?</p>
	</div>
</div>

<hr>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();