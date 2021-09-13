// require ('./interna');

$('.datalayer-webcam').click(function(event){
    var img = $(this).data('img');
    var title = $(this).data('text_action');
    var timestamp = new Date().getTime();
    var row = $(this).data('row');
    var imgWebcam = $('#webcam_img');
    var content   = $("#img-main");

    content.html(`<img id="webcam_img" class="img-fluid lazyload" src="${(img+"?t=" + timestamp)}" alt="${title}">`);

    //imgWebcam.attr('src',img+"?t=" + timestamp);



    $('#modalWebcams .modal-title').text(title);

    console.log(img,row);
});


window.dataLayer = window.dataLayer || [];
document.querySelectorAll('.datalayer-webcam').forEach( function (element) {
    element.addEventListener('click', function (event) {
        var text = event.currentTarget.dataset.text_action;
        window.dataLayer.push({
            'event' : 'click_webcam',
            'eventModel' : {
                'event_action' : text
            }
        })
    })
})