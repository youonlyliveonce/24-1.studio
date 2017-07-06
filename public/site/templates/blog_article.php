<?php snippet('magazine/header') ?>

	<main class="site-main">

		<div class="container">

			<article class="single-article">

			<?php if($cover = $page->cover()->toFile()) : ?>
				<figure>
					<img src="<?= $cover->resize(1000)->url() ?>" alt="<?= $page->title()->html() ?>" class="img-responsive">
				</figure>
			<?php endif ?>

			<div class="content-columns">

				<header>

					<h1 class="entry-title"><?= $page->title()->html() ?></h1>

					<?php if($page->intro()->isNotEmpty()) : ?>
						<div class="intro">
              				<?= $page->intro()->kirbytext() ?>
						</div>
					<?php endif ?>

				</header>

				<div class="entry-content">
					<?= $page->text()->kirbytext() ?>
				</div>

			</div>

			<hr>

			<footer class="entry-footer">

			<div class="row">

				<div class="col-md-6">

					<div class="tag-links">
						<?php foreach(str::split($page->tags()) as $tag): ?>
							<a href="<?= url('/' . $site->language() . '/blog-results/tag:' . urlencode($tag)) ?>"><?= $tag; ?></a>
						<?php endforeach ?>
					</div>

				</div>

				<div class="col-md-6">

					<?php $user = $page->author(); ?>

					<!-- <div class="entry-meta">  -->
						<!-- by <a class="author-link" href="<?php /*echo url('/' . $site->language() . '/blog-author/' . $user) */ ?>" rel="author"> -->
						<!-- <?php /* echo  $site->user($user)->firstName() . " " . $site->user($user)->lastName() */ ?> -->
					<!-- </a> on <time datetime="<?php /* echo $page->date('c') */?>"><?php /* ehco $page->date('M d, Y') */?></time> -->
				<!-- </div> -->

				</div>

			</div>

				<ul class="share-buttons list-inline">
					<?php if ($site->sharetwitter() == "1" ): ?>
					<li class="share-button">
						<a class="btn btn-default" href="https://twitter.com/intent/tweet?source=webclient&text=<?= rawurlencode($page->title()); ?>%20%7C%20<?= rawurlencode($site->title()); ?>%20<?= rawurlencode($page->url()); ?>" target="blank" title="Tweet this"><i class="fa fa-twitter"></i> Twitter</a>
					</li>
					<?php endif ?>
					<?php if ($site->sharefacebook() == "1" ): ?>
					<li class="share-button">
						<a class="btn btn-default" href="http://www.facebook.com/sharer.php?u=<?= rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook"><i class="fa fa-facebook"></i> Facebook</a>
					</li>
					<?php endif ?>
					<?php if ($site->sharegoogle() == "1" ): ?>
					<li class="share-button">
						<a class="btn btn-default" href="https://plus.google.com/share?url=<?= rawurlencode ($page->url()); ?>" target="blank" title="Share on Google+"><i class="fa fa-google-plus"></i> Google+</a>
					</li>
					<?php endif ?>
				</ul>

			<div class="controls">
				<a href="#top" class="go-top">
					<span class="fa fa-angle-up"></span>
				</a>
			</div>

		</footer>

		</article>

		</div><!-- container -->

	</main>

<?php snippet('magazine/footer') ?>
