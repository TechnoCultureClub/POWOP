

<div class="row">
  <?php $sessions = page('sessions')->children() ?>
  <?php $thedate = strtotime(date("Y-m-d")); ?>

  <h2><?php echo l::get('next-sess') ?></h2>
    <?php foreach($sessions as $session): ?>
      <?php $eventDate = $session->date('','eventDate') ?>
      <?php if ($eventDate >= $thedate) : ?>

      <div class="col-md-7 col-md-offset-1">
        <h3><a href="<?php echo $session->url() ?>"><?php echo $session->title()->html() ?></a> </h3>
        <p class="bigger"><?php echo $session->text() ?> </p>
        <h4><?php echo l::get('call4project') ?> <?php echo $session->date('d M','startDate') ?> - <?php echo $session->date('d M','endDate') ?> </h4>
        <a href="/submit" class="btn btn-theme"><?php echo l::get('submit-project') ?></a>
      </div>

      <div class="col-md-3 venue">
        <h4><i class="fa fa-calendar"></i> <?php echo $session->date('d M Y', 'eventDate') ?></h4>
        <h4><?php echo $session->eventStartTime() ?> -  <?php echo $session->eventEndTime() ?></h4>
        <strong><?php echo $session->venueName() ?></strong></br>
        <ul>
          <li><?php echo $session->venueAddress() ?></li>
          <li><?php echo $session->venueAddress2() ?></li>
          <li><?php echo $session->venuePostCode() ?></li>
        </ul>
        <a href="<?php echo $session->registrationLink() ?>" class="btn btn-theme"><?php echo l::get('register') ?></a>
      </div>

      <?php endif ?>
    <?php endforeach ?>
</div>
  <hr>
<div class="row">
  <h2><?php echo l::get('previous-sess') ?></h2>
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



