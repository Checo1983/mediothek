<!DOCTYPE html>
	<head>
	<title>Mediothek</title>
		<meta charset="utf-8">
		<?php include "inc/head_common.php"; ?>
		<link rel="stylesheet" href="css/workshops.css"/>
	</head>
	<body>
		<?php include "inc/header.php"; ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div id="sidebar" class="list-group fixed">
						<a href="#" onclick="Request('buecher.php', 'content');" class="list-group-item">Bücher</a>
						<a href="#" onclick="Request('zeitschriften.php', 'content');" class="list-group-item">Zeitschriften</a>
						<!--<a href="zeitschriften.php" class="list-group-item">Zeitschriften</a>-->
						<a href="#" onclick="Request('video.php', 'content');" class="list-group-item">Videos</a>
						<a href="#" onclick="Request('musik.php', 'content');" class="list-group-item">Musiktiteln</a>
						<!--<a href="#" class="list-group-item">HTML 5</a>-->
					</div>
				</div>
				<div id="content" class="col-xs-12 col-sm-12 col-md-9">
					<div id="main-index">
						<h3 class="title-index text-center">Letzte Bücher</h3><p class="title-index text-center">Update <?php echo date('l jS \of F Y h:i:s A'); ?></p>
						<div class="row">
							<div class="group">
								<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/book_contemporary_athletics_and_ancient_greek_ideals.large.jpg')"><img
											class="zoom darkness" src="img/book_contemporary_athletics_and_ancient_greek_ideals.large.jpg" alt="img-00"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/book_a_short_history_of_the_united_states.large.jpg')"><img
											class="zoom darkness" src="img/book_a_short_history_of_the_united_states.large.jpg" alt="img-01"/></a>
								</div>
								<div class="clearfix visible-xs visible-sm"></div>
								<div class="col-xs-4 col-md-2 col-xs-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/book_about_a_mountain.large.jpg')"><img
											class="zoom darkness" src="img/book_about_a_mountain.large.jpg" alt="img-02"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/book_and_then_theres_this.large.jpg')"><img
											class="zoom darkness" src="img/book_and_then_theres_this.large.jpg" alt="img-03"/></a>
								</div>
							</div>
						</div><br>
						<h3 class="title-index text-center">Letzte Zeitschriften</h3><p class="title-index text-center">Update <?php echo date('l jS \of F Y h:i:s A'); ?></p>
						<div class="row">
							<div class="group">
								<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/destak-2014-12-18-790269.jpg')"><img
											class="zoom darkness" width="150%" src="img/destak-2014-12-18-790269.jpg" alt="img-04"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/diario-de-noticias-2014-12-18-4b2277.jpg')"><img
											class="zoom darkness" width="150%" src="img/diario-de-noticias-2014-12-18-4b2277.jpg" alt="img-05"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/diario-economico-2014-12-18-e629fa.jpg')"><img
											class="zoom darkness" width="150%" src="img/diario-economico-2014-12-18-e629fa.jpg" alt="img-06"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/expresso-2014-12-13-2c6242.jpg')"><img
											class="zoom darkness" width="150%" src="img/expresso-2014-12-13-2c6242.jpg" alt="img-07"/></a>
								</div>
							</div>
						</div><br>
						<h3 class="title-index text-center">Letzte Videos</h3><p class="title-index text-center">Update <?php echo date('l jS \of F Y h:i:s A'); ?></p>
						<div class="row">
							<div class="group">
								<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/preview-video01.jpg')"><img
											class="zoom darkness" width="150%" src="img/preview-video01.jpg" alt="img-04"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/preview-video02.jpg')"><img
											class="zoom darkness" width="150%" src="img/preview-video02.jpg" alt="img-05"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/preview-video03.jpg')"><img
											class="zoom darkness" width="150%" src="img/preview-video03.jpg" alt="img-06"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/preview-video04.jpg')"><img
											class="zoom darkness" width="150%" src="img/preview-video04.jpg" alt="img-07"/></a>
								</div>
							</div>
						</div><br>
						<h3 class="title-index text-center">Letzte Musik</h3><p class="title-index text-center">Update <?php echo date('l jS \of F Y h:i:s A'); ?></p>
						<div class="row">
							<div class="group">
								<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/10cc_-_The_Very_Best_Of-[cdcovers_cc]-front.jpg')"><img
											class="zoom darkness" src="img/10cc_-_The_Very_Best_Of-[cdcovers_cc]-front.jpg" alt="img-00"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/50_Cent_-_The_Massacre-[cdcovers_cc]-front.jpg')"><img
											class="zoom darkness" src="img/50_Cent_-_The_Massacre-[cdcovers_cc]-front.jpg" alt="img-01"/></a>
								</div>
								<div class="clearfix visible-xs visible-sm"></div>
								<div class="col-xs-4 col-md-2 col-xs-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=100_Hits_90s-[cdcovers_cc]-front.jpg')"><img
											class="zoom darkness" src="img/100_Hits_90s-[cdcovers_cc]-front.jpg" alt="img-02"/></a>
								</div>
								<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
									<a href="#" onclick="Request('detail.php', 'content', 'src=img/100_Hits_2000s-[cdcovers_cc]-front.jpg')"><img
											class="zoom darkness" src="img/100_Hits_2000s-[cdcovers_cc]-front.jpg" alt="img-03"/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "inc/footer.php"; ?>
		<?php include 'inc/footer_common.php'; ?>
	</body>
</html>