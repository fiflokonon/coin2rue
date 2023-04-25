<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="keywords" content="online solution, it, tech, technology, teaching, learning">
	<meta name="description"
		content="Waretech is a IT solutions HTML template for all kinds of it, technology, online tech website">
	<title>Waretech - IT Solutions HTML5 Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- <link rel="manifest" href="site.webmanifest" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/favicon.png') }}" />
	<!-- Place favicon.ico in the root directory -->
    @include('livewire.site.partials.style')
    @livewireStyles()
</head>

<body>
	<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

	<!-- Add your site or application content here -->
	<!-- preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- preloader end  -->
	<!-- header-area start -->
    @include('livewire.site.partials.header')

	<!-- header-area end -->

	<!-- slide-bar start -->
	<aside class="slide-bar">
        @include('livewire.site.partials.sidebar')

		<!-- side-mobile-menu start -->
		<nav class="side-mobile-menu">
            @include('livewire.site.partials.navbar-link')
		</nav>
		<!-- side-mobile-menu end -->
	</aside>
	<div class="body-overlay"></div>
	<!-- slide-bar end -->

	<main>
        {{ $slot }}

	</main>
	<!--footer-area start-->
    @include('livewire.site.partials.footer')

	<!--footer-area end-->
	<!-- Fullscreen search -->
	<div class="search-wrap">
		<div class="search-inner">
			<i class="fas fa-times search-close" id="search-close"></i>
			<div class="search-cell">
				<form method="get">
					<div class="search-field-holder">
						<input type="search" class="main-search-input" placeholder="Search Your Keyword...">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end fullscreen search -->

	    @livewireScripts()
        @include('livewire.site.partials.script')
</body>

</html>
