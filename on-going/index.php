<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="refresh" content="37;url=home.php" />

	<title>Squall Tec</title>

	<meta name="description" content=""/>

	<!-- Mobile Specifics -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>

	<!-- Mobile Internet Explorer ClearType Technology -->
	<!--[if IEMobile]>
	<meta http-equiv="cleartype" content="on">  <![endif]-->

	<!-- Bootstrap -->
	<link href="_include/css/bootstrap.min.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="_include/css/main.css" rel="stylesheet">

	<!-- Font Icons -->
	<link href="_include/css/fonts.css" rel="stylesheet">

	<!-- Shortcodes -->
	<link href="_include/css/shortcodes.css" rel="stylesheet">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900'rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!-- Fav Icon -->
	<link rel="shortcut icon" href="#">
	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="144x144" href="#">

	<!-- Modernizr -->
	<script src="_include/js/modernizr.js"></script>

</head>

<body>
<!--
<style>
	.containerdfd {}
	.videoWrapper {
		position: fixed;
		top: 0;
		left: 0;
		height: 103%;
		overflow: hidden !important;
		width: 100%; max-height: 102%; margin-top: -2%;
	}
	.videoWrapper #howToVideo {
		position: absolute;
		top: 0;
		left: 0;
		min-width: 100%;
		min-height: 100%;
	}



</style> -->

<style type="text/css">
	.videoContainer
	{
		position:absolute;
		height:103%;
		width:100%;
		overflow: hidden;
		margin-top: -3%;
	}

	.videoContainer #howToVideo
	{
		min-width: 100%;
		min-height: 103%;
	}
	.intro-icon { position: absolute; bottom:0; right: 0; padding-right: 2%; z-index: 555; background: black; width: 100%; text-align:right; height: auto;}


</style>
<div class="intro-icon"><a href="home.php">Skip Intro Video » </a></div>
<div class="videoContainer">
	<div id="howToVideo"></div>

</div>
<script type="application/javascript">

	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = false;
	ga.src = 'http://www.youtube.com/player_api';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);

	var done = false;
	var player;

	function onYouTubePlayerAPIReady() {
		player = new YT.Player('howToVideo', {
			rel:'0',
			videoId: 'aPmimN-501M',

			playerVars: {
				controls: 0,
				disablekb: 0,
				autoplay:1
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});
	}
	function onPlayerReady(evt) {
		console.log('onPlayerReady', evt);
	}
	function onPlayerStateChange(evt) {
		console.log('onPlayerStateChange', evt);
		if (evt.data == YT.PlayerState.PLAYING && !done) {
			setTimeout(stopVideo, 35500);
			done = true;
		}
	}

	function stopVideo() {
		console.log('stopVideo');
		player.stopVideo();
	}

</script>

</body>
</html>