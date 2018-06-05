<?php
$filename = "taskFile.json";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  echo "Post!";
}
// else($_SERVER['REQUEST_METHOD'] === 'DELETE'){

// }
// else($_SERVER['REQUEST_METHOD'] === 'UPDATE'){

// }

$posts = file($dataFile, FILE_IGNORE_NEW_LINES);


?>