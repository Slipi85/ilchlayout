<!-- header section -->

<?php include('header-m.php'); ?>

<!-- Main section -->

<main>
  <div class="container-fluid">
    <div class="gaming">
      <div class="row row-layout">
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="card-body">
                    <?=$this->getContent() ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 sidebar-layout">
            <?php
            echo $this->getMenu
            (
                1,
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
    </div>
  </div>
</main>

<!-- footer section -->

<?php include('footer.php'); ?>
