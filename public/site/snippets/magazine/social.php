<div class="menu-social" aria-label="Social networks">

	<ul class="menu-items list-inline">

		<?php foreach ($site->socialnetworks()->toStructure() as $item) : ?>
			<li class="menu-item">
				<a href="<?= $item->url() ?>"><span class="sr-only"><?= $item->linktext() ?></span></a>
			</li>

		<?php endforeach ?>

	</ul>

</div><!-- .menu-social -->
