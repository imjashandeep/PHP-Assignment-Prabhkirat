<?php
include "db.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_FILES['image'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $image = $_FILES['image'];

  $image_name = time() . '.' . $image['name'];
  move_uploaded_file($image['tmp_name'], 'images/' . $image_name);

  $sql = "INSERT INTO users (name, email, image) VALUES ('$name', '$email', '$image_name')";
  mysqli_query($db, $sql);
}

header('Location: index.php');
?>
