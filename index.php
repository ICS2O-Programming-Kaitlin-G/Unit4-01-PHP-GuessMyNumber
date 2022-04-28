<!DOCTYPE html>
<!-- ICS2O-Unit4-01-PHP-GuessMyNumber -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="There is so many numbers in the universe. this program will guess a number between 1-6 and perhaps you will get it. who knows.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Guess this number. Do it. Come on. It'll be fun.</title>
 
    <!-- These lines of code permit the visualization of the favicon, an element commonly employed in the creation of a website.  -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <?php 
    echo "<h1>Guess the number!!! Do it please. It will be fun.</h1>";
  ?>

  <!-- Description text about the website that describes things fun -->
  <?php
    echo "<p>Random numbers exist. Wow. Anyways, today we will be playing a sophisticated game that is my life's work and legacy. Thats right. I have spent my entire life up until this point coding this game. Thats why this is the best game you've ever seen. Shall we select some numbers now?</p>"
  ?>

  <!-- Javascript script lookup thing and also the form that will collect the user's random number guess -->
  <form action="./results.php" method="post" target="guess-results">
    <label for="user-guess">Make a guess between 1 to 6.</label>
    <input type="number" id="user-guess" placeholder="Guess" name="user-guess">
    <br>
    <br>
    <input type="submit" value="Submit Guess.">
    <br>
    <br>
  </form>

  <!-- this line of code will tell the user whether or not they have gotten their guess right -->
  <iframe id="guess-results" name="guess-results">
    Wow! the volume will now be shared :) " + $volume + cm<sup>3</sup>"
  </iframe>
</body>
</html>