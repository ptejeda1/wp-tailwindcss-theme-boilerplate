<?php

/*
 * Template Name: About
 * Template Post Type: page
 */

get_header();

?>

<div class="hero has-overlay extended" style="background-image: url(https://picsum.photos/200);">
	<div class="w-900">
		<div class="wrap">
			<h1>We are a new approach to investing. We find opportunities few can see and create access through relentless execution.</h1>
		</div>
	</div>
</div>

<div class="callout py-20 lg:pt-0 lg:pb-16">
	<div class="wrap flex w-1200">
		<div class="m-auto flex w-full max-w-6xl items-start lg:block">
			<div class="w-1/3 lg:max-w-3xl lg:w-full lg:mt-10">
				<div>
					<h2>Who We Are</h2>
				</div>
			</div>
			<div class="w-2/3 lg:w-full lg:max-w-3xl lg:max-w-2xl">
				<div class="blurb card pl-16 lg:pl-0">
					<p>We’re a nimble asset manager who looks to democratize the investment process so investors can access assets that have been underutilized or never-before imagined. Current portfolios are overexposed to traditional asset classes and face the limitations that come with them. We provide innovative, diversifying assets that can provide attractive total returns over time. We challenge the investment industry to show us why something “cannot be done” and find value in creating solutions. </p>
				</div>
			</div>
		</div>
	</div>
</div>

<div>
	<div class="callout-img py-40 pl-20 lg:pl-5 md:py-20 mb-24 lg:mb-8 relative has-overlay" style="background-image: url(https://picsum.photos/200);">
		<div class="wrap flex relative z-10">
			<div class="flex w-full max-w-sm">
				<div class="blurb w-full max-w-xl">
					<h3>Our Leadership</h3>
					<p>Our founder and executives are at the leading edge of the industry.</p>
					<a href="" class="btn">Learn More <span class="icon-arrow">&#8963;</span></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div>
	<div class="w-1050 flex m-auto mb-24 lg:mb-8 lg:block">
		<div class="w-1/2 lg:w-full lg:mb-8">
			<h2>Our Approach</h2>
			<p>We are client-centric and creative. We listen carefully to design innovative solutions that break down the barriers that hold you back. We offer structured and timely solutions that align to the challenges of the modern investor. </p>
		</div>
		<div class="w-1/2 flex justify-end lg:w-full">
			<div class="max-w-md w-full lg:max-w-full">
				<img src="https://picsum.photos/200" alt="img:Image">
			</div>
		</div>
	</div>
</div>

<div class="py-16 pb-24 has-bg-color" style="background-color: #003349;">
	<div class="w-1050 flex m-auto">
		<div class="w-full">
			<div class="breadcrumbs mb-5">
				<ul class="flex justify-between items-center xs:block">
					<li class="xs:mb-8"><h2>Our Team</h2></li>
					<li><a href="" class="btn" style="margin-top:0;">View All Leadership <span class="icon-arrow">&#8963;</span></a></li>
				</ul>
			</div>

			<div class="carousel-wrap relative">
				<ul class="carousel">
					<li>
						<div class="flex md:block">
							<div class="w-2/5 bg-center bg-cover md:w-full" style="background-image: url(https://picsum.photos/200)"></div>
							<div class="w-3/5 py-12 px-16 card max-w-xl md:mb-40 md:max-w-full md:w-full md:px-8">
								<div class="title"><a href="">Gabriel Hammond</a></div>
								<div class="type label">Expertise</div>
								<p>Investment management, energy infrastructure investment, data and analytics MLP mutual funds / MLP exchanged traded funds...</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex md:block">
							<div class="w-2/5 bg-center bg-cover md:w-full" style="background-image: url(https://picsum.photos/200)"></div>
							<div class="w-3/5 py-12 px-16 card max-w-xl md:mb-40 md:max-w-full md:w-full md:px-8">
								<div class="title"><a href="">Gabriel Hammond</a></div>
								<div class="type label">Expertise</div>
								<p>Investment management, energy infrastructure investment, data and analytics MLP mutual funds / MLP exchanged traded funds, technology initiatives</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex md:block">
							<div class="w-2/5 bg-center bg-cover md:w-full" style="background-image: url(https://picsum.photos/200)"></div>
							<div class="w-3/5 py-12 px-16 card max-w-xl md:mb-40 md:max-w-full md:w-full md:px-8">
								<div class="title"><a href="">Gabriel Hammond</a></div>
								<div class="type label">Expertise</div>
								<p>Investment management, energy infrastructure investment...</p>
							</div>
						</div>
					</li>
				</ul>	
				 <div class="controls-wrap flex justify-center ml-8 offset-top">
	                <div class="flex items-center btn-wrap">
	                    <div class="control prev"><?php get_template_part( 'templates/partials/arrow' ); ?><span class="icon"></span></div>
	                    <div class="control next"><?php get_template_part( 'templates/partials/arrow' ); ?><span class="icon"></span></div>
	                    <div class="carousel-current text-sm px-4">1 of 6</div>
	                </div>
	              </div>
			</div>
		</div>
	</div>
</div>


<div>
	<div class="callout-lrg bg-cover bg-no-repeat bg-center py-56 md:py-20 relative has-overlay px-10" style="background-image: url(https://picsum.photos/200);">
			<div class="m-auto flex w-full max-w-lg relative z-10">
				<div class="blurb w-full max-w-xl m-auto text-center">
					<h3>What We Do</h3>
					<p>Learn more about our Private Capital, Public Market, and Digital Currency investment products.</p>
					<a href="" class="btn">Visit Now <span class="icon-arrow">&#8963;</span></a>
				</div>
			</div>
	</div>
</div>

<?php get_template_part( 'templates/partials/subscribe' ); ?>

<?php

get_footer();