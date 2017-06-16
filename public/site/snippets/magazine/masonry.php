<div class="masonry row">

    <?php foreach($articles as $article): ?>

        <div class="item col-xs-12 col-sm-6 col-md-4">

            <article class="type-post">

                <a href="<?= $article->url() ?>">

                    <header class="entry-header">

                        <?php if($cover = $article->cover()->toFile() ) : ?>

                            <figure class="zoom">
                                <img src="<?= $cover->resize(480)->url() ?>" alt="<?= $article->title()->html() ?>" class="img-responsive">
                            </figure>

                        <?php endif ?>

                        <div class="entry-date">
                            <time datetime="<?= $article->date('c') ?>"><?= $article->date('M d, Y') ?></time>
                        </div>

                        <h2 class="entry-title"><?= $article->title()->html() ?></h2>

                    </header>

                    <div class="entry-content">

                        <?php if($article->intro()->isNotEmpty()) : ?>
                            <?= $article->intro()->kirbytext() ?>
                        <?php else : ?>
                            <?= $article->text()->kirbytext()->excerpt(90) ?>
                        <?php endif ?>

                    </div>

                </a>

                <footer class="entry-footer">

                    <div class="tag-links">
                        <?php foreach(str::split($article->tags()) as $tag): ?>
                            <a href="<?= url('results/tag:' . urlencode($tag)) ?>"><?= $tag; ?></a>
                        <?php endforeach ?>
                    </div>

                </footer>

            </article>

            <hr>

        </div>

    <?php endforeach ?>

</div><!-- .masonry -->
