<!DOCTYPE html>

<html lang="en">
<head>

<!-- Html Page Specific -->
<meta charset="utf-8">
<title>vkulp @yield('title')</title>
<meta name="description" content="RAY - App Landing Page">
<meta name="author" content="Multifour | multifour.com">

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<!--[if lt IE 9]>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>
<![endif]-->

<!-- CSS includes -->
@include('templates.style')

<!-- Favicons -->
<link rel="icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<!-- PRELOADER -->
<div id="preloader">
	<div class="battery inner">
		<div class="load-line"></div>
	</div>
</div>

<div id="wrap"> 

  	 <!-- includes -->
     @include('templates.navigation')
     @include('templates.intro')
     
     <!-- Contents Yields -->
     @yield('content')
     <!-- End Contents Yields -->
     
     <!-- includes -->
     @include('templates.footer')
  	 @include('templates.script')

<!--[if lte IE 9]>
	<script src="scripts/respond.min.js"></script>
<![endif]-->
</body>
</html>
