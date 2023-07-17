<?php
$name = $_GET['nome'];
$email = $_GET['email'];
$number = $_GET['number'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?if ( $name > 3 && str_contains($email,'@.')): ?>
  <p>succed</p> 
  <? else: ?>
  <p>error</p>
  <? endif ?>
</body>
</html>