<?php
$champion:[
  [
    'home' => 'Milan',
    'challenger' => 'inter',
    'home-point' => 3,
    'challenger-point' => 7,
  ]; [
    'home' => 'Roma',
    'challenger' => 'Napoli',
    'home-point' => 2,
    'challenger-point' => 6,
  ]; [
    'home' => 'Liverpool',
    'challenger' => 'Genoa',
    'home-point' => 8,
    'challenger-point' => 0,
  ]; [
    'home' => 'Real',
    'challenger' => 'inter',
    'home-point' => 6,
    'challenger-point' => 4,
  ]; [
    'home' => 'Milan',
    'challenger' => 'Napoli',
    'home-point' => 2,
    'challenger-point' => 4,
  ];
];
echo 'chiao';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack</title>
</head>
<body>
  <ul>
    <? foreach($champion as $match):?>
    <li></li>
    <? endforeach?>
  </ul>
</body>
</html>