<!--
    1. Este pedazo de codigo es para colocar un video que esta en un servidor personal(no youtube o vimeo)
    solo se deberia indicar la ruta del recurso en src.
    <div class="index-video-wrapper">
        <source src="https://ohmarketing.nyc3.digitaloceanspaces.com/hacemos-de-tu-marca-una-experiencia-de-viaje-oh.mp4" type="video/mp4">
            <video autoplay loop id="index-video">
        </video>
    </div>
    2. Este codigo ejemplifica como se veria la etiqueta html para el video embebido de vimeo
    sustituir el de abajo segun necesidades o establecer una logica de impresion en algun controlador.
    
    <div id="player" data-plyr-provider="vimeo" data-plyr-embed-id="76979871"> </div>

    -->

<!--video de youtube indicar el id en data-plyr-embed-id  si se desea color un video de vimeo
 cambiar data-plyr-provider de youtube a vimeo su correspondiente id -->

<div class="desk-video" style="position: relative; overflow: hidden; z-index:9;">
	<div id="player" data-plyr-provider="{{ __('destinations/'.$destino.'.video.provider') }}" data-plyr-embed-id="{{ __('destinations/'.$destino.'.video.src') }}"></div>
	<div class="circulo" style="background: #434343;"></div>
	<div class="circulo-p"></div>
</div>
<div class="movil-video" style="position: relative; overflow: hidden; z-index:9; height:300px">
	<div class="circulo" style="background: #434343;"></div>
	<div class="circulo-p"></div>
</div>