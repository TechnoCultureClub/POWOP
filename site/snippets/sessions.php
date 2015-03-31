<<<<<<< HEAD:site/snippets/session.php
<h2>Latest Projects</h2>

<ul class="teaser cf">
  <?php foreach(page('session')->children()->visible()->limit(10) as $project): ?>
=======
<h2>List of Sessions</h2>

<ul class="teaser cf">
  <?php foreach(page('sessions')->children()->visible()->limit(3) as $session): ?>
>>>>>>> origin/master:site/snippets/sessions.php
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $session->title()->html() ?></a></h3>
    <p><?php echo $session->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $session->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>

