    <section class="main-footer">
      <div class="container">
        <div class="gaming">
          <div class="row">
              <?php
              echo $this->getMenu
              (
                  5,
                  '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="panel panel-gaming">
                         <div class="heading">%s</div>
                            <div class="panel-body">
                                %c
                            </div>
                     </div>
                   </div>'
              );
              ?>
          </div>
        </div>
      </div>
    </section>
    <div class="footer">
        <div class="container">
            <div class="gaming">
                <div class="row">
                    <div class="col-xs-12 text-align padding">
                        &copy; Ilch 2.0 Free Layout 2.0| CMS by <a href="http://www.ilch.de/" target="_blank">Ilch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade login-modul" id="myModal">
      <div class="modal-dialog panel-body log-body">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      		<h4 class="modal-title">
            <?php if ($this->getUser() !== null): ?>
              <?=$this->getTrans('hello') ?> <b><?=$this->escape($this->getUser()->getName()) ?></b>
            <?php else:
              echo "Sign In";
            endif;?>
          </h4>
      	</div>
        <div class="modal-body">
          <?=$this->getBox('user', 'login'); ?>
        </div>
        </div>
      </div>
    </div>
    <?=$this->getFooter() ?>
  </body>
</html>
