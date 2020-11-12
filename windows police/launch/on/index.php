<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Windows</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'><link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<?php
  include("../config/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM windows_settings_police');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>

<div class="desktop" style="background-image: url(<?php echo $data['fond_ecran']; ?>);">
  <a class="taskbar__item taskbar__item--calculatrice" href="#" data-window="calculatrice"><img class="icon" src="<?php echo $data['img_application_calculatrice']; ?>"></a><br>
  <a class="taskbar__item taskbar__item--lspdpanel" href="#" data-window="lspdpanel"><img class="icon" src="<?php echo $data['img_application_lspdpanel']; ?>"></a><br>
  <a class="taskbar__item taskbar__item--lspdrecrutement" href="#" data-window="lspdrecrutement"><img class="icon" src="<?php echo $data['img_application_lspdrecrutement']; ?>"></a><br>
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info menu-toggle" href="#" data-menu="user">
        <img class="user-info__img media__img" src="<?php echo $data['user_img_menu_windows']; ?>">
        <div class="user-info__name media__body">
        <?php echo $data['nom_utilisateur_menu_windows']; ?>
        </div>
        </a>
        <a class="user-info__power menu-toggle" href="#" data-menu="power">
          <i class="fa fa-power-off"></i>
          
        </a>
      </div>
      
      <div class="menu" data-menu="power">
            <a href="../../"><?php echo $data['redemarrer_menu_windows']; ?></a>
          </div>
      

      <ul class="start-menu__recent">
        <li class="start-menu__explorer">
          <a href="#" data-window="explorer">
            <i class="fa fa-folder"></i>
            <?php echo $data['explorateur_fichiers_menu_windows']; ?>
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#" data-window="notepad">
            <i class="fa fa-pencil"></i>
            <?php echo $data['bloc_note_menu_windows']; ?>
          </a>
        </li>
        <li class="start-menu__explorer">
          <a href="#">
            <i class="fa fa-lock"></i>
            XLife.exe
          </a>
        </li>
      </ul>
      
      <a class="all-apps" href="#">
      <?php echo $data['toutes_applications_menu_windows']; ?>
        <i class="fa fa-arrow-right"></i>
      </a>
      <form class="search">
      <input type="text" class="search__input" placeholder="<?php echo $data['barre_recherche_menu_windows']; ?>">
      <button class="search__btn">
        </button>
      </form>
    </div>
    <div class="start-screen-scroll">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#" data-window="explorer">
        <i class="fa fa-folder"></i>
        <span><?php echo $data['icon_explorateur_fichiers_menu_windows']; ?></span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#"  data-ss-colspan="2">
      </a>
      <div class="start-screen__smallgroup masonry-item">
      <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
      </div>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start" href="#" data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
      <i class="fa fa-folder"></i>
    </a>
    <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
      <i class="fa fa-pencil"></i>
    </a>
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  
  <div class="window window--explorer window--minimized" data-window="explorer" style="width:670px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
      <?php echo $data['explorateur_fichiers_application']; ?>
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__actions">
      <a class="window__back" href="#">
        <i class="fa fa-arrow-left"></i>
      </a>
      <a class="window__forward" href="#">
        <i class="fa fa-arrow-right"></i>
      </a>
      <div class="window__path">
        <a href="#">
        <i class="fa fa-desktop"></i>
        Desktop
        </a>
      </div>
      <form class="search">
        <input type="text" class="search__input" placeholder="Search files and folders">
        <button class="search__btn">
        </button>
      </form>
    </div>
    
    <div class="window__body">
      
      <div class="window__side">
        
        <ul class="side__list">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#">Favorites</a>
            <ul>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Recent Places</a></li>
          </ul>
        </li>
          <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
                  <li>
                    <a href="#">Folder 1</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
        </ul>
      </div>
      <div class="window__main">
        <div class="folders">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 1</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 2</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 3</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 4</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 5</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 6</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
        </div>
      </div>
    </div>
    
  </div>
  <div class="panel">
    <img src="img/panel.png" alt="">
  </div>
    
  <div class="window window--notepad" data-window="notepad" style="display:none;width:600px;height:300px;top:10%;left:30%;">
     <div class="window__titlebar">
       <div class="window__controls window__controls--left">
         <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
         <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
       </div>
       
       
       
       <span class="window__title">
       <?php echo $data['bloc_note_application']; ?>
       </span>
       
       <div class="window__controls window__controls--right">
         <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
         <a class="window__maximize" href="#"><i class="fa"></i></a>
         <a class="window__close" href="#"><i class="fa fa-close"></i></a>
       </div>
     </div>
     
     <ul class="window__menu">
         <li>
           <a href="#">
             <i class="menu__icon fa fa-download"></i>
             Save
           </a>
         </li>
         <li>
           <a href="#">
             <i class="menu__icon fa fa-folder-open"></i>
             Open
           </a>
         </li>
         <li>
           <a href="#">
             <i class="menu__icon fa fa-print"></i>
             Print
           </a>
         </li>
       <li>
           <a href="#">
             <i class="menu__icon fa fa-share-alt"></i>
             Share
           </a>
         </li>
       
         <li class="divided">
           <a href="#">
             <i class="menu__icon fa fa-file"></i>
             Format
           </a>
       </li>
       <li>
           <a href="#">
             <i class="menu__icon fa fa-cog"></i>
             Settings
         </a>
       </li>
    </ul>
     
     <div class="window__body">
       <div class="window__main">
         <textarea class="full-textarea"></textarea>
       </div>
     </div>
     
   </div>
   
   <?php
    }
    $reponse->closeCursor(); // Complete query ?>


    
