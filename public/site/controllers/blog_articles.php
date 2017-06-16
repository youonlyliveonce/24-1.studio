<?php

return function($site, $pages, $page) {

	$articles = $page->children()->visible()->flip()->paginate(9);

return compact('articles');

};
