<?php $items = $pages->visible()->filterby('footernav', "!=", '1') ?>

<?php if ( $items->count() ) : ?>

<nav class="site-navigation navbar navbar-default">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>

        <a href="<?= $site->url() ?>" class="navbar-brand visible-xs-block visible-sm-block" rel="home"><?= $site->title()->html() ?></a>
      </div>

    <div id="site-navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav" role="menu">

          <?php foreach($items as $item): ?>

              <?php if ($item->hasVisibleChildren() && $item->template() != 'articles') : ?>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $item->title()->html() ?> <i class="fa fa-angle-down fa-lg"></i>
                </a>

              <ul class="dropdown-menu" role="menu">
                <?php foreach($item->children() as $child): ?>
                  <li>
                    <a<?php e($child->isOpen(), ' class="active"') ?> href="<?= $child->url() ?>"><?= $child->title()->html() ?></a>
                  </li>
                <?php endforeach ?>

              </ul>

            </li>

            <?php else : ?>

            <li <?php e($item->isOpen(), ' class="active"') ?>>
                <a href="<?= $item->url() ?>"><?= $item->title()->html() ?><?php e($item->isOpen(), ' <span class="sr-only">(current)</span>') ?>
                </a>
            </li>

            <?php endif ?>

          <?php endforeach ?>

        </ul>

        <?php $query = get('q'); ?>

          <form action="<?= $site->url() ?>/search" class="navbar-search navbar-right">
            <div class="form-group">
              <label for="s" class="sr-only">Search</label>
              <input type="search" id="s" name="q" value="<?= esc($query) ?>" class="form-control" placeholder="Search...">
              <i class="fa fa-search form-control-feedback visible-md-block visible-lg-block"></i>
            </div>
          </form>

      </div><!-- /.navbar-collapse -->

  </div><!-- .container -->

</nav>

<?php endif ?>
