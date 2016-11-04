<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <title>CIA DO NATAL</title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/animate.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title">

  <!-- Important Owl stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/owl.carousel.css">

  <!-- Default Theme -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/owl.theme.css">

  <!--animate css-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css">
  <!--venobox css-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/venobox.css">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--JAVASCRIPT-->
  <script src="<?php bloginfo('template_directory');?>/js/modernizr.js" type="text/javascript"></script>
  <!-- FONTES -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
  <?php wp_head(); ?>
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

              <?php
              $pages = array();
              $pages["/"] = "Home";
              $pages["empresa/"] = "Empresa";
              $pages["portfolio/"] = "Portfólio";
              $pages["projetos/"] = "Projetos";
              $pages["clientes/"] = "Clientes";
              $pages["contato/"] = "Contato";

              $activePage = basename($_SERVER['PHP_SELF']);

              ?>


              <?php foreach($pages as $url=>$title):?>
                <li <?php echo $url == $activePage ? 'class="active"':"" ?>>
                  <a href="<?php echo $url;?>" <?php echo $url == 'contato.php' ? 'class="contatoLink"':"" ?>>
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
