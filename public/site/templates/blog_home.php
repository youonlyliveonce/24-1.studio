
<?php snippet('magazine/header') ?>

<main class="site-main">

	<div class="container">

		<?= $page->text()->kirbytext() ?>

		<?php if ($featured <> null ): ?>
			<?php snippet('magazine/featured') ?>
		<?php endif ?>

		<?php if($articles->count()): ?>

			<?php snippet('magazine/masonry') ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<?php snippet('magazine/pagination') ?>

	</div><!-- .container -->

</main>

<?php snippet('magazine/footer') ?>
