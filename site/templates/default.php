<?php snippet('header') ?>

<div class="container mt">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"

      <main class="main" role="main">

        <div class="text">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>
        </div>

      </main>
    </div>

</div>

<?php snippet('footer') ?>