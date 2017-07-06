<?php

return function($site, $pages, $page) {

    $query   = get('q');
    $articles = $site->index()->visible()->search($query, 'title|text|tags')->sortBy('date', 'desc');

    return array(
        'query'      => $query,
        'articles'   => $articles,
    );

};
