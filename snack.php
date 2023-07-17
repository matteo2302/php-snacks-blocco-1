<?php
$champion=[
  [
    'home' => 'Milan',
    'challenger' => 'Inter',
    'home-point' => 3,
    'challenger-point' => 7,
  ], 
  [
    'home' => 'Roma',
    'challenger' => 'Napoli',
    'home-point' => 2,
    'challenger-point' => 6,
  ], 
  [
    'home' => 'Liverpool',
    'challenger' => 'Genoa',
    'home-point' => 8,
    'challenger-point' => 0,
  ], 
  [
    'home' => 'Real',
    'challenger' => 'Inter',
    'home-point' => 6,
    'challenger-point' => 4,
  ], 
  [
    'home' => 'Milan',
    'challenger' => 'Napoli',
    'home-point' => 2,
    'challenger-point' => 4,
  ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Snack</title>
</head>
<body>
  <ul>
    <? foreach($champion as $match):?>
    <li><?= $match['home']?> - <?= $match['challenger']?> | <?= $match['home-point']?>-<?= $match['challenger-point']?></li>
    <? endforeach?>
  </ul>
  <form action="form-result.php">
<label for="exampleInputEmail1" class="form-label">nome</label>
<input type="text"class="form-control w-25" name="nome">
<label for="exampleInputEmail1" class="form-label">Email</label>
<input type="text"  class="form-control w-25" name="email">
<label for="exampleInputEmail1" class="form-label">Età</label>
<input type="number" id="inputPassword5" class="form-control w-25" name="number">
<button type="submit">verify</button>
</form>
</body>
</html>