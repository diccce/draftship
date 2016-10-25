<div class="flex-grid cf">
  <?php foreach(page('collection')->children()->children()->visible() as $product): ?>

    <div class="col">

      <!--
      <h3><a href="<?php echo $product->url() ?>"><?php echo $product->title()->html() ?></a></h3>
      <p><?php echo $product->text()->excerpt(80) ?> <a href="<?php echo $product->url() ?>">read&nbsp;more&nbsp;→</a></p>
      -->

      <?php if($image = $product->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $product->url() ?>">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $product->title()->html() ?>" >
      </a>
      <?php endif ?>

    </div>

  <?php endforeach ?>
</div>