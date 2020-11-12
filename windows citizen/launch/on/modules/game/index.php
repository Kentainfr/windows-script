<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Game</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php
      include("../../../config/config.php");
      // Get contents of the lspd table
      $reponse = $bdd->query('SELECT * FROM game');
      
      // Display each entry one by one
      while ($data = $reponse->fetch()) {
      ?>
<a href=""><h2><?php echo $data['refresh']; ?></h2></a>
   <?php
    }
    $reponse->closeCursor(); // Complete query ?>
<script  src="./script.js"></script>

</body>
</html>
