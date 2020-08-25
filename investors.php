<?php

/*
 * Template Name: Investors
 * Template Post Type: page
 */

get_header();

?>

<div class="hero has-overlay mb-32 lg:mb-16" style="background-image: url(https://picsum.photos/200);">
	<div class="w-900">
		<div class="wrap">
			<div class="max-w-md">
				<h1>Democratizing asset classes for investors.</h1>
				<a href="" class="btn">Learn More <span class="icon-arrow">&#8963;</span></a>
			</div>
		</div>
	</div>
</div>

<div class="m-auto w-1200">
	<div class="mb-16">
		<ul>
			<li>
				<div class="flex article-wrap pb-8 lg:block">
					<div class="type article-type mr-6 lg:mr-0">ETFs & Mutual Funds</div>
					<div class="flex article-blurb xs:block">
						<div class="article-img-wrap bg-center bg-cover bg-no-repeat mr-12" style="background-image: url(https://picsum.photos/200);"></div>
						<div class="article-title"><p><a href="">Providing access to a wide range of ETFs and Mutual Funds for Retail and Individual investors.</a> </p></div>
					</div>
				</div>
			</li>
			<li>
				<div class="flex article-wrap pb-8 lg:block">
					<div class="type article-type mr-6 lg:mr-0">Private Assets</div>
					<div class="flex article-blurb xs:block">
						<div class="article-img-wrap bg-center bg-cover bg-no-repeat mr-12" style="background-image: url(https://picsum.photos/200);"></div>
						<div class="article-title"><p><a href="">Providing access to Private Funds for Institutional Investors and Mass Investment Advisors.</a> </p></div>
					</div>
				</div>
			</li>
			<li>
				<div class="flex article-wrap pb-8 lg:block">
					<div class="type article-type mr-6 lg:mr-0">Digital Assets</div>
					<div class="flex article-blurb xs:block">
						<div class="article-img-wrap bg-center bg-cover bg-no-repeat mr-12" style="background-image: url(https://picsum.photos/200);"></div>
						<div class="article-title"><p><a href="">Providing access to Digital Currency funds for Retail and Cryptocurrency Investors.</a> </p></div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<?php get_template_part( 'templates/partials/featured' ); ?>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();