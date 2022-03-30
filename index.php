<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title="Random number generator web app";
  require('functions.php');
  
  // if($_SERVER['REQUEST_METHOD'] == 'GET'){
  //   
  // }
  $total = 0;
 if(isset($_GET['dice'])){
  get_number($_GET['dice'],$_GET['side']);
 
  // for($i= 0; $i < $_GET['dice'];$i++){
  //   $total += rand(1,$_GET['side']);
  // }
  // $total;
 }
   ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>
<form action="" method="get">
  Dice <input type="number" name="dice" id="dice" value="1"><br />
  Sides <select name="side" id="side">
    <option value="4">D4</option>
    <option value="6" selected>D6</option>
    <option value="8">D8</option>
    <option value="10">D10</option>
    <option value="12">D12</option>
    <option value="20">D20</option>
  </select>
  <input type="submit" value="Start" onclick="on_submit()">
  
</form>
<div class="total">
<?= $total ?>
</div>
</body>
</html>