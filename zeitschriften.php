<!--<!DOCTYPE html>
<head>
    <title>Mediothek</title>
    <meta charset="utf-8">
    <?php //include "inc/head_common.php"; ?>
    <link rel="stylesheet" href="css/workshops.css"/>
</head>
<body>
<?php //include "inc/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm">
            <div class="list-group" id="sidebar">
                <a href="#" onclick="Request('buecher.php', 'content');" class="list-group-item">Bücher</a>
                <!--<a href="#" onclick="Request('zeitschriften.php', 'content');" class="list-group-item">Zeitschriften</a>
                <a href="zeitschriften.php" class="list-group-item">Zeitschriften</a>
                <a href="#" onclick="Request('video.php', 'content');" class="list-group-item">Videos</a>
                <a href="#" onclick="Request('musik.php', 'content');" class="list-group-item">Musiktiteln</a>
                <!--<a href="#" class="list-group-item">HTML 5</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-9">-->
            <div id="main-magazine" class="container-fluid">
                <div class="row">
                    <div id="magazine-filter" class="col-xs-12 col-md-9 text-center">
                        <select name="filter-abc" class="selectpicker">
                            <option>A-J</option>
                            <option>K-R</option>
                            <option>S-Z</option>
                        </select>
                        <select name="filter-type" class="selectpicker">
                            <option>National</option>
                            <option>International</option>
                            <option>Sports</option>
                            <option>Music</option>
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
                               onclick="Request('detail.php', 'content', 'src=img/a-bola-2014-12-18-6b51d4.jpg')"><img
                                    class="zoom darkness" src="img/a-bola-2014-12-18-6b51d4.jpg" alt="img-00"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/avante-2014-12-18-6f4b66.jpg')"><img
                                    class="zoom darkness" src="img/avante-2014-12-18-6f4b66.jpg" alt="img-01"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/o-jogo-2014-12-18-8527a8.jpg')"><img
                                    class="zoom darkness" src="img/o-jogo-2014-12-18-8527a8.jpg" alt="img-02"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/correio-da-manha-2014-12-18-6b86b2.jpg')"><img
                                    class="zoom darkness" src="img/correio-da-manha-2014-12-18-6b86b2.jpg" alt="img-03"/></a>
                        </div>
                    </div>

                    <div class="row">
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

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/jornal-de-negocios-2014-12-18-b17ef6.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/jornal-de-negocios-2014-12-18-b17ef6.jpg" alt="img-08"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/jornal-de-noticias-2014-12-18-d4735e.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/jornal-de-noticias-2014-12-18-d4735e.jpg" alt="img-09"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/metro-lisboa-2014-12-18-0b35b0.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/metro-lisboa-2014-12-18-0b35b0.jpg" alt="img-10"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/o-crime-2014-02-06-785f3e.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/o-crime-2014-02-06-785f3e.jpg" alt="img-11"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/o-diabo-2014-12-16-f5ca38.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/o-diabo-2014-12-16-f5ca38.jpg" alt="img-12"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/o-primeiro-de-janeiro-2014-12-18-e7f6c0.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/o-primeiro-de-janeiro-2014-12-18-e7f6c0.jpg" alt="img-13"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/oje-2014-12-18-84f01d.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/oje-2014-12-18-84f01d.jpg" alt="img-14"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/publico-2014-12-18-4e0740.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/publico-2014-12-18-4e0740.jpg" alt="img-15"/></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-xs-offset-1 col-md-offset-0">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/record-2014-12-18-3fdba3.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/record-2014-12-18-3fdba3.jpg" alt="img-16"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/record-2014-12-18-3fdba3.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/record-2014-12-18-3fdba3.jpg" alt="img-17"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/record-2014-12-18-3fdba3.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/record-2014-12-18-3fdba3.jpg" alt="img-18"/></a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-xs-offset-2 col-md-offset-1">
                            <a href="#" onclick="Request('detail.php', 'content', 'src=img/record-2014-12-18-3fdba3.jpg')"><img
                                    class="zoom darkness" width="150%" src="img/record-2014-12-18-3fdba3.jpg" alt="img-19"/></a>
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>
    </div>
</div>

<?php //include "inc/footer.php"; ?>
<?php //include 'inc/footer_common.php'; ?>
</body>
</html>-->