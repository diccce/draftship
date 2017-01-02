<div class="flex-grid cf">
  <?php foreach(page()->children()->visible() as $product): ?>

    <div class="col">

      <?php if($image = $product->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $product->link() ?>" target="_blank">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $product->title()->html() ?>" >
      </a>
      <?php endif ?>

      <span class="col-text">
      <a href="<?php echo $product->link() ?>" target="_blank">
        <h3><?php echo $product->title()->html() ?></h3>
        <p><?php echo $product->design() ?></p>
      </a>
      </span>

    </div>

  <?php endforeach ?>
</div>