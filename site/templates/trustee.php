<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container mt">
        <div class="row">
          <div class="col-md-2 col-md-offset-2">
            <img src="<?php echo $page->images()->first()->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive collectif-img mt">
            <div class="member-content">
              <i class="fa fa-external-link mr"></i><a href="<?php echo $page->website() ?>" target="_blank"><?php echo $page->website()->uri() ?></a></br>
              <i class="fa fa-linkedin mr"></i><a href="<?php echo $page->linkedin() ?>" target="_blank">LinkedIn</a></br>
            </div>
            <div class="smt">
              <strong>Joined:</strong> <?php $thedate = strtotime($page->datestart()); echo date('d/m/Y', $thedate); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text">
              <h1><?php echo $page->title()->html() ?> - <?php echo $page->boite() ?></h1>
              <hr>
              <strong><?php echo $page->short() ?></strong>
              <p><?php echo $page->text() ?></p>
            </div>
          </div>
        </div>

    </div>

  </main>

<?php snippet('footer') ?>