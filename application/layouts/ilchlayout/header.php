<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de" data-bs-theme="dark">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('style.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('layout.css') ?>" rel="stylesheet">
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-gaming fixed-top d-sm-block d-md-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Clanname</a>
                <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#bs-navbar-collapse-main" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-main">
                  <?php if ($this->getUser() !== null): ?>
                    <li class="list-unstyled navbar-brand-m user-active">
                      <a href="#myModal" class="trigger-btn" data-bs-toggle="modal"><?=$this->getTrans('hello') ?>&nbsp;<b><?=$this->escape($this->getUser()->getName()) ?></b></a>
                      &nbsp;<div class="ilch--new-message-icon ilch--new-message float-end"></div>
                    </li>
                    <?php else: ?>
                  <?php endif; ?>
                    <?php
                    echo $this->getMenu
                    (
                        3,
                        '<div class="card card-gaming">
                             <div class="card-title">%s</div>
                                <div class="card-body">
                                    %c
                                </div>
                         </div>'
                    );
                    ?>
                </div>
            </div>
        </nav>
            <div id="navigation" class="navbar-fixed-top">
                <div class="d-none d-sm-block">
                     <div class="navbar navbar-inverse NeueKlasse">
                        <div class="container-fluid">
                           <div class="navbar-header">
                             <a class="navbar-brand" href="#">Clanname</a>
                           </div>
                           <ul class="list-unstyled ilch-ilch_menu_ul icon nav navbar-nav">
                              <?php
                               echo $this->getMenu(3,' <li class="dropdown list-unstyled">
                                 <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">%s</a>
                                 <ul class="dropdown-menu list-unstyled ilch-ilch_menu_ul NeueUlKlasse">
                                   <li>%c</li>
                                 </ul>
                               </li>');?>
                            </ul>
                            <ul>
                              <?php if ($this->getUser() !== null): ?>
                                <li class="list-unstyled float-end navbar-brand user-active">
                                  <a href="#myModal" class="trigger-btn" data-bs-toggle="modal"><?=$this->getTrans('hello') ?>&nbsp;<b><?=$this->escape($this->getUser()->getName()) ?></b></a>&nbsp;
                                  <div class="ilch--new-message-icon ilch--new-message float-end"></div>
                                </li>
                            		<?php else: ?>
                                <?php endif; ?>
                            </ul>
                         </div>
                   </div>
                </div>
            </div>
                    <div id="carousel-generic" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-generic" data-bs-slide-to="0" aria-label="Slide 1" class="active"></button>
                            <button type="button" data-bs-target="#carousel-generic" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-generic" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="img img1"></div>
                                <div class="carousel-caption">
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-bs-toggle="modal">Sign In</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                              <div class="img img2"></div>
                                <div class="carousel-caption">
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-bs-toggle="modal">Sign In</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img img3"></div>
                                <div class="carousel-caption">
                                  <h1>Welcome on my Site</h1>
                                  <a type="button" class="btn btn-primary btn-1 btn-lg" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>">Sign Up</a>
                                  <a type="button" class="btn btn-primary btn-2 btn-lg" href="#myModal" class="trigger-btn" data-bs-toggle="modal">Sign In</a>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-generic" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-generic" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
        </header>
