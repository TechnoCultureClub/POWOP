<?php snippet('header') ?>
<main class="main" role="main">

<div class="container mt">

    <h3><?php echo page('FAQs')->title() ?></h3>
    <p><?php echo page('FAQs')->text() ?></p>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php $counter=0; 
        foreach(page('FAQs')->children()->limit(6) as $question): $counter++; ?>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading<?php echo $counter ?>">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter ?>" aria-expanded="false" aria-controls="collapse<?php echo $counter ?>">
            <?php echo $question->title() ?>
          </a>
        </h4>
      </div>
      <div id="collapse<?php echo $counter ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $counter ?>">
        <div class="panel-body">
          <p><?php echo $question->text()->kirbytext() ?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>  
  </div>

</div>

</main>

<?php snippet('footer') ?>