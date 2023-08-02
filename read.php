<?php
include "db.php";

$sql = "SELECT * FROM users";
$results = mysqli_query($db, $sql);

while ($row = mysqli_fetch_assoc($results)) {
  echo '<tr>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['email'] . '</td>';
  echo '<td><img src="images/' . $row['image'] . '" width="100"></td>';
  echo '</tr>';
}
