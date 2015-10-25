
<header id="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-sm-3">
                <h1 id="main-logo"><a href="index.php">Mediothek<span>WPK demo site</span></a></h1>
            </div>
            <div class="col-xs-7 col-sm-9">
                <ul id="main-menu" class="nav nav-pills hidden-xs">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Büchern und Zeitschriften <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" onclick="Request('buecher.php', 'content');">Büchern</a></li>
                            <li><a href="#" onclick="Request('zeitschriften.php', 'content');">Zeitschriften</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="Request('video.php', 'content');">Videos</a></li>
                    <li><a href="#" onclick="Request('musik.php', 'content');">Musiktiteln</a></li>
                    <?php if (!isset($_SESSION['name'])) :?>
                        <li><a href="#" onclick="Request('login.html', 'content');">Login</a></li>
                    <?php else : ?>
                        <li><a href="index.php" onclick="<?php session_destroy(); ?>">Logout</a></li>
                        <li><p>Login as: <?php echo $_SESSION['name']; ?></p></li>
                    <?php endif; ?>
                </ul>

                <a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
                    <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </div>
        </div>
    </div>
    <!--<div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div id="main-subheader">

                </div>
            </div>
        </div>
    </div>-->
    <div class="container-fluid">
        <div class="row">
            <div id="carousel-generic" class="carousel col-xs-12" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/3093772_3cfc184e.jpg" alt="photo01">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="img/filmstrip-91434_1280.jpg" alt="photo02">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="img/music-306008_1280.png" alt="photo02">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <ul id="mobile-main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" onclick="Request('buecher.php', 'content');">Büchern</a></li>
            <li><a href="#" onclick="Request('zeitschriften.php', 'content');">Zeitschriften</a></li>
            <li><a href="#" onclick="Request('video.php', 'content');">Videos</a></li>
            <li><a href="#" onclick="Request('musik.php', 'content');">Musiktiteln</a></li>
            <li><a href="#" onclick="Request('login.html', 'content');">Login</a></li>
        </ul>
    </div>
</header>