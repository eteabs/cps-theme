<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo get_bloginfo( 'name' ); ?></title>

  <!-- CPS Front-end core CSS -->
  <link rel="stylesheet" href="http://adammacias.github.io/cps-frontend/assets/css/centropaulasouza.css">

  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <!-- CSS customizado -->
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/home.css">
  
</head>

<body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
        <div class="container">
            <span class="skiplink-text">Pular para o conteúdo</span>
        </div>
    </a>

    <header class="cps-header">
        <div class="container">
        <div class="logo-group">
        <div class="logo-group-item">
            <a class="logo logo-etec" href="#" title="Página Inicial" data-title="Baixada Santista" data-sub-title="Rubens Lara">
            <h1 class="sr-only">Fatec Baixada Santista - Rubens Lara</h1>
            </a>
        </div>
        <div class="logo-group-item">
            <a class="logo logo-cps" href="http://www.cps.sp.gov.br" title="Portal do Centro Paula Souza" target="_blank">
            <h2 class="sr-only">Centro Paula Souza</h2>
            </a>
        </div>
        <div class="logo-group-item">
            <a class="logo logo-governo-sp" href="http://www.saopaulo.sp.gov.br" title="Portal do Governo do estado de São Paulo" target="_blank">
            <span class="sr-only">Governo do Estado de São Paulo</span>
            </a>
        </div>
        </div>
    </div>
    </header>

    <nav class="cps-navbar" data-spy="affix" data-offset-top="140">
        <div class="container">
            <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapsed" aria-expanded="false" aria-controls="navbar-collapsed">
      <span class="sr-only">Alterar navegação</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="#">Fatec-RL</a>
    </div>
    <div id="navbar-collapsed" class="collapse navbar-collapse ">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu-left',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'primary_menu_fallback',
        ));?>

        <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu-right',
                'menu_class' => 'nav navbar-nav navbar-right',
        ));?>
    </div>
  </div>
</nav>