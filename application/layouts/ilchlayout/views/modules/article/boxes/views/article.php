<?php
$articles = $this->get('articles');

$adminAccess = null;
if ($this->getUser()) {
    $adminAccess = $this->getUser()->isAdmin();
}

$displayedArticles = 0;
?>

<link href="<?=$this->getBoxUrl('static/css/article.css') ?>" rel="stylesheet">

<?php if (!empty($articles)): ?>
    <div class="article-box">
      <div class="gaming">
        <div class="row">
          <div class="col-xs-12">
            <?php foreach ($articles as $article):
                if (!is_in_array($this->get('readAccess'), explode(',', $article->getReadAccess())) && $adminAccess == false) {
                    continue;
                }

                $displayedArticles++;
                $date = new \Ilch\Date($article->getDateCreated());
            ?>
                <div class="col-xs-12 col-sm-4 col-lg-4 text-align">
      <!-- new --><div class="article-body">
        <!-- new --><div class="article-header"><i class='fas fa-book-reader'></i></div>
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
                <!-- new -->  </div>
                </div>
            <?php endforeach; ?>
            <?php if ($displayedArticles == 0) : ?>
                <?=$this->getTrans('noArticles') ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
<?php else: ?>
    <?=$this->getTrans('noArticles') ?>
<?php endif; ?>
