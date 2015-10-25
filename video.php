<!--<!DOCTYPE html>
	<head>
	<title>Mediothek - Videos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/basic.css"/>
	</head>
	<body>
		<div id="header">
			<h1>Header</h1>
			<img src='img/buecher.jpg' style="width:100%;height:100%">
		</div>
		<div id="navi">
			<ul>
				<li><a href="#" onclick="Request('index.php', 'parameter=AJAX', 'content');">Home</a></li>
				<li><a href="#" onclick="Request('buecher.php', 'parameter=AJAX', 'content');">Büchern und Zeitschriften</a></li>
				<li><a href="#" onclick="Request('video.php', 'parameter=AJAX', 'content');">Videos</a></li>
				<li><a href="#" onclick="Request('musik.php', 'parameter=AJAX', 'content');">Musiktiteln</a></li>
				<li><a href="#" onclick="Request('login.php', 'parameter=AJAX', 'content');">Login</a></li>
			</ul>
		</div>
		<div id="content">-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<div id="video-full-container" class="embed-responsive embed-responsive-16by9">
						<object class="embed-responsive-item" data="img/filmstrip-91434_1280.jpg"></object>
					</div>
				</div>
				<div class="video-sidebar col-md-2 hidden-xs hidden-sm col-md-offset-1">
					<div id="va-accordion" class="va-container">
						<!--<div class="va-nav">
							<span class="va-nav-prev">Previous</span>
							<span class="va-nav-next">Next</span>
						</div>-->
						<div class="va-wrapper">
							<div class="va-slice va-slice-1">
								<h3 class="va-title">Eric Clapton</h3>
								<div class="va-content">
									<p>When Somebody Thinks You're Wonderful</p>
									<ul>
										<li><a href="#" onclick="Request('video_embed.php', 'video-full-container', 'video=//www.youtube.com/embed/2c5E03MEdwA')">Play</a></li>
										<li><a href="#">Text</a></li>
										<li><a href="http://www.youtube.com/watch?v=2c5E03MEdwA" target="_blank">See in YTB</a></li>
									</ul>
								</div>
							</div>
							<div class="va-slice va-slice-2">
								<h3 class="va-title">Eric Clapton</h3>
								<div class="va-content">
									<p>When Somebody Thinks You're Wonderful</p>
									<ul>
										<li><a href="#">Play</a></li>
										<li><a href="#">Text</a></li>
										<li><a href="http://www.youtube.com/watch?v=2c5E03MEdwA" target="_blank">See in YTB</a></li>
									</ul>
								</div>
							</div>
							<div class="va-slice va-slice-3">
								<h3 class="va-title">Eric Clapton</h3>
								<div class="va-content">
									<p>When Somebody Thinks You're Wonderful</p>
									<ul>
										<li><a href="#">Play</a></li>
										<li><a href="#">Text</a></li>
										<li><a href="http://www.youtube.com/watch?v=2c5E03MEdwA" target="_blank">See in YTB</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-xs-12 col-md-7 ">
					<div class="">
						<object width="100%" height="450" data="//www.youtube.com/embed/fX5USg8_1gA"></object>
					</div>
				</div>
				<div class="col-md-2 hidden-sm">

				</div>
			</div>-->
		</div>