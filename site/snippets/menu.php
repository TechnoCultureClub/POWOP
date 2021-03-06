<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="<?php echo $site->url ?>"><img src="/assets/images/logo_TCC_sign_S.png" class="img-responsive"></a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="powop"><a href="<?php echo $site->url ?>">POWOP</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php foreach($pages->visible() as $p): ?>
        <li>
          <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>

        <li><a>|</a></li> <!-- Divider -->


        <!-- Language switch -->

        <?php foreach($site->languages() as $language): ?>
        <li<?php e($site->language() == $language, ' class="active"') ?>>
          <a href="<?php echo $page->url($language->code()) ?>">
            <?php echo html($language->code()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

    </div><!--/.nav-collapse -->

<nav class="languages" role="navigation">
  <ul>
  </ul>
</nav>


  </div>
</div>




