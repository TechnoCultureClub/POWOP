  <div class="row">
    <div class="col-md-12">
      <h2><?php echo l::get('projects') ?></h2>
    </div>
      <?php foreach(page()->children()->visible()->limit(6) as $project): ?>
          <div class="col-md-4 col-sm-6">
              <div class="project-thumb">
                  <a href="<?php echo $project->url() ?>">
                  <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="img-responsive">
                  <?php endif ?>
                  </a>
                  <?php if ($project->winner() == '1') : ?>
                    <div class="winner"><i class="fa fa-heart"></i></div>
                  <?php endif ?>  
                  <a href="<?php echo $project->url() ?>">
                  <div class="project-thumb-title">
                      <h4><?php echo $project->title()->html() ?> - <?php echo $project->baseline()->excerpt(80) ?></h4>
                  </div>
                  </a>
              </div>
            </div>
      <?php endforeach ?>
  </div><!-- portfolio -->
