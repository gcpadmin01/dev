var markers = [];
var map,marker = null,initPos=null;
var infowindow;
var labelResort = {"text":null,"color":"#0c2d63","strokeColor":"#fff","fontSize":"15px","fontWeight":"bold"};
var ASSET = 'https://royalreservations.com';
var icon  = ASSET+"/img/maps/resort.svg?v=0";

var initMap = function() {
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();

    initPos = {lat:parseFloat(center[0]),lng:parseFloat(center[1])};

    map = new google.maps.Map(document.getElementById('maps'), {
        zoom: 10,
        center:initPos,
        styles:[{"featureType":"poi.attraction","stylers": [{"visibility": "off"}]},{"featureType":"poi.business","stylers": [{"visibility": "off"}]},{"featureType":"poi.park","stylers": [{"visibility": "off"}]}]
    });

    map.addListener('zoom_changed',function(e){
        for(var row of markers){
            labelResort.text = row.getTitle();
            if(map.getZoom() >= 16)
                row.setLabel(labelResort);
            else
                row.setLabel(null);
        }
    })

    infowindow = new google.maps.InfoWindow({content: '<h1>PDL<h1/>'});

    infowindow.addListener("closeclick",backZoom);

    var objMarkerResort = {"resort":null,"position":null,"icon":{"labelOrigin":null},"animation": google.maps.Animation.DROP,"map":map,"title":"","label":""}

    if(resorts.length > 0){
        for(var row of resorts){
            var position = row.coordinates.split(',');
            var location = {"lat":parseFloat(position[0]),"lng":parseFloat(position[1])};

            objMarkerResort.resort   = row.id;
            objMarkerResort.position = location;
            objMarkerResort.title    = row.name;
            objMarkerResort.icon.url = icon;
            objMarkerResort.icon.alt = row.name;
            objMarkerResort.icon.labelOrigin  = new google.maps.Point(30,-15);
            var temp = new google.maps.Marker(objMarkerResort);
            temp.addListener("click",showInfo);
            markers.push(temp);
        }
    }
}

var showInfo = function(){
    map.setZoom(16);
    map.setCenter(this.getPosition());
    this.setLabel(null);
    infowindow.setContent("<strong>"+this.getTitle()+"</strong>");
    infowindow.open(map,this);
    marker = this;
}

var backZoom = function(){
    map.setZoom(10);
    map.setCenter(initPos);
}

window.initMap = initMap;