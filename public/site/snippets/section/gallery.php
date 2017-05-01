<?php
	$children = $section->slideshow()->yaml();
	$snippet = 'tiny/gallery_item';
?>
<div class="Gallery [ Element ]" id="<?php echo $section->slug(); ?>" data-view="GalleryGridView">
	<div class="Gallery__background"></div>
		<div class="Gallery__headline"><span><?= $section->title(); ?></span></div>
		<div class="Gallery__head"></div>
		<div class="Gallery__body">
			<div class="Gallery__mansry">
				<div class="Gallery__sizer"></div>
				<?php foreach($children as $teaser) :
						if($teaser['size'] == "large") :
							snippet($snippet, array('page' => $section, 'item' => $teaser, 'itemclass' => 'Gallery__item--large ', 'thumb' => 'large'));
						elseif($teaser['size'] == "medium") :
							snippet($snippet, array('page' => $section,'item' => $teaser, 'itemclass' => 'Gallery__item--medium ', 'thumb' => 'square'));
						elseif($teaser['size'] == "xmedium") :
							snippet($snippet, array('page' => $section,'item' => $teaser, 'itemclass' => 'Gallery__item--xmedium ', 'thumb' => 'xrect'));
						elseif($teaser['size'] == "small") :
							snippet($snippet, array('page' => $section,'item' => $teaser, 'itemclass' => 'Gallery__item--small ', 'thumb' => 'rect'));
						else :
							snippet($snippet, array('page' => $section,'item' => $teaser, 'itemclass' => '', 'thumb' => 'square'));
						endif;
					endforeach; ?>
			</div>
		</div>
		<?php snippet('down',  array('section' => $section)) ?>
</div>
