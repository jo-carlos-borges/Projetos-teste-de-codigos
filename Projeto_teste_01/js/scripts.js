$(function(){
    
    $('nav.mobile').click(function(){
        var listamenu = $('nav.mobile ul');
        listamenu.slideToggle();
    })

    if($('target').legth > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html.body').animate({scrollTop:divScroll},2000);
    }

    carregarDinamico();
    function carregarDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('relatime');
            $('.container-principal').load('/Projeto_01/pages/'+pagina+'.php');
            return false;
        })
    }

})