<?php

$user_string = $_GET['stringa'];
$user_censura = $_GET['censura'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>la stringa inserita è <?= $user_string?></p>
<p>la parola censurata è <?= $user_censura?></p>
</body>
</html>