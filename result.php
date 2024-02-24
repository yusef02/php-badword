<?php

$user_string = $_GET['stringa'];
$user_censura = $_GET['censura'];

$user_string_len = strlen($user_string);
$user_string_censurata = str_replace($user_censura,'***',$user_string);
$user_string_censurata_len = strlen($user_string_censurata);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>la stringa inserita è <?= $user_string?> di lungezza pari a <?= $user_string_len?></p>
<p>la parola censurata è <?= $user_string_censurata?> di lungezza pari a <?= $user_string_censurata_len?></p>
</body>
</html>