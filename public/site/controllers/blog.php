<?php

return function($site, $pages, $page) {

    $items = $pages->filterBy('template', 'blog_articles')->children()->visible()->sortBy('date', 'desc');
    $featured = $page->main()->toPage();
    $articles = $items->not($featured)->paginate(9);

    return compact('articles', 'featured');
};
