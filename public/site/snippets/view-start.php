<div class="Page<?php echo $pageclass; ?>">
	<header class="Header" role="banner">
		<?php snippet('logo') ?>
		<div class="Header__body">
			<?php snippet('menu') ?>
		</div>
		<span class="Button--toggle">
			<span></span>
		</span>
	</header>
	<?php if($site->facts()->isNotEmpty()) : ?>
		<div class="Button Button--PDF">
			<a href="<?php echo $site->file($site->facts())->url() ?>" target="_blank">
				<span><?php echo $site->factslabel(); ?></span>
			</a>
		</div>
	<?php endif; ?>
	<main class="Page__inner" role="main">
		<div class="View">
