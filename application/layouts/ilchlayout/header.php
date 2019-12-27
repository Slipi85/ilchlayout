<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('style.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('layout.css') ?>" rel="stylesheet">
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-gaming navbar-fixed-top hidden-sm hidden-md hidden-lg">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-main" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Clanname</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-navbar-collapse-main">
                        <?php
                        echo $this->getMenu
                        (
                            3,
                            '<div class="panel panel-gaming">
                                 <div class="panel-heading">%s</div>
                                    <div class="panel-body">
                                        %c
                                    </div>
                             </div>'
                        );
                        ?>
                    </div>
                </div>
            </nav>
            <div id="navigation" class="navbar-fixed-top">
                <div class="hidden-xs">
                     <div class="navbar navbar-inverse NeueKlasse">
                        <div class="container">
                           <div class="navbar-header">
                             <a class="navbar-brand" href="#">Clanname</a>
                           </div>
                           <ul class="list-unstyled ilch-ilch_menu_ul icon nav navbar-nav">
                              <?php
                               echo $this->getMenu(3,' <li class="dropdown list-unstyled">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">%s<span class="caret"></span></a>
                                 <ul class="dropdown-menu list-unstyled ilch-ilch_menu_ul NeueUlKlasse">
                                   <li>%c</li>
                                 </ul>
                               </li>');?>
                            </ul>
                            <!-- Beginn Username Ausgabe -->
                            <ul>
                              <?php if ($this->getUser() !== null): ?>
                                <li class="list-unstyled pull-right navbar-brand user-active">
                                  <a href="#myModal" class="trigger-btn" data-toggle="modal"><?=$this->getTrans('hello') ?>&nbsp;<b><?=$this->escape($this->getUser()->getName()) ?></b></a>&nbsp;
                                  <div class="ilch--new-message-icon ilch--new-message pull-right"></div>
                                </li>
                            		<?php else: ?>
                                <?php endif; ?>
                            </ul>
                            <!-- End Username Ausgabe -->
                         </div>
                   </div>
                </div>
            </div>
                    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-generic" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?=$this->getLayoutUrl('img/slider/slider_1.jpg') ?>" alt="Slider 1">
                                <div class="carousel-caption">
                                  <!-- Text und Button -->
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-toggle="modal">Sign In</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?=$this->getLayoutUrl('img/slider/slider_2.jpg') ?>" alt="Slider 2">
                                <div class="carousel-caption">
                                  <!-- Text und Button -->
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-toggle="modal">Sign In</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?=$this->getLayoutUrl('img/slider/slider_3.jpg') ?>" alt="Slider 2">
                                <div class="carousel-caption">
                                  <!-- Text und Button -->
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-toggle="modal">Sign In</a>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
        </header>
