<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('descricao_seo'); ?>">
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('titulo_seo'); ?></title>

    <meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title('-'); ?><?php the_field('titulo_seo'); ?>
    
		<meta property="og:description" content="Advogados especializados em diversas areas"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>"/>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/script/script.js"></script> -->
</head>

<body>
  <!-- CABEÇALHO -->
  <header class="header container">
    <div>
      <img src="<?php the_field('logo_header'); ?>" alt="Logo da empresa">
    </div>
    <nav id="nav">
      <span id="btn-mobile"></span>
      <ul class="menu" id="menu">
        <li><a href="/">Home</a></li>
        <li><a href="#equipe">Equipe</a></li>
        <li><a href="#diferencial">Diferenciais</a></li>
        <li><a href="#atuacao">Atuação</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </nav>
  </header>