
      <!-- header section -->

      <?php include('header.php'); ?>

      <!-- about us section -->

      <section class="about-us text-align padding">
        <div class="container">
          <div class="gaming">
            <div class="row">
              <div class="col-xs-12">
                <h1>About-us</h1>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- what does ... offer you section -->

      <section class="what-does text-align padding">
        <div class="container">
          <div class="gaming">
            <div class="row">
              <div class="col-xs-12">
                <h1>Wir bieten Euch</h1>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                <i class="fa fa-bars"></i><hr>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                <i class="fa fa-calendar-o"></i><hr>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                <i class="fa fa-users"></i><hr>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- teamspeak section -->

      <section class="background background-1 teamspeak padding">
        <div class="container">
          <div class="gaming">
            <div class="row flex">
              <div class="col-xs-12 col-md-6 col-lg-6">
                <h1>Unser Teamspeak</h1>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
              </div>
              <div class="col-xs-12 col-md-6 col-lg-6 text-align">
                <img src="<?=$this->getLayoutUrl('img/ts_logo.png') ?>">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- news section -->

      <section class="news text-align padding">
        <div class="container">
          <div class="gaming">
            <div class="row">
              <div class="col-xs-12">
                <h1>News</h1>
                <h4><font>News</font> | Events  |<font>Clan</font></h4>
                 <?=$this->getBox('article', 'article'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- chat section -->

      <section class="chat text-align padding">
        <div class="container">
          <div class="gaming">
            <div class="row">
              <div class="col-xs-12">
                <h1>Unser Chat</h1>
                 <?=$this->getBox('shoutbox', 'shoutbox'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- footer section -->

      <?php include('footer.php'); ?>
