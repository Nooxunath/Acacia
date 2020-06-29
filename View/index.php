<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
  <div class="container-fluid">
    <?php if (empty($this->oPosts)): ?>
        <h1>Il n'y a aucun article.</h1>
        <p><button type="button" onclick="window.location='<?=ROOT_URL?>admin_add.html'" class="btn waves-effect waves-light">Ajoutez votre premier article!</button></p>
    <?php else: ?>

    <header class="parallax para1 myImg"></header>

    <article class="parallax para2 myImg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="nature limelight">N</div><div class="nature limelight">A</div><div class="nature limelight">T</div><div class="nature limelight">U</div><div class="nature limelight">R</div><div class="nature limelight">A</div><div class="nature limelight">L</div><div class="nature limelight">I</div><div class="nature limelight">T</div><div class="nature limelight">É</div>
          </div>
        </div>
      </div>
    </article>
    
    <div class="row">

      <?php foreach ($this->oPosts as $oPost): ?>
        <section id="services" class="bg-white">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2><a class="text-yellow text-decoration-none limelight" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html"><?=htmlspecialchars($oPost->title)?></a></h2>
                <p class="lead"><?= preg_replace("/<img[^>]+\>/i", "", nl2br(mb_strimwidth($oPost->body, 0, 700, '...'))); ?></p>
                <button type="button" class="btn black"><a class="text-decoration-none white-text" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html">En voir plus</a></button>
              </div>
              <img class="col-lg-4" src="<?=ROOT_URL?>static/img/posts/<?= $oPost->image ?>" alt="<?= $oPost->title ?>">
            </div>
          </div>
        </section>
      <?php endforeach ?>
    </div>

  </div>
</main>
<?php endif ?>
<?php require 'inc/footer.php' ?>
