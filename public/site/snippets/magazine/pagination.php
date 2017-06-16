<div class="controls">
    <a href="#top" class="go-top">
        <span class="fa fa-angle-up"></span>
    </a>

    <?php if($articles->pagination()->hasNextPage()):?>

        <a class="loadmore" href="#" data-total="<?= $articles->pagination()->pages() ?>">
            <span class="fa fa-angle-down"></span>
        </a>

    <?php endif ?>

</div>
