<!--<!DOCTYPE html>
	<head>
	<title>Mediothek - Bücher</title>
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
		</div>-->
		<div id="main-book" class="container-fluid">
                <div class="row">
                    <div id="book-filter" class="col-xs-12 col-md-9 text-center">
                        <select name="filter-abc" class="selectpicker">
                            <option>A-J</option>
                            <option>K-R</option>
                            <option>S-Z</option>
                        </select>
                        <select name="filter-type" class="selectpicker">
                            <option>Novel</option>
                            <option>Science fiction</option>
                            <option>Biography</option>
                            <option>Coffee table book</option>
                            <option>Technology</option>
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
                               onclick="Request('detail.php', 'content', 'src=img/book_a_short_history_of_the_united_states.large.jpg&name=Short-History-United-States-Presidency')"><img
                                    class="zoom darkness" src="img/book_a_short_history_of_the_united_states.large.jpg" alt="img-00"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_about_a_mountain.large.jpg&name=About-Mountain-John-DAgata-ebook')"><img
                                    class="zoom darkness" src="img/book_about_a_mountain.large.jpg" alt="img-01"/></a>
                        </div>
                        <div class="clearfix visible-xs visible-sm"></div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_and_then_theres_this.large.jpg&name=Then-Theres-This-Stories-Culture-ebook')"><img
                                    class="zoom darkness" src="img/book_and_then_theres_this.large.jpg" alt="img-02"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_contemporary_athletics_and_ancient_greek_ideals.large.jpg&name=Contemporary-Athletics-Ancient-Greek-Ideals-ebook')"><img
                                    class="zoom darkness" src="img/book_contemporary_athletics_and_ancient_greek_ideals.large.jpg" alt="img-03"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_crisis_economics.large.jpg.png&name=Crisis-Economics-Course-Future-Finance')"><img
                                    class="zoom darkness" width="150%" src="img/book_crisis_economics.large.jpg.png" alt="img-04"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_despair.large.jpg&name=Despair-Vintage-International-Vladimir-Nabokov')"><img
                                    class="zoom darkness" width="150%" src="img/book_despair.large.jpg" alt="img-05"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_el_tercer_reich.large.jpg&name=El-tercer-Reich-Roberto-Bolaño')"><img
                                    class="zoom darkness" width="150%" src="img/book_el_tercer_reich.large.jpg" alt="img-06"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_estrella_distante.large.jpg&name=Estrella-distante-Compactos-Anagrama-Band')"><img
                                    class="zoom darkness" width="150%" src="img/book_estrella_distante.large.jpg" alt="img-07"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_everything_matters.large.jpg&name=Everything-Matters-Ron-Currie-Jr')"><img
                                    class="zoom darkness" width="150%" src="img/book_everything_matters.large.jpg" alt="img-08"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_gabriel_garcia_marquez.large.jpg&name=Gabriel-García-Márquez-Early-Years')"><img
                                    class="zoom darkness" width="150%" src="img/book_gabriel_garcia_marquez.large.jpg" alt="img-09"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_incendiary.large.jpg&name=Incendiary-Novel-Book-Club-Readers')"><img
                                    class="zoom darkness" width="150%" src="img/book_incendiary.large.jpg" alt="img-10"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_money.large.jpg&name=Money-Suicide-Note-Penguin-Ink')"><img
                                    class="zoom darkness" width="150%" src="img/book_money.large.jpg" alt="img-11"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_no_country_for_old_men_1.large.jpg&name=Country-Old-McCarthy-Cormac-Paperback')"><img
                                    class="zoom darkness" width="150%" src="img/book_no_country_for_old_men_1.large.jpg" alt="img-12"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_nocturno_de_chile.large.jpg&name=Nocturno-Vintage-Espanol-Roberto-Bolaño')"><img
                                    class="zoom darkness" width="150%" src="img/book_nocturno_de_chile.large.jpg" alt="img-13"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_once_before_time.large.jpg&name=Once-Before-Time-Whole-Universe-ebook')"><img
                                    class="zoom darkness" width="150%" src="img/book_once_before_time.large.jpg" alt="img-14"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_raising_the_perfect_child_through_guilt_and_manipulation.large.jpg&name=Raising-Perfect-Child-Through-Manipulation')"><img
                                    class="zoom darkness" width="150%" src="img/book_raising_the_perfect_child_through_guilt_and_manipulation.large.jpg" alt="img-15"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_the_great_brain_suck_and_other_american_epiphanies.large.jpg&name=Great-Brain-Suck-American-Epiphanies-ebook')"><img
                                    class="zoom darkness" width="150%" src="img/book_the_great_brain_suck_and_other_american_epiphanies.large.jpg" alt="img-16"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_the_mystic_arts_of_erasing_all_signs_of_death.large.jpg&name=Mystic-Arts-Erasing-Signs-Death')"><img
                                    class="zoom darkness" width="150%" src="img/book_the_mystic_arts_of_erasing_all_signs_of_death.large.jpg" alt="img-17"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_uncommon_sense.large.jpg&name=Uncommon-Sense-Economic-Insights-Terrorism')"><img
                                    class="zoom darkness" width="150%" src="img/book_uncommon_sense.large.jpg" alt="img-18"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/book_devil_in_the_details.large.jpg&name=Devil-Details-Scenes-Obsessive-Girlhood')"><img
                                    class="zoom darkness" width="150%" src="img/book_devil_in_the_details.large.jpg" alt="img-19"/></a>
                        </div>
                    </div>
                </div>
            </div>
		<!--<div id="footer">
			<p>Created by Mediothek 2014</p>
		</div>
	</body>
</html>-->