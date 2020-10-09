$(function()
{
  $('nav.mobile').click(function()
  {
    var listaMenu = $('nav.mobile ul');

    listaMenu.slideToggle();

    /* jeito burro
    if(listaMenu.is(':hidden') == true)
      listaMenu.fadeIn();
    else
      listaMenu.fadeOut();
    */
  })
})