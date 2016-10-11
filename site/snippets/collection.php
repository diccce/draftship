<article class="gallery-container cf" data-analytics-region="hero">
  <?php foreach(page('collection')->children()->visible()->limit(3) as $edition): ?>
    <div class="gallery-item">
      <div class="gallery-item-content">
        <time datetime="<?php echo $edition->date('c') ?>">
          <?php echo $edition->date('F, Y') ?>
        </time>
        <h1><?php echo $edition->title()->html() ?></h1>
        <a class="button" href="<?php echo $edition->url() ?>">Button</a>
      </div>
  
      <?php if($image = $edition->images()->sortBy('sort', 'asc')->first()): ?>
        <figure class="gallery-image" style="background-image: url('<?php echo $image->url() ?>');"></figure>
      <?php endif ?>
    </div>
  <?php endforeach ?>
</article>