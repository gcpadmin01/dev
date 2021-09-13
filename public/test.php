<html>
<head>
    <title>{page_title}</title>
</head>
<body>

<div class="content-player">
    <div class="player"></div>
</div>

<script src="https://player.vimeo.com/api/player.js"></script>

<iframe src="https://player.vimeo.com/video/510732632" width="640" height="275" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

<div class="preview-vimeo" data-src = "https://player.vimeo.com/video/510732632">

</div>

<script>
    //var playerDiv = document.querySelector('.player');
    var playerDiv = document.querySelector('iframe');

    var player = new Vimeo.Player(playerDiv, {
        autoplay: true,
        controls: false,
        api:      true,
        loop:     true,
        muted:    true,
        width:    '536',
        height:    '298',
        autopause: true
    });

    player.on('play', function () {
        console.log('Played the video');
    });

    player.getVideoTitle().then(function (title) {
        console.log('title:', title);
    });
</script>

</body>
</html>