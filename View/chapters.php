<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>
<main>
  <div class="container">
    <h1 class="page-title center limelight">Nos produits sont pour vous</h1>
	<hr>
	<?php foreach ($this->oPosts as $oPost): ?>
        <section id="services" class="bg-white">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 mx-auto">
				<h2><?= $oPost->title ?></h2>
				<!-- On affiche les 1200 premiers caractères et on affiche pas les images -->
                <p class="lead"><?= preg_replace("/<img[^>]+\>/i", "", nl2br(mb_strimwidth($oPost->body, 0, 700, '...'))); ?></p>
                <button type="button" class="btn black"><a class="text-decoration-none white-text" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html">En voir plus</a></button>
              </div>
              <img class="col-lg-4" src="<?=ROOT_URL?>static/img/posts/<?= $oPost->image ?>" class="materialboxed responsive-img" alt="<?= $oPost->title ?>"/>
            </div>
          </div>
        </section>
      <?php endforeach ?>
  </div>
</main>
<?php require 'inc/footer.php' ?>
