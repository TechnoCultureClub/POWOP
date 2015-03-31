<h2> Project Entry Form </h2>

<form class="form-horizontal" action="//formspree.io/boygeorge@technoculture.club" method="post">

  <div class="form-group">
  </div>

  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label"><?php echo l::get('inputName') ?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" placeholder="<?php echo l::get('inputNamePlaceholder') ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label"><?php echo l::get('inputEmail') ?></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo l::get('inputEmailPlaceholder') ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputProjectTitle" class="col-sm-2 control-label"><?php echo l::get('inputProjectTitle') ?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputProjectTitle" placeholder="<?php echo l::get('inputProjectTitlePlaceholder') ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputProjectTagline" class="col-sm-2 control-label">Project Tagline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputProjectTagline" placeholder="Project Tagline">
    </div>
  </div>



  <div class="form-group">
    <label for='inputProjectCheck' class="col-sm-2 control-label">Is your project ...?</label>
    <div class="col-sm-10">
        <input type="checkbox" class="form-control" id="inputProjectCheck" placeholder="Is your project...?">
      </div>
  </div>

  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default" name="Send"><?php echo l::get('submit') ?></button>
  </div>

</form>


name
description (why? for whom? how/what?)
tagline / one sentence
participants
name
social link(s)
video link 
image link 
url ? (prototype of project or project website/blog)
