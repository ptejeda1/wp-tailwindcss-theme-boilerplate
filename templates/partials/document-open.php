<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

	<header>	
	<nav class="flex lg:justify-around">		
		<a href="/" class="logo lg:m-auto"><img src="/wp-content/themes/emles/assets/img/emles.svg" alt="Image"></a>
		<div class="menu-icon">
		    <div></div>
		    <div></div>
		    <div></div>
		</div>
		<div class="menu-dropdown-wrap">
			<ul class="flex menu lg:hidden">
				<li>
					<a href="/about">About</a>
					<ul>
						<li><a href="/about/leadership">Leadership</a></li>
						<li><a href="">Cras Facilisis</a></li>
						<li><a href="">Sed Nec</a></li>
					</ul>
				</li>
				<li><a href="/investments-strategies">Investment Strategies</a></li>
				<li><a href="/insights">Insights</a></li>
				<li><a href="/careers">Careers</a></li>
			</ul>
		</div>
		<div class="pre lg:hidden">
			<ul class="flex items-center menu">
				<li><a href="/contact">Contact</a></li>
				<li class="search btn flex items-center"><span>Search</span><span><?php get_template_part( 'templates/partials/icon-search' ); ?></span></li>
			</ul>
		</div>

		<div class="search-icon"><span><?php get_template_part( 'templates/partials/icon-search' ); ?></span></div>
	</nav>
</header>

<div class="mobile-menu">
	<div class="wrap">
		<ul class="menu-items mb-12">
			<li>
				<a href="/about">About </a>
				<span class="icon-toggle"></span>
				<ul>
					<li><a href="/about/leadership">Leadership</a></li>
					<li><a href="">Cras Facilisis</a></li>
					<li><a href="">Sed Nec</a></li>
				</ul>
			</li>
			<li><a href="/investments-strategies">Investment Strategies</a></li>
			<li><a href="/insights">Insights</a></li>
			<li><a href="/careers">Careers</a></li>
		</ul>

		<ul class="social flex mb-10">
			<li><a href="" class="icon inline-block"><?php get_template_part( 'templates/partials/icon-twitter' ); ?></a></li>	
			<li><a href="" class="icon inline-block"><?php get_template_part( 'templates/partials/icon-linkedin' ); ?></a></li>	
		</ul>

		<div class="credits">
			<div>
				<ul>
					<li><a href="/transparency-and-disclosure">Transparency & Disclosure</a></li>
					<li><a href="/privacy-policy">Privacy Policy</a></li>
					<li><a href="/terms-of-use">Terms of Use</a></li>
					<li><a href="/site-map">Site Map</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

