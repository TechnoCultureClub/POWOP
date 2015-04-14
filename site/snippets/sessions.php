

<div class="row">
  <?php $sessions = page('sessions')->children() ?>
  <?php $thedate = strtotime(date("Y-m-d")); ?>

  <h2>Next Session</h2>
    <?php foreach($sessions as $session): ?>
      <?php $eventDate = $session->date('','eventDate') ?>
      <?php if ($eventDate >= $thedate) : ?>
      <div class="col-md-12">
        <h3><a href="<?php echo $session->url() ?>"><?php echo $session->title()->html() ?></a></h3>
        <p><?php echo $session->text() ?> </p>
        <?php if($image = $session->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $session->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $session->title()->html() ?>" >
        </a>
        <?php endif ?>
      </div>
      <?php endif ?>
    <?php endforeach ?>
  
  <hr>

  <h2>Past sessions</h2>
    <?php foreach($sessions as $session): ?>
      <?php $eventDate = $session->date('','eventDate') ?>
      <?php if ($eventDate < $thedate) : ?>
      <div class="col-md-12">
        <h3><a href="<?php echo $session->url() ?>"><?php echo $session->title()->html() ?></a></h3>
        <p><?php echo $session->text()->excerpt(80) ?> <a href="<?php echo $session->url() ?>">read&nbsp;more&nbsp;→</a></p>
        <?php if($image = $session->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $session->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $session->title()->html() ?>" >
        </a>
        <?php endif ?>
      </div>
      <?php endif ?>
    <?php endforeach ?>

</div>



