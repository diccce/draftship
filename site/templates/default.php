<?php snippet('header') ?>
<figure class="header-bg scene_element scene_element--fadeindown black"></figure>

  <main class="main scene_element scene_element--fadeinup" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>