<?php snippet('header') ?>

<div class="container mt">
	<main class="main" role="main">

	    <div class="text">	    	
			<h2> Project Entry Form </h2>

			<form class="form-horizontal" action="//formspree.io/boygeorge@technoculture.club" method="post">


			<?php foreach($page->children() as $entry): ?>

			<div class="form-group">

				<?php if ($entry->type() == "checkbox"): ?>

			    <div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
				  		<label for="<?php echo $entry->title() ?>">
						    <input type="checkbox" value="" id="<?php echo $entry->title() ?>">
						    <?php echo $entry->label() ?>
					    </label>
					</div>	
				</div>

				<?php else: ?> <!-- not a checkbox type -->


				<label for="<?php echo $entry->title() ?>" class="col-sm-2 control-label"><?php echo $entry->label() ?></label>
				<div class="col-sm-10">
					<input type="<?php echo $entry->type() ?>" class="form-control" id="<?php echo $entry->title() ?>" placeholder="<?php echo $entry->placeholder() ?>">
				</div>

			<?php endif ?> 

			</div>

	        <?php endforeach ; ?>


			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="Send"><?php echo l::get('submit') ?></button>
			</div>
			
			</form>

	    </div>

	</main>
</div>

<?php snippet('footer') ?>