<div class="window window--calculatrice" data-window="calculatrice" style="display:none;width:357px;height:595px;top:10%;left:30%;">
   <div class="window__titlebar">
     <div class="window__controls window__controls--left">
       <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
       <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
     </div>
     
     
     
<?php
include("../config/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM calculatrice');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
     <span class="window__title">
     <?php echo $data['titre']; ?>
     </span>

<?php
}
$reponse->closeCursor(); // Complete query ?>
     
     <div class="window__controls window__controls--right">
       <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
       <a class="window__maximize" href="#"><i class="fa"></i></a>
       <a class="window__close" href="#"><i class="fa fa-close"></i></a>
     </div>
   </div>
   
   <div class="window__body">
     <div class="window__main">
<?php
  include("../config/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM windows_settings_police');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>
       <iframe src="<?php echo $data['url_windows']; ?>/modules/calculatrice" style="width:100%;height:100%;border: none;"></iframe>
<?php } $reponse->closeCursor(); ?>
     </div>
   </div>
   
 </div>



    
    
<div class="window window--lspdpanel" data-window="lspdpanel" style="display:none;width:1200px;height:800px;top:10%;left:30%;">
   <div class="window__titlebar">
     <div class="window__controls window__controls--left">
       <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
       <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
     </div>
     
     
     
<?php
include("../config/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM lspdpanel');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
     <span class="window__title">
     <?php echo $data['titre']; ?>
     </span>

<?php
}
$reponse->closeCursor(); // Complete query ?>
     
     <div class="window__controls window__controls--right">
       <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
       <a class="window__maximize" href="#"><i class="fa"></i></a>
       <a class="window__close" href="#"><i class="fa fa-close"></i></a>
     </div>
   </div>
   
   <div class="window__body">
     <div class="window__main">
<?php
  include("../config/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM windows_settings_police');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>
       <iframe src="<?php echo $data['url_windows']; ?>/modules/lspdpanel" style="width:100%;height:100%;border: none;"></iframe>
<?php } $reponse->closeCursor(); ?>
     </div>
   </div>
   
 </div>



    
    
<div class="window window--lspdrecrutement" data-window="lspdrecrutement" style="display:none;width:1200px;height:800px;top:10%;left:30%;">
   <div class="window__titlebar">
     <div class="window__controls window__controls--left">
       <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
       <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
     </div>
     
     
     
<?php
include("../config/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM lspdrecrutement');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
     <span class="window__title">
     <?php echo $data['titre']; ?>
     </span>

<?php
}
$reponse->closeCursor(); // Complete query ?>
     
     <div class="window__controls window__controls--right">
       <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
       <a class="window__maximize" href="#"><i class="fa"></i></a>
       <a class="window__close" href="#"><i class="fa fa-close"></i></a>
     </div>
   </div>
   
   <div class="window__body">
     <div class="window__main">
<?php
  include("../config/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM windows_settings_police');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>
       <iframe src="<?php echo $data['url_windows']; ?>/modules/lspdrecrutement" style="width:100%;height:100%;border: none;"></iframe>
<?php } $reponse->closeCursor(); ?>
     </div>
   </div>
   
 </div>
     
    
    
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'></script><script  src="./script.js"></script>

</body>
</html>
