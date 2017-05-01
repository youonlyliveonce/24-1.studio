<div class="Gallery__item <?= $itemclass ?>">
	<a>
		<?php
			$img = $page->image($item['img']);
		?>
		<?php if($thumb == 'square'): ?>
			<?= thumb($img, array('width' => 400, 'height' => 400, 'crop' => true)); ?>
		<?php elseif($thumb == 'rect'): ?>
			<?= thumb($img, array('width' => 502, 'height' => 247, 'crop' => true)); ?>
		<?php elseif($thumb == 'xrect'): ?>
			<?= thumb($img, array('width' => 745, 'height' => 490, 'crop' => true)); ?>
		<?php elseif($thumb == 'large'): ?>
			<?= thumb($img, array('width' => 1010, 'height' => 564, 'crop' => true)); ?>
		<?php endif; ?>
	</a>
</div>
