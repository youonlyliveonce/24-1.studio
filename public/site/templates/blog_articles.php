<?php snippet('magazine/header') ?>

<main class="site-main">

	<div class="container">

		<?php if($articles->count()):  ?>

			<h1 class="main-header"><?= $page->title()->html() ?></h1>
			<?= $page->text()->kirbytext() ?>

			<?php snippet('magazine/masonry') ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<?php snippet('magazine/pagination') ?>

	</div><!-- .container -->

</main>

<?php snippet('magazine/footer') ?>
