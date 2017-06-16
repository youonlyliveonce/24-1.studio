<article class="main-article">

    <a href="<?= $featured->url() ?>">

        <header class="entry-header">

            <?php if( $cover = $featured->cover()->toFile() ) : ?>

                <figure class="zoom">
                    <img src="<?= $cover->resize(1000)->url() ?>" alt="<?= $featured->title()->html() ?>" class="img-responsive">
                </figure>

            <?php endif ?>

            <div class="entry-date">
                <time datetime="<?= $featured->date('c') ?>"><?= $featured->date('M d, Y') ?></time>
            </div>

            <h1 class="entry-title"><?= $featured->title()->html() ?></h1>

        </header>

        <div class="row entry-content">

            <div class="col-lg-10">

                <?php if($featured->intro()->isNotEmpty()) : ?>
                    <div class="entry-summary">
                        <?= $featured->intro()->kirbytext() ?>
                    </div>
                <?php else : ?>
                    <?= $featured->text()->kirbytext()->excerpt(150) ?>
                <?php endif ?>

            </div>

        </div>

    </a>

    <footer class="entry-footer clearfix">

        <div class="tag-links">
            <?php foreach(str::split($featured->tags()) as $tag): ?>
                <a href="<?= url('results/tag:' . urlencode($tag)) ?>"><?= $tag; ?></a>
            <?php endforeach ?>
        </div>

    </footer>

</article>

<hr>
