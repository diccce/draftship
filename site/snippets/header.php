<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> › <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">
  <link rel="icon" href="/assets/images/favicon.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/assets/images/apple-touch-icon-precomposed.png">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <header class="header cf" role="banner">
    <?php snippet('menu') ?>
  </header>