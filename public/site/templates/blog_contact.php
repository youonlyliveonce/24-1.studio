<?php snippet('magazine/header') ?>

	<main class="site-main">

		<div class="container">

			<h1 class="main-header"><?php echo $page->title()->html() ?></h1>

			<div class="row">

				<div class="col-md-7">

					<?php echo $page->text()->kirbytext() ?>

					<form class="contact-form" method="post">

						<?php if($alert): ?>
						      <div class="alert">
						        <ul>
						          <?php foreach($alert as $message): ?>
						          <li><?php echo html($message) ?></li>
						          <?php endforeach ?>
						        </ul>
						      </div>
			      		<?php endif ?>

						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input class="form-control input-lg" type="text" id="name" name="name" placeholder="Name" required>
						</div>

						<div class="form-group">
							<label for="email" class="sr-only">Email address</label>
							<input class="form-control input-lg" type="email" id="email" name="email" placeholder="Email" required>
						</div>

						<div class="form-group">
							<label for="text" class="sr-only">Message</label>
							<textarea class="form-control input-lg" id="text" name="text" rows="6" placeholder="Message" required></textarea>
						</div>

					  <button class="btn btn-default btn-lg btn-block" type="submit" name="submit" value="submit">Submit</button>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1">

					<?php echo $page->contactinfo()->kirbytext() ?>

				</div>

			</div><!-- .row -->

		</div><!-- .container -->

	</main>

<?php snippet('magazine/  footer') ?>
