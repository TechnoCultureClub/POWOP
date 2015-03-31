<?php snippet('header') ?>

<div class="container mt">
  <main class="main" role="main">

    <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>

	    <?php snippet('submit') ?>

    </div>

  </main>
 </div>

<?php snippet('footer') ?>