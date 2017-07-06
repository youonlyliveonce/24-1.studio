<?php snippet('magazine/header') ?>

<main class="site-main">

	<div class="container">

		<h1 class="main-header tag"><?= $tag ?></h1>

		<?php if($articles->count()): ?>

			<?php snippet('magazine/masonry') ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<?php snippet('magazine/pagination') ?>

	</div><!-- .container -->

</main>

<?php snippet('magazine/footer') ?>
