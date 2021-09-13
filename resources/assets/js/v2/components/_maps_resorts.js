import {observer} from './helper-observer';

var infowindow, markerResort, directionsService, directionsRenderer;
var maps       = {},elementMaps = [];
var marker     = null;
var ZOOM_START = 16;
var ASSET      = 'https://royalreservations.com/';
var icons = {
    "resort"  : {"url":ASSET+"/img/maps/resort.svg?v=0"},
    "resort-main"  : {"url":ASSET+"/img/maps/resort-main.svg?v=0"},
    "airport" : {"url":ASSET+"/img/maps/airport.svg"}
}

maps['marker'] = [];

/* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOHGOzkzJ3h5GSLybxxKp1lqq6S-ITl3Y&callback=initMap" async defer></script> */


var mapModal  = document.getElementById('maps-expanded');
var mapDivCrs = document.getElementById('maps');


var objMrk    = null;
var position  = null;
var location  = null;
var icon_pos  = null;
var temp      = null;

var mapCarrusel = null;
var mapPopup    = null;

var mapCarruselResort = null;

observer(mapModal,function(){
    if(typeof google != 'undefined'){
        initMapPopUp();
    }
});

var setInitMapValues = function(map){
    /** Definicion de marcadores */
    var objMarker = {"place_interesting":null,"position":null,"icon":{"labelOrigin":null},"visible":true,"animation": google.maps.Animation.DROP,"map":map,"title":"","label":"","text_temp":null};

    if(map){
        if(typeof directionsService == 'undefined' && typeof directionsRenderer == 'undefined'){
            /** Renderizacion y Api Direcction Service */
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({suppressMarkers:true,routeIndex:3});
            /** Define el pop de informacion */
            infowindow = new google.maps.InfoWindow({content: '<h1>PDL<h1/>'});
            /** Definicion de iconos */
            icons.regular = {"path":google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,"scale":5};
        }
    }
    
    return {directionsRenderer,directionsService,objMarker};
}


var initMapPopUp = function(){
    mapPopup = new google.maps.Map(document.getElementById('maps-expanded'), {
        zoom: 15,
        center:{lat:parseFloat(local[0]),lng:parseFloat(local[1])},
        styles:[{"featureType":"poi.attraction","stylers": [{"visibility": "off"}]},{"elementType": "labels.text.stroke","stylers": [{"color": "#ffffff"}]},{"featureType":"poi.business","stylers": [{"visibility": "off"}]},{"featureType":"poi.park","stylers": [{"visibility": "off"}]}]
    });
    
    var config = setInitMapValues(mapPopup);
    
    resortMainMarker(config);
    resortsMarkers(config);
}


var initMap = function() {
    observer(mapDivCrs,function(){
        if(typeof google != 'undefined'){
            mainMap();
        }
    });
}

window.initMap = initMap;

$('body').on('click','.position-map',function(event) {
   
    var point  = $(this).data("point");
    var markerSrch = searchMarker(point);

    if(marker != null && mapCarrusel.getZoom()>=ZOOM_START){
        marker.setVisible(false);
    }
    if(markerSrch!=null){
        searchRoute(markerSrch);
        marker.setVisible(true);
    }
});

var directionRoute = function(){
    var mapName = marker.getMap().getDiv().getAttribute('id');
    directionsService.route({
            origin      : mapCarruselResort.getPosition(),
            destination : marker.getPosition(),
            travelMode  : 'DRIVING'
        },
        function(response, status) {
            if (status === google.maps.DirectionsStatus.OK) {
                var dataRoute = "<strong>Distance:</strong>"+response.routes[0].legs[0].distance.text + " <strong>Duration:</strong>" + response.routes[0].legs[0].duration.text + " ";
                directionsRenderer.setMap(marker.getMap());
                directionsRenderer.setDirections(response);
                infowindow.setContent('<p style="margin-bottom:0px;text-align:center"><strong>'+marker.getTitle()+'</strong></p>'+dataRoute);
                infowindow.open(marker.getMap(),marker);
                visibilityMarkers(maps['marker'],false);
            }else if(status === google.maps.DirectionsStatus.ZERO_RESULTS){
                // window.alert('No route could be found between the origin and destination.');
            }else{
                window.alert('Directions request failed due to ' + status);
            }
    });
}

var searchRoute = function(markerSrch){
    markerSrch.getMap().setCenter(markerSrch.getPosition());
    marker = markerSrch;
    directionRoute();
}

var backMarker = function(mrk){
    var map = mrk.getMap();
    map.setCenter(mrk.getPosition());
    map.setZoom(16);
}

var setInfo = function(){
    infowindow.setContent(this.getTitle());
    infowindow.open(this.getMap(),this);
    marker = this;        

    var mapDiv = marker.getMap().getDiv().getAttribute('id');

    if(exlusionMarker(this.type_icon) && mapDiv != 'maps-destination'){
        directionRoute();
    }
}

var searchMarker = function(point){
    for(var mrk of maps['marker']){
        if(mrk.place_interesting == point)
            return mrk;
    }
    return null;
}

var getIcon = function(icon){
    if(typeof icons[icon] == 'undefined'){
        var img = ''
        switch(icon){
            case 'airport': img = icon+'.svg'; break;
            default: img = icon+'.png'; break;
        }
        return {"url":ASSET+'/img/maps/'+img};
    }
    else{
        return icons[icon];
    }
}

var visibilityMarkers = function(markers,show,exclusion){
    exclusion || (exclusion = false);
    for( var mrk of markers){
        if((marker != mrk || exclusion) && !exlusionMarker(mrk.type_icon) && mrk.place_interesting != null)
            mrk.setVisible(show);
    }
}

var exlusionMarker = function(type){
    var flag = false;
    switch(type){
        case 'resort': flag = true; break;
        case 'airport': flag = true; break;
    }
    return flag;
}

var resortMainMarker = function(config){
    var objMarkerResort = Object.assign({},config.objMarker);
    objMarkerResort.position   = {lat:parseFloat(local[0]),lng:parseFloat(local[1])};
    objMarkerResort.icon       = icons['resort-main'];
    objMarkerResort.label      = {"text":resort,"color":"#0c2d63","strokeColor":"#fff","fontSize":"15px","fontWeight":"bold"};
    objMarkerResort.text_temp  = resort;
    objMarkerResort.title      = resort;
    objMarkerResort.labelClass = "marker-resort";
    objMarkerResort.icon.labelOrigin = new google.maps.Point(30,-15);

    return new google.maps.Marker(objMarkerResort);
}

var resortsMarkers = function(config){
    for(var row of resorts){
        position = row.coordinates.split(',');
        location = {"lat":parseFloat(position[0]),"lng":parseFloat(position[1])};
        var objMrk   = Object.assign({},config.objMarker);
        objMrk.type_icon         = 'resort';
        objMrk.position          = location;
        objMrk.title             = row.name;
        objMrk.text_temp         = row.name;
        objMrk.icon              = getIcon('resort');
        objMrk.icon.labelOrigin  = new google.maps.Point(30,-15);
        var temp = new google.maps.Marker(objMrk);
        temp.addListener('click',setInfo);
        maps['marker'].push(temp);
    }
}

var mainMap = function(){
    mapCarrusel = new google.maps.Map(mapDivCrs, {
        zoom: 15,
        center:{lat:parseFloat(local[0]),lng:parseFloat(local[1])},
        styles:[{"featureType":"poi.attraction","stylers": [{"visibility": "off"}]},{"elementType": "labels.text.stroke","stylers": [{"color": "#ffffff"}]},{"featureType":"poi.business","stylers": [{"visibility": "off"}]},{"featureType":"poi.park","stylers": [{"visibility": "off"}]}]
    });

    var config = setInitMapValues(mapCarrusel);

    mapCarrusel.addListener('zoom_changed',function(){
        var elem = this.getDiv().getAttribute('id');
        var objMap  = maps[elem]['map'];
        for(row of maps['marker']){
            if(row.type_icon != 'resort' && (directionsRenderer.getMap() == null || elem != 'maps') && !exlusionMarker(row.type_icon)){
                row.setVisible(this.getZoom()>=ZOOM_START);
            }
        }
    });
    
    mapCarruselResort = resortMainMarker(config);
    resortsMarkers(config);
         
    for(var row of places){
        position = row.location.split(',');
        location = {"lat":parseFloat(position[0]),"lng":parseFloat(position[1])};
        icon_pos = row.label_position.split(',');
        var objMrk   = Object.assign({},config.objMarker);
        objMrk.type_icon         = row.type_icon;
        objMrk.place_interesting = row.id;
        objMrk.position          = location;
        objMrk.title             = row.name_en;
        objMrk.text_temp         = row.name_en;
        objMrk.icon              = getIcon(row.type_icon);
        objMrk.icon.labelOrigin  = new google.maps.Point(icon_pos[0],icon_pos[1]);
        
        if(!exlusionMarker(row.type_icon)){
            objMrk.visible         = false;
            objMrk.icon.scaledSize = new google.maps.Size(28,28);
        }
        
        var temp = new google.maps.Marker(objMrk);
        temp.addListener('click',setInfo);
        maps['marker'].push(temp);
    }
    
    infowindow.addListener("closeclick",function(){   
        if(!exlusionMarker(marker.type_icon) && directionsRenderer.getMap()!= null){   
            backMarker(mapCarruselResort);
        }
        directionsRenderer.setMap(null);
        visibilityMarkers(maps['marker'],marker.getMap().getZoom()>=ZOOM_START,true);
    });
}