<footer class="site-footer">

	<div class="container">

		<hr>

		<div class="row">

			<div class="col-md-6">
				<?= $site->copyright()->kirbytext() ?>
			</div>

			<div class="col-md-6">

				<?php $items = $pages->visible()->filterby('footernav', '1') ?>

				<ul class="footer-nav list-inline">

					<?php foreach($items as $item): ?>

						<li <?php e($item->isOpen(), ' class="active"') ?>>
							<a href="<?= $item->url() ?>"><?= $item->title()->html() ?><?php e($item->isOpen(), ' <span class="sr-only">(current)</span>') ?>
							</a>
						</li>

					<?php endforeach ?>

				</ul>
			</div>

		</div> <!-- .row -->

		<div class="visible-xs-block visible-sm-block">
			<?php snippet('magazine/social', array('site' => $site)) ?>
		</div>

	</div> <!-- .container -->

</footer>

<!-- Load JS scripts -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<!-- Jquery fallback -->
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<?= js(array(
	'assets/js/vendor/bootstrap.min.js',
	'assets/js/vendor/masonry.pkgd.min.js',
	'assets/js/vendor/imagesloaded.pkgd.min.js',
	'assets/js/magazine.js'
)) ?>

</body>
</html>
