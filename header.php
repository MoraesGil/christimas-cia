<?php
$pages = array();
$pages["home.php"] = "Home";
$pages["empresa.php"] = "Empresa";
$pages["portifolio.php"] = "Portfólio";
$pages["projetos.php"] = "Projetos";
$pages["clientes.php"] = "Clientes";
$pages["contato.php"] = "Contato";

$activePage = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <title>CIA DO NATAL</title>

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title">

  <!-- Important Owl stylesheet -->
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- Default Theme -->
  <link rel="stylesheet" href="css/owl.theme.css">

  <!--animate css-->
  <link rel="stylesheet" href="css/animate.css">
  <!--venobox css-->
  <link rel="stylesheet" href="css/venobox.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--JAVASCRIPT-->
  <script src="js/modernizr.js" type="text/javascript"></script>
  <!-- FONTES -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
</head>
<body>
  <!--MENU-->
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-natal navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="logo-brand" href="#">
            </a>
          </div>
          <div id="navbar" class=" navbar-natal navbar-collapse collapse">
            <ul class="nav navbar-nav text-center">
              <?php foreach($pages as $url=>$title):?>
                <li <?php echo $url == $activePage ? 'class="active"':"" ?>>
                  <a href="<?php echo $url;?>">
                    <?php echo $title;?>
                  </a>
                </li>
              <?php endforeach;?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
