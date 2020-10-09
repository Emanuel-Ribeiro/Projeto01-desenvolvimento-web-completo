<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Descriçao do meu website" >
  <meta name="keywords" content="palavras,chave,do,meu,site" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="styles/style.css">
  <script src="https://kit.fontawesome.com/d85bd54e53.js" crossorigin="anonymous"></script>
  <title>Projeto 01</title>
</head>
<body>

  <header>
    <div class="center">
      <div class="logo left">Logomarca</div><!--div logo-->
      <nav class="desktop right">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Sobre</a></li>
          <li><a href="">Serviços</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </nav>
      <nav class="mobile right">
        <div class="botao-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Sobre</a></li>
          <li><a href="">Serviços</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </nav>
    <div class="clear"></div><!--div clear-->
    </div><!--div center-->
  </header>

  <section class="banner-principal">
    <div class="overlay"></div><!--div overlay-->
    <div class="center">
      <form>
        <h2>Qual é o seu melhor e-mail?</h2>
        <input type="email" name="email" required>
        <input type="submit" name="acao" value="Cadastrar!">
      </form>
    </div><!--div center-->
  </section><!--banner principal-->

  <section class="descricao-autor">
    <div class="center">
    <div class="w50 left">
        <h2>Emanuel Ribeiro</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus. Nunc tempor, turpis non consequat ultrices, ipsum augue commodo mauris, eu tincidunt metus ipsum non arcu. Donec placerat nisl nisl, quis posuere leo maximus quis. Nulla hendrerit lacus lacus, in imperdiet libero bibendum ac.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus. Nunc tempor, turpis non consequat ultrices, ipsum augue commodo mauris, eu tincidunt metus ipsum non arcu. Donec placerat nisl nisl, quis posuere leo maximus quis. Nulla hendrerit lacus lacus, in imperdiet libero bibendum ac.</p>
    </div><!--div w50-->
    <div class="w50 left">
        <img class="right" src="images/foto.jpg">
    </div><!--div w50-->
    <div class="clear"></div><!--div clear-->
    </div><!--div center-->
  </section><!--descriçao-autor-->

  <section class="especialidades">
    <div class="center">
      <h2 class="title">Especialidades</h2>
      <div class="w33 left box-especialidade">
        <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
        <h3>CSS 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
      </div><!--div box-especialidade-->
      <div class="w33 left box-especialidade">
        <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
        <h3>HTML 5</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
      </div><!--div box-especialidade-->
      <div class="w33 left box-especialidade">
        <h3><i class="fab fa-php" aria-hidden="true"></i></h3>
        <h3>PHP</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
      </div><!--div box-especialidade-->
    </div><!--div center-->
  </section><!--section especialidades-->

  <section class="extras">

    <div class="center">
      <div class="w50 left">
        <h2 class="title">Certificados</h2>
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
          <p class="nome-autor">Titulo do certificado</p>
        </div><!--div depoimento-single-->
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
          <p class="nome-autor">Titulo do certificado</p>
        </div><!--div depoimento-single-->
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</p>
          <p class="nome-autor">Titulo do certificado</p>
        </div><!--div depoimento-single-->
      </div><!--div w50-->
      <div class="clear"></div><!--div clear-->
      <div class="w50 left">
        <h2 class="title">Serviços</h2>
        <div class="servicos">
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio metus. Mauris quis ligula non elit pulvinar sodales. Fusce hendrerit, felis at aliquet semper, nibh mi dignissim sapien, sit amet rhoncus urna tellus et lacus.</li>
          </ul>
        </div><!--div servicos-->
      </div><!--div w50-->
      <div class="clear"></div><!--div clear-->
    </div><!--div center-->
  </section><!--section extras-->

  <footer>
    <div class="center">
      <p>Todos os direitos reservados</p>
    </div><!--div center-->
  </footer>
  
</body>
</html>