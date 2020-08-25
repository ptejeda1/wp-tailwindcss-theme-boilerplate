<?php

/*
 * Template Name: Insights Single
 * Template Post Type: page
 */

get_header();

?>

<div class="breadcrumbs bar pt-4 pb-5">
	<div class="m-auto w-1200">
		<ul>
			<li><a href="">‹ Back to Insights</a></li>
		</ul>
	</div>
</div>

<div class="has-bg-cover bg-top relative bg-cover bg-no-repeat has-overlay light mb-16" style="background-image: url(/wp-content/themes/emles/assets/img/thumb_01.jpg);">
	<div class="m-auto w-1200">
		<div class="hero plain extended relative z-10">
				<div class="xl:max-w-xl lg:max-w-3xl text-center m-auto">
					<h1>Quisque sollicitudin, risus id gravida dictum</h1>
					<p>Morbi eget purus et diam fringilla varius ac placerat erat. Cras nec elementum nulla.</p>
					<div class="date mt-5"><strong>May 4, 2020</strong></div>
				</div>
		</div>
	</div>
</div>

<div class="m-auto w-1200">
	<div class="main-content main-single">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus pharetra massa, scelerisque aliquet tellus molestie ut. Pellentesque rhoncus, justo aliquet congue molestie, ipsum turpis sollicitudin erat, non porta velit nisi ac enim. Vivamus cursus, tortor quis semper vulputate, enim enim sollicitudin libero, at ullamcorper ipsum lectus in magna. Ut enim est, tincidunt non mollis nec, congue sed lacus. Fusce efficitur pretium urna, at interdum nunc eleifend sed. Donec pretium, ligula at varius vulputate, enim turpis luctus velit, vel pharetra magna velit at lacus. Suspendisse lobortis neque vitae sapien posuere, nec tincidunt orci blandit. In quis blandit nisi.</p>

		<blockquote>“Aliquam vitae lorem non libero eleifend sollicitudin id et tellus. Quisque et eleifend quam.”</blockquote>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus pharetra massa, scelerisque aliquet tellus molestie ut. Pellentesque rhoncus, justo aliquet congue molestie, ipsum turpis sollicitudin erat, non porta velit nisi ac enim. Vivamus cursus, tortor quis semper vulputate, enim enim sollicitudin libero, at ullamcorper ipsum lectus in magna. Ut enim est, </p>

		<img src="https://picsum.photos/200" alt="img:Image">

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus pharetra massa, scelerisque aliquet tellus molestie ut. Pellentesque rhoncus, justo aliquet congue molestie, ipsum turpis sollicitudin erat, non porta velit nisi ac enim. Vivamus cursus, tortor quis semper vulputate, enim enim sollicitudin libero, at ullamcorper ipsum lectus in magna. Ut enim est, tincidunt non mollis nec, congue sed lacus. Fusce efficitur pretium urna, at interdum nunc eleifend sed. Donec pretium, ligula at varius vulputate, enim turpis luctus velit.</p>
	</div>
</div>


<?php get_template_part( 'templates/partials/featured' ); ?>
<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();