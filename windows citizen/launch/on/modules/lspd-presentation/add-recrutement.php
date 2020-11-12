<?php
// Calls for the config file
include( "../../../config/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO lspd_recrutement (nom, discord_id, candidature) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['discord_id'], $_POST['candidature']));

// Redirect user back to the add criminal page
header('Location: success.php');

?>