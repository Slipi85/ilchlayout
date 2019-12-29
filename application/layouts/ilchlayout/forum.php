<!-- header section -->

<?php include('header-m.php'); ?>

<!-- Main section -->

<main>
  <div class="container">
    <div class="gaming">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?=$this->getContent() ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 sidebar">
            <?php
            echo $this->getMenu
            (
                2,
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
    </div>
  </div>
</main>

<!-- footer section -->

<?php include('footer.php'); ?>
