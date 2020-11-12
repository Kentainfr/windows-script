<?php
session_start();

include( "config/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passconnect = sha1($_POST['passconnect']);
   if(!empty($usernameconnect) AND !empty($passconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users_police WHERE username = ? AND pass = ?");
      $requser->execute(array($usernameconnect, $passconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: on/index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Username or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login windows police</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont">
  <div class="demo">
    <div class="login">
      <center><div><div class="space"><img src="img/logo.png" width="200"></div></center>
                <form method="POST" action="">
      <div class="login__form">
                        <?php
         if(isset($erreur)) {
            echo '<font color="red" size="3">'.$erreur."</font>";
         }
         ?>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" name="usernameconnect" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="passconnect" placeholder="Password"/>
        </div>
                        <button type="submit" name="formconnexion" class="login__submit">Login</button>
      </div>
                </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
