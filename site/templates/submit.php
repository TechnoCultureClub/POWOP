<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>

        <form class="form-horizontal" action="//formspree.io/aharlap@gmail.com" method="post">

	        <div class="form-group">
				<label for="Name" class="col-sm-2 control-label">Your Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
				</div>
			</div>
	        <div class="form-group">
				<label for="InputEmail" class="col-sm-2 control-label">Email address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label for='ProjectCheck' class="col-sm-2 control-label">Is your project ...?</label>
				<div class="col-sm-10">
			    	<input type="checkbox" class="form-control" id="ProjectCheck" placeholder="Is your project...?">
			    </div>
			</div>
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="Send">Submit</button>
			</div>

		</form>


    </div>

  </main>

<?php snippet('footer') ?>