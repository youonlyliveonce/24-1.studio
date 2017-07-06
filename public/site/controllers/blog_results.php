<?php

return function($site, $pages, $page) {

    $articles = $site->index()->filterBy('template', 'blog_article');

    if(param('tag')) {
      $tag = urldecode(param('tag'));
      $articles = $articles->visible()->filterBy('tags', $tag, ',')->sortBy('date', 'desc')->paginate(9);
    }

    return compact('articles', 'tag');
};
