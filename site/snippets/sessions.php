

<h2>List of Sessions</h2>

<ul class="teaser cf">
  <?php foreach(page('sessions')->children()->visible()->limit(3) as $session): ?>

  <li>
    <h3><a href="<?php echo $session->url() ?>"><?php echo $session->title()->html() ?></a></h3>
    <p><?php echo $session->text()->excerpt(80) ?> <a href="<?php echo $session->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $session->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $session->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $session->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>

