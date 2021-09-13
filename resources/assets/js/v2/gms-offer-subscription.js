import 'bootstrap/js/dist/modal';
import {observer} from './components/helper-observer';

var tag = document.createElement('script');
tag.id  = 'iframe-demo';
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var loadFinish = false;

// $(document).ready(function(){
//     var contain_video = document.getElementById('video-resp');
//     var video = document.getElementById('gms-video');
//     console.log(contain_video);
    
//     var playerCtrl;

//     window.onYouTubeIframeAPIReady  = function(){
//         playerCtrl = new YT.Player('gms-video', {
//             height: '252',
//             width: '753',
//             videoId: '49Xm2im1wXA',
//             host: 'https://www.youtube.com',
//             playerVars: {
//                 'autoplay':1,
//                 'controls':1,
//                 'loop':1,
//                 'mute':1,
//                 'playlist':'49Xm2im1wXA'
//             },
//             events: {
//                 'onReady': onPlayerReady,
//                 'onStateChange': onPlayerStateChange
//             }
//         });
//     }

//     window.onPlayerReady = function(event){
//         //event affter charge;
//     }
    
//     window.onPlayerStateChange = function(event) {
//         console.log(YT.PlayerState.PLAYING);
//         console.log("onPlayerStateChange", event.data);
//         console.log(loadFinish);
//         if (event.data === YT.PlayerState.PLAYING && loadFinish == false) {
//             event.target.stopVideo();
//             loadFinish = true;
//         }
//         if (event.data === YT.PlayerState.PLAYING && loadFinish == true) {
//             event.target.unMute();
//         }

//     }
    
//     observer(contain_video,function(){
//         if(typeof playerCtrl != 'undefined'){
//             console.log(playerCtrl);
//             playerCtrl.playVideo();
//         }else{
//             loadFinish = true;
//         }
//     });

// })
