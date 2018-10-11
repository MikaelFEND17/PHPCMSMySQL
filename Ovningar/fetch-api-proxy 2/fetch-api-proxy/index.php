<?php
require_once 'partials/head.php';
?>

<input type="text" id="age">

<form action="handle_form.php?name=Jesper" method="POST" id="example_form">
  <label for="username">Username</label>
  <input type="text" name="username" id="username">
  <label for="favorite_number">Favorite number</label>
  <input type="number" name="favorite_number" id="favorite_number">
  <input type="submit" value="Skicka">
</form>

<?php
require 'partials/footer.php';
?>