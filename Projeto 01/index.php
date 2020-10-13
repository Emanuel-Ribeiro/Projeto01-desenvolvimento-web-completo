<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Descriçao do meu website" >
  <meta name="keywords" content="palavras,chave,do,meu,site" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/style.css">
  <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
  <script src="https://kit.fontawesome.com/d85bd54e53.js" crossorigin="anonymous"></script>
  <title>Projeto 01</title>
</head>
<body>

  <?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    switch ($url) 
    {
      case 'sobre':
        echo '<target target="sobre"/>';
        break;
      
      case 'servicos':
        echo '<target target="servicos"/>';
        break;
    }

  ?>

  <header>
    <div class="center">
      <div class="logo left"><a href="/Projeto01-desenvolvimento-web-completo/Projeto%2001/">Logomarca</a></div><!--div logo-->
      <nav class="desktop right">
        <ul>
          <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
        </ul>
      </nav>
      <nav class="mobile right">
        <div class="botao-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <ul>
          <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
        </ul>
      </nav>
    <div class="clear"></div><!--div clear-->
    </div><!--div center-->
  </header>

  <?php

    if(file_exists('pages/'.$url.'.php'))
    {
      include('pages/'.$url.'.php');
    }
    else
    {
      if($url != 'sobre' && $url != 'servicos')
      {
        $pagina404 = true;
        include('pages/404.php');
      }
      else
      {
        include('pages/home.php');
      }
    }

  ?>

  <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?> >
    <div class="center">
      <p>Todos os direitos reservados</p>
    </div><!--div center-->
  </footer>

  <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyClUgvwkt87ZiZuaNLzxJvQLatJLzFOkDA"></script>
  <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
  
</body>
</html>