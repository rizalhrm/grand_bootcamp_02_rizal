<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/foto.png">
    <title>Jawaban Seleksi Arkademy Grand Bootcamp Batch 2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body style="background-color:white;">
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:white;" href="index.php">Arkademy</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a style="color:white;" href="soal1.php" target="_blank">Soal 1</a></li>
            <li><a style="color:white;" href="index.php?page=soal2">Soal 2</a></li>
            <li><a style="color:white;" href="index.php?page=soal3">Soal 3</a></li>
            <li><a style="color:white;" href="index.php?page=soal4">Soal 4</a></li>
            <li><a style="color:white;" href="index.php?page=soal5">Soal 5</a></li>
            <li><a style="color:white;" href="index.php?page=soal6">Soal 6</a></li>
            <li><a style="color:white;" href="index.php?page=soal7">Soal 7</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    <div class="container">

      <div class="row">

        <div class="col-md-12">
          <?php 
            switch ((isset($_GET['page']) ? $_GET['page'] : '')) {
              case 'soal2':
              include "soal2.php";
               break;
              case 'soal3':
                include "soal3.php";
                break;
              case 'soal4':
                include "soal4.php";
                break;
              case 'soal5':
                include "soal5.php";
                break;
              case 'soal6':
                include "soal6.html";
                break;
              case 'soal7':
                include "soal7.php";
                break;
              default:
                include "home.php";
                break;
            }
          ?>
         
        </div><!--/.col-xs-12.col-sm-9-->

    </div><!--/.container-->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>