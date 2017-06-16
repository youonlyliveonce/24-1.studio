<?php snippet('blog/header') ?>

<main class="site-main">

	<div class="container">

		<?php if($articles->count()):  ?>

			<h1 class="main-header"><?= $page->title()->html() ?></h1>
			<?= $page->text()->kirbytext() ?>

			<?php snippet('blog/masonry') ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<?php snippet('blog/pagination') ?>

	</div><!-- .container -->

</main>

<?php snippet('blog/footer') ?>
