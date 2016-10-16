<article class="gallery-container cf" data-analytics-region="hero">
  <?php foreach(page('collection')->children()->visible() as $edition): ?>
    <a class="gallery-item" href="<?php echo $edition->url() ?>">
      <div class="gallery-item-content">
        
        <h1><?php echo $edition->title()->html() ?></h1>
        <time datetime="<?php echo $edition->date('c') ?>">
          <?php echo $edition->date('F, Y') ?>
        </time>
      </div>

      <div class="slide-progress"></div>

      <?php foreach($edition->children()->images() as $image): ?>

    <a href="<?php echo $image->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="">
    </a>

  <?php endforeach ?>
  

    </a>
  <?php endforeach ?>
</article>