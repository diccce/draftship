<?php foreach(page('collection')->children()->visible()->flip() as $edition): ?>
  <article class="gallery-collection scene_element scene_element--fadeindown cf">
    <a class="gallery-item" href="<?php echo $edition->url() ?>">
      <div class="gallery-item-content">
        
        <h1><?php echo $edition->title()->html() ?></h1>
        <time datetime="<?php echo $edition->date('c') ?>">
          <?php echo $edition->date('F, Y') ?>
        </time>
      </div>
  
      <?php if($image = $edition->images()->sortBy('sort', 'asc')->first()): ?>
        <figure class="gallery-image" style="background-image: url('<?php echo $image->url() ?>');"></figure>
      <?php endif ?>
    </a>
  </article>
<?php endforeach ?>