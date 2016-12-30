<article class="gallery-container scene_element scene_element--fadeindown cf" data-analytics-region="hero">
  <?php foreach(page('collection')->children()->visible()->limit(3) as $edition): ?>
    <a class="gallery-item" href="<?php echo $edition->url() ?>">
      <div class="gallery-item-content">
        
        <h1><?php echo $edition->title()->html() ?></h1>
        <time datetime="<?php echo $edition->date('c') ?>">
          <?php echo $edition->date('F, Y') ?>
        </time>
      </div>

      <div class="slide-progress"></div>
  
      <?php if($image = $edition->images()->sortBy('sort', 'asc')->first()): ?>
        <!--<div id="fade">
          <div class="snowfall"></div>
        </div>-->
        <figure class="gallery-image" style="background-image: url('<?php echo $image->url() ?>');"></figure>
      <?php endif ?>
    </a>
  <?php endforeach ?>
</article>