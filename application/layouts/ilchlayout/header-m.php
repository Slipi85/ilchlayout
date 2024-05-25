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
            <div class="header-m">
              <div class="carousel-caption">
                <div class="header-heading text-align">
                  <?=$this->getHmenu() ?><hr>
                </div>
              </div>
            </div>
        </header>
