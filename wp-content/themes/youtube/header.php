<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="fixed">

    <header class="header">
      <a href="#">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo.png" alt="YouTube Logo" class="youtube-logo" />
      </a>
      <form class="search-bar">
        <input class="search-input" type="search" placeholder="Search" aria-label="Search" />
        <button type="submit" class="search-btn">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/magnify.svg" />
        </button>
      </form>
      <div class="menu-icons">
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/video-plus.svg" alt="Upload Video" />
        </a>
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/apps.svg" alt="Apps" />
        </a>
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/bell.svg" alt="Notifications" />
        </a>
        <a href="#">
          <img class="menu-channel-icon" src="http:///unsplash.it/36/36?gravity=center" alt="Your Channel" />
        </a>
      </div>

    </header>
    <div class="categories">
      <section class="category-section">
        <button class="category active">All</button>
        <button class="category">Category 1</button>
        <button class="category">Category 2</button>
        <button class="category">Category 3</button>
        <button class="category">Category 4</button>
        <button class="category">Category 5</button>
        <button class="category">Category 6</button>
        <button class="category">Category 7</button>
        <button class="category">Category 8</button>
        <button class="category">Category 9</button>
      </section>
    </div>
  </div>