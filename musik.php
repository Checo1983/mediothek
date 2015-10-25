<!--<!DOCTYPE html>
	<head>
	<title>Mediothek - Musik</title>
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
		<div id="main-musik" class="container-fluid">
			<div class="row">
				<div id="musik-filter" class="col-xs-12 col-md-9 text-center">
					<select name="filter-abc" class="selectpicker">
						<option>A-J</option>
						<option>K-R</option>
						<option>S-Z</option>
					</select>
					<select name="filter-gender" class="selectpicker">
						<option>Rock</option>
						<option>Pop</option>
						<option>Dance</option>
						<option>Rap</option>
						<option>Trance</option>
					</select>
					<select name="filter-language" class="selectpicker">
						<option>English</option>
						<option>German</option>
						<option>Spanish</option>
						<option>French</option>
						<option>Italian</option>
					</select>
				</div>
			</div><br>
			<div class="group">
				<div class="row">
					<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/10cc_-_The_Very_Best_Of-[cdcovers_cc]-front.jpg&name=Very-Best-10cc')"><img
								class="zoom darkness" src="img/10cc_-_The_Very_Best_Of-[cdcovers_cc]-front.jpg" alt="img-00"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/50_Cent_-_The_Massacre-[cdcovers_cc]-front.jpg&name=Massacre-50-Cent')"><img
								class="zoom darkness" src="img/50_Cent_-_The_Massacre-[cdcovers_cc]-front.jpg" alt="img-01"/></a>
					</div>
					<div class="clearfix visible-xs visible-sm"></div>
					<div class="col-xs-4 col-md-2 col-xs-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/100_Hits_90s-[cdcovers_cc]-front.jpg&name=100-Hits-90s-Various')"><img
								class="zoom darkness" src="img/100_Hits_90s-[cdcovers_cc]-front.jpg" alt="img-02"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/100_Hits_2000s-[cdcovers_cc]-front.jpg&name=100-Hits-2000s-Various')"><img
								class="zoom darkness" src="img/100_Hits_2000s-[cdcovers_cc]-front.jpg" alt="img-03"/></a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/101_Trance_Anthems_-_Various-[cdcovers_cc]-front.jpg&name=101-Trance-Anthems-Various')"><img
								class="zoom darkness" width="150%" src="img/101_Trance_Anthems_-_Various-[cdcovers_cc]-front.jpg"
								alt="img-04"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/2009_Grammy_Nominees_-_Various-[cdcovers_cc]-front.jpg&name=Grammy-Nominees-2009-Various')"><img
								class="zoom darkness" width="150%" src="img/2009_Grammy_Nominees_-_Various-[cdcovers_cc]-front.jpg"
								alt="img-05"/></a>
					</div>
					<div class="clearfix visible-xs visible-sm"></div>
					<div class="col-xs-4 col-md-2 col-xs-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Atb_-_Addicted_To_Music-[cdcovers_cc]-front.jpg&name=Addicted-Music-Atb')"><img
								class="zoom darkness" width="150%" src="img/Atb_-_Addicted_To_Music-[cdcovers_cc]-front.jpg"
								alt="img-06"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Atb_-_Future_Memories-[cdcovers_cc]-front.jpg&name=Future-Memories-ATB')"><img
								class="zoom darkness" width="150%" src="img/Atb_-_Future_Memories-[cdcovers_cc]-front.jpg"
								alt="img-07"/></a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Atb_-_Two_Words-[cdcovers_cc]-front.jpg&name=Two-Worlds-Atb')"><img
								class="zoom darkness" width="150%" src="img/Atb_-_Two_Words-[cdcovers_cc]-front.jpg"
								alt="img-08"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/David_Guetta_-_One_Love-[cdcovers_cc]-front.jpg&name=One-Love-Guetta-David')"><img
								class="zoom darkness" width="150%" src="img/David_Guetta_-_One_Love-[cdcovers_cc]-front.jpg"
								alt="img-09"/></a>
					</div>
					<div class="clearfix visible-xs visible-sm"></div>
					<div class="col-xs-4 col-md-2 col-xs-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/David_Guetta_-_Pop_Life-[cdcovers_cc]-front.jpg&name=Pop-Life-Guetta-David')"><img
								class="zoom darkness" width="150%" src="img/David_Guetta_-_Pop_Life-[cdcovers_cc]-front.jpg"
								alt="img-10"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Eminem_-_Curtain_Call_The_Hits-[cdcovers_cc]-front.jpg&name=Curtain-Call-Hits-Eminem')"><img
								class="zoom darkness" width="150%" src="img/Eminem_-_Curtain_Call_The_Hits-[cdcovers_cc]-front.jpg"
								alt="img-11"/></a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Eminem_-_Eminem_Is_Back-[cdcovers_cc]-front.jpg&name=Eminem-Back')"><img
								class="zoom darkness" width="150%" src="img/Eminem_-_Eminem_Is_Back-[cdcovers_cc]-front.jpg"
								alt="img-12"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Eminem_-_Encore-[cdcovers_cc]-front.jpg&name=Encore-Eminem')"><img
								class="zoom darkness" width="150%" src="img/Eminem_-_Encore-[cdcovers_cc]-front.jpg"
								alt="img-13"/></a>
					</div>
					<div class="clearfix visible-xs visible-sm"></div>
					<div class="col-xs-4 col-md-2 col-xs-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Eminem_-_Recovery-[cdcovers_cc]-front.jpg&name=Recovery-Eminem-Audio-CD')"><img
								class="zoom darkness" width="150%" src="img/Eminem_-_Recovery-[cdcovers_cc]-front.jpg" alt="img-14"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Mark_Knopfler_-_Shangri-la-[cdcovers_cc]-front.jpg&name=Shangri--Knopfler-Mark')"><img
								class="zoom darkness" width="150%" src="img/Mark_Knopfler_-_Shangri-la-[cdcovers_cc]-front.jpg"
								alt="img-15"/></a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Maroon_5_-_It_Wont_Be_Soon_Before_Long-[cdcovers_cc]-front.jpg&name=Wont-Soon-Before-Deluxe-002kr')"><img
								class="zoom darkness" width="150%"
								src="img/Maroon_5_-_It_Wont_Be_Soon_Before_Long-[cdcovers_cc]-front.jpg"
								alt="img-16"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/Sash_-_Its_My_Life_Special_Remix_Edition-[cdcovers_cc]-front.jpg&name=Its-My-Life-Remixes-Sash')"><img
								class="zoom darkness" width="150%"
								src="img/Sash_-_Its_My_Life_Special_Remix_Edition-[cdcovers_cc]-front.jpg"
								alt="img-17"/></a>
					</div>
					<div class="clearfix visible-xs visible-sm"></div>
					<div class="col-xs-4 col-md-2 col-xs-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/T.a.t.u._-_Waste_Management-[cdcovers_cc]-front.jpg&name=t-A-T-u-Waste-Management')"><img
								class="zoom darkness" width="150%" src="img/T.a.t.u._-_Waste_Management-[cdcovers_cc]-front.jpg"
								alt="img-18"/></a>
					</div>
					<div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
						<a href="#"
						   onclick="Request('detail.php', 'content', 'src=img/T.a.t.u_-_White_Robe-[cdcovers_cc]-front.jpg&name=Beliy-Plaschik-White-Robe-T-U')"><img
								class="zoom darkness" width="150%" src="img/T.a.t.u_-_White_Robe-[cdcovers_cc]-front.jpg"
								alt="img-19"/></a>
					</div>
				</div>
			</div>
		</div>

		<!--</div>
		<div id="footer">
			<p>Created by Mediothek 2014</p>
		</div>
	</body>
</html>-->