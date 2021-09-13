import 'owl.carousel';

$('.owl-carousel-init').owlCarousel({
    stagePadding: 1,
    items: 1,
    loop:false,
    autoplay:false,
    margin:5,
    nav:true,
    video:true,
    merge:true,
    center:true,
    dots:true,
});
$('.contain-img-gallery').owlCarousel({
    stagePadding: 1,
    items: 1,
    loop:true,
    autoplay:false,
    margin:5,
    nav:true,
    video:true,
    merge:true,
    center:true,
    dots:true,
    navText : ["<span></span>","<span></span>"]
});


$('.item img').click(function(){
    var nameImg = ($(this).attr('src'));
    nameImg = nameImg.split('/');
    nameImg = nameImg[(nameImg.length - 1)];
    var index = 1;
    index = (nameImg.match(/\d+/))[0];

    $('.contain-img-gallery').trigger('to.owl.carousel',(index-1));

});