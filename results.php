<?php
  $user_guess = $_POST["user-guess"];
  $random_number = rand(1,6);
?>
<h5>Results:</h5>
<?php
  if ($user_guess == $random_number) {
    echo "You got it! Well done!";
  }
?>
<?php 
  if ($user_guess != $random_number) {
    echo "Your guess was incorrect. Try again.";
  }
?>