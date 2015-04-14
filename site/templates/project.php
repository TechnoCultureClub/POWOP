<?php snippet('header') ?>

<div class="container mt">

  <main class="main" role="main">

    <div class="container pager left">
      <li><a href="<?php echo $page->parent()->url() ?>" class="previous">&larr; <?php echo l::get('back-to') ?> <?php echo $page->parent()->title() ?></a></li>
    </div>

    <div class="project-title smb center">
        <h2><?php echo $page->title()->html() ?></h2>
      </div>

      <div class="row">

          <div class="col-md-7 col-md-offset-1">
              <div class="responsive-video">
                  <iframe src="//player.vimeo.com/video/<?php echo $page->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>

              <h4><?php echo $page->baseline()->html() ?></h4>

              <?php echo $page->text()->kirbytext() ?>

          </div>
          <div class="col-md-3">
              <img src="<?php echo $page->images()->first()->url() ?>" class="responsive-img">   
              <div class="spacing"></div>
              <?php if ($page->winner() == '1') : ?>
                <div class="winner"><i class="fa fa-heart"></i></div>
              <?php endif ?> 
              <p><b><?php echo l::get('project-owner') ?> :</b><br>
              
              <a href="<?php echo $page->ownerLink() ?>"><?php echo $page->ownerName() ?></a>
              
              </p>
              
              <div class="spacing"></div>
              <?php $counter=0;
              foreach($page->images()->sortBy('sort', 'asc') as $image): if($counter++ == 0) continue; ?>
              <figure>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="smb">
              </figure>
              <?php endforeach ?>
          </div>
      </div> <!--/row -->
      <div class="row mt">
        <div class="col-md-10 col-md-offset-1"
          <nav class="" role="navigation">
            <ul class="pager">
              <?php if($prev = $page->prevVisible()): ?>
              <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; <?php echo l::get('previous') ?></a></li>
              <?php endif ?>
              <?php if($next = $page->nextVisible()): ?>
              <li class="next"><a href="<?php echo $next->url() ?>"><?php echo l::get('next') ?> &rarr;</a></li>
              <?php endif ?>
            </ul>
          </nav>
        </div>



  </main>

</div>

<?php snippet('footer') ?>