$(function()
{
  $('nav.mobile').click(function()
  {
    var listaMenu = $('nav.mobile ul');

    if(listaMenu.is(':hidden') == true){
      var icone = $('.botao-menu-mobile').find('i');
      icone.removeClass('fa-bars');
      icone.addClass('fa-times');
      listaMenu.slideToggle();
    }
    else{
      var icone = $('.botao-menu-mobile').find('i');
      icone.removeClass('fa-times');
      icone.addClass('fa-bars');
      listaMenu.slideToggle();
    }

  });

  if($('target').length > 0)
  {
    var elemento = '#'+$('target').attr('target');
    var divScroll = $(elemento).offset().top;

    $('html,body').animate({scrollTop:divScroll},2000);
  }

  carregarDinamico();
  function carregarDinamico()
  {
    $('[realtime]').click(function()
    {
      var pagina = $(this).attr('realtime');

      $('.container-principal').load('/Projeto01-desenvolvimento-web-completo/Projeto_01/pages/'+pagina+'.php');
      initialize();
      addMarker(-27.609959,-48.576585,'',"endereço",undefined,false);
      return false;
    })
  }

})