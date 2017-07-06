<?php snippet('magazine/header', array('site' => $site, 'pages' => $pages)) ?>

<main class="site-main">

	<div class="container">

		<div class="author-bio text-center">

			<?php if($avatar = $site->user($user)->avatar()): ?>
			<img class="author-avatar" src="<?= $avatar->url() ?>" alt="<?= $site->user($user)->firstname() ?>'s avatar">
			<?php endif ?>

			<h1 class="author-header"><?= $site->user($user)->firstname() . ' ' . $site->user($user)->lastname()  ?></h1>

			<div class="row">

				<div class="col-lg-10 col-lg-offset-1">
					<?= kirbytext($site->user($user)->bio()) ?>
				</div>

			</div>

		</div><!-- .author-bio -->

		<hr>

		<?php $articles = $pages->children()->visible()->filterBy('template', 'blog_article')->filterBy('author', $user)->sortBy('date', 'desc')->paginate(9); ?>

		<?php if($articles->count()): ?>

			<?php snippet('magazine/masonry', array('articles' => $articles)) ?>

		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif ?>

		<?php snippet('magazine/pagination', array('articles' => $articles)) ?>

	</div><!-- .container -->

</main>

<?php snippet('magazine/footer', array('site' => $site, 'pages' => $pages)) ?>
