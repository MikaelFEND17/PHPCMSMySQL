<?php
require_once 'partials/head.php';
?>

<form action="handle_form.php?name=Jesper" method="POST" id="example_form">
  <label for="username">Username</label>
  <input type="text" name="username" id="username">
  <label for="favorite_number">Favorite number</label>
  <input type="number" name="favorite_number" id="favorite_number">
  <input type="submit" value="Skicka">
</form>

<?php

if (isset($_GET["username"])) {
    echo $_GET["username"];
}
echo '<br/>';
if (isset($_GET["favorite_number"])) {
    echo $_GET["favorite_number"];
}

//Ternary operator
//Null coalescing operator
echo $_GET["username"] ?? "";

require 'partials/footer.php';
?>