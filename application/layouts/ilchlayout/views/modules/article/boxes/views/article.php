<?php
$articles = $this->get('articles');

$adminAccess = null;
if ($this->getUser()) {
    $adminAccess = $this->getUser()->isAdmin();
}
?>

<link href="<?=$this->getBoxUrl('static/css/article.css') ?>" rel="stylesheet">

<?php if (!empty($articles)): ?>
    <div class="article-box">
      <div class="gaming">
        <div class="row row-layout">
          <div class="col-xs-12">
            <?php foreach ($articles as $article):
                $date = new \Ilch\Date($article->getDateCreated());
            ?>
                <div class="col-xs-12 col-sm-4 col-lg-4 text-align">
      <!-- new --><div class="article-body">
        <!-- new --><div class="article-header"><i class='fa-solid fa-book-reader'></i></div>
                    <span class="ellipsis-item">
                        <a href="<?=$this->getUrl(['module' => 'article', 'controller' => 'index', 'action' => 'show', 'id' => $article->getId()]) ?>" class="article">
                            <?=$this->escape($article->getTitle()) ?>
                        </a>
                        <?php if (!empty($article->getAuthorName())) : ?>
                            <br>
                        <?=$this->getTrans('by') ?> <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'profil', 'action' => 'index', 'user' => $article->getAuthorId()]) ?>"><?=$this->escape($article->getAuthorName()) ?></a>
                      <?php endif; ?> |
                        <small><?=$date->format("d.m.y - H:i", true) ?> <?=$this->getTrans('clock') ?></small>
                    </span>
      <!-- new --></div>
                </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
    </div>
<?php else: ?>
    <?=$this->getTrans('noArticles') ?>
<?php endif; ?>
