<?php snippet('header') ?>
<figure class="header-bg black">
	<div id="fade">
          <div class="snowfall"></div>
        </div>
</figure>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('products') ?>

  </main>

<?php snippet('footer') ?>