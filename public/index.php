<?php

include('../source/data.php'); // Adjust the path based on your directory structure
?>

<html>
  <head>
    <title>Awes Library</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>

  <body>
    <nav class="nav">
      <ul>
        <li class="items">Home</li>
        <li class="items">Menu</li>
        <li class="items">Genres</li>
        <li class="items">Contact</li>
        <li class="search-container">
                <input type="text" id="artistSearch" placeholder="Search for an artist...">
                <button id="searchButton">Search</button>
            </li>
      </ul>
    </nav>

    <article class="container">
      <?php
            include('../source/config.php');
        foreach ($library as $artist) {
            include('../source/views/card.php');
        }
        ?>
    </article>
  </body>
</html>
