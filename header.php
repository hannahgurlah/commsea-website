<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>CommSEA : Community Software</title>
		<meta name="description" content="American Broadband Association">
		<meta name="author" content="American Broadband">
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
		================================================== -->
		<!-- Bootstrap  -->
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- web font  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
			<!-- Pop up-->
			<link rel="stylesheet" type="text/css" href="js-plugin/magnific-popup/magnific-popup.css" />
			<!-- nekoAnim-->
			<link rel="stylesheet" type="text/css" href="js-plugin/appear/nekoAnim.css" />
			<!-- Background Video -->
			<link type="text/css" rel="stylesheet" href="js-plugin/ytplayer/YTPlayer.css">
			<!-- icon fonts -->
			<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
			<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
			<!-- Custom css -->
			<link type="text/css" rel="stylesheet" href="css/layout.css">
			<link type="text/css" id="colors" rel="stylesheet" href="css/blue.css">
			<link type="text/css" rel="stylesheet" href="css/theme.css">
			<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
			<script src="js/modernizr-2.6.1.min.js"></script>
			<!-- Favicons
			================================================== -->
			<link rel="shortcut icon" href="images/favicon.ico">
			<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
			<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
			<!-- Include the Google Maps API library - required for embedding maps -->
			<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
			
			<script type="text/javascript">
			
			// The latitude and longitude of your business / place
			var position = [10.300680, 123.886800];
			
			function showGoogleMaps() {
			
			var latLng = new google.maps.LatLng(position[0], position[1]);
			
			var mapOptions = {
			zoom: 16, // initialize zoom level - the max value is 21
			streetViewControl: false, // hide the yellow Street View pegman
			scaleControl: true, // allow users to zoom the Google Map
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latLng
			};
			
			map = new google.maps.Map(document.getElementById('googlemaps'),
			mapOptions);
			
			// Show the default red marker at the location
			marker = new google.maps.Marker({
			position: latLng,
			map: map,
			draggable: false,
			animation: google.maps.Animation.DROP
			});
			}
			
			google.maps.event.addDomListener(window, 'load', showGoogleMaps);
			</script>
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		</head>
		<body class="activateAppearAnimation">