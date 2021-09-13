require ('./interna');

var active = null;

$('.acordion-open').click(function(){
    var btn  = $(this),row  = $(this).data('row');
    var acrn = $(".acordion[data-row="+row+"]");

    if(acrn.hasClass('active')){
        btn.removeClass('btn-primary').addClass('btn-default');
        acrn.removeClass('active').css({"max-height":0});
    }else{
        btn.removeClass('btn-default').addClass('btn-primary');
        acrn.addClass('active').css({"max-height":acrn.find('p').height()+40});
    }
});