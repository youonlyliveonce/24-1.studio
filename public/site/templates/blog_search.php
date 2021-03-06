<?php snippet('magazine/header') ?>

<main class="site-main">

	<div class="container">

		<?php if($articles->count()): ?>

			<h1 class="main-header">Search results for: <?= $query ?></h1>

			<?php snippet('magazine/masonry') ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<div class="controls">
		    <a href="#top" class="go-top">
		        <span class="fa fa-angle-up"></span>
		    </a>
		</div>

	</div><!-- .container -->

</main>

<?php snippet('magazine/footer') ?>
