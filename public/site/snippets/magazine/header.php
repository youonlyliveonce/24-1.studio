<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $site->title()->html() ?> | <?php if(isset($page)) { echo $page->title()->html(); } else { echo 'Author'; } ?></title>

	<!-- Meta tag description -->
	<?php if (isset($page) && $page->description()->isNotEmpty()) : ?>
		<meta name="description" content="<?= $page->description()->html() ?>">
	<?php else: ?>
		<meta name="description" content="<?= $site->description()->html() ?>">
	<?php endif ?>

	<!-- Stylesheets and fonts -->
	<?= css(array(
		'assets/blog/css/bootstrap.min.css',
		'assets/blog/css/magazine.css',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
	)) ?>


	<!-- Favicon -->
	<?php if ($favicon = $site->favicon()->toFile()): ?>
		<link rel="icon" href="<?= $favicon->url() ?>">
	<?php endif ?>

</head>

<body id="#top">

	<header class="site-header">

		<div class="container">

			<div class="site-branding hidden-xs hidden-sm clearfix">

				<?php if ($logo = $site->logo()->toFile()) : ?>

					<a href="<?= $site->url() ?>" rel="home">
						<img class="site-logo" src="<?= $logo->url() ?>" alt="<?= $site->title()->html() ?>">
					</a>

				<?php else : ?>

					<span class="site-title">
						<a href="<?= $site->url() ?>" rel="home"><?= $site->title()->html() ?></a>
					</span>

				<?php endif ?>

				<?php if ($site->tagline()->isNotEmpty()) : ?>
					<span class="site-tagline"><?= $site->tagline()->html() ?></span>
				<?php endif ?>

				<?php snippet('magazine/social', array('site' => $site)) ?>

			</div><!-- .site-branding -->

		</div><!-- .container -->

		<?php snippet('magazine/menu', array('site' => $site, 'pages' => $pages)) ?>


	</header>
