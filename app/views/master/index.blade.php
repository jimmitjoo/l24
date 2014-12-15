<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="sv"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="sv"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="sv"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="sv"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Page Title -->
	<title>Lediga lägenheter på Nirmea</title>

	<meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
	<meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
	<meta name="author" content="Wisely Themes - www.wiselythemes.com" />

	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/fav_touch_icons/favicon.ico" />
	<link rel="apple-touch-icon" href="/images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Google Web Font -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

	<!-- Bootstrap CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="/css/style.css" rel="stylesheet" />

	<!-- Modernizr -->
	<script src="/js/modernizr-2.8.1.min.js"></script>
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">

    @include('master.header')


	@yield('content')


    @include('master.footer')

	</div>
	<!-- END WRAPPER -->


	<!-- Libs -->
	<script src="/js/common.js"></script>
	<script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
	<script src="/js/chosen.jquery.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="/js/infobox.min.js"></script>

	<!-- Template Scripts -->
	<script src="/js/variables.js"></script>
	<script src="/js/scripts.js"></script>

	<!-- Home Grid Plugin -->
	<script src="js/freewall.js"></script>

	<!-- Agencies list -->
	<script src="/js/agencies.js"></script>

	<script type="text/javascript">
		(function($){
			"use strict";

			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
</body>
</html>