<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="title icon" href="images/title-img.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <title>LSPD - Client</title>
</head>
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
  <!------Tables--->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 ml-auto">
          <div class="row">
            <div class="col-12">
              <div class="text-center">
                <h1 class="title-header">News</h1>
              </div>
              ';
include("inc/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM news ORDER BY id DESC');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
              <div class="box">
                <p class="title"><?php echo $data['title']; ?></p>
                <p class="description"><?php echo $data['description']; ?></p>
                <p class="date"><?php echo $data['date']; ?></p>
              </div>
                                                <?php
    }
    $reponse->closeCursor(); // Complete query
    echo '

            </div>
        </div>
      </div>
    </div>
  </section>
  <!------End of Activities & Posts--->
  '; include 'inc/footer.php'; echo '





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>';
} else {
    header("Location: ../index.php");
}
?> </html>
