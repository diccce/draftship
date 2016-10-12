<article class="gallery-container cf" data-analytics-region="hero">
  <?php foreach(page('collection')->children()->visible()->limit(3) as $edition): ?>
    <a class="gallery-item" href="<?php echo $edition->url() ?>">
      <div class="gallery-item-content">
        <time datetime="<?php echo $edition->date('c') ?>">
          <?php echo $edition->date('F, Y') ?>
        </time>
        <h1><?php echo $edition->title()->html() ?></h1>
      </div>
  
      <?php if($image = $edition->images()->sortBy('sort', 'asc')->first()): ?>
        <figure class="gallery-image" style="background-image: url('<?php echo $image->url() ?>');"></figure>
      <?php endif ?>
    </a>
  <?php endforeach ?>
</article>