import LazyLoad from './components/lazyload';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/modal';

var prevRatio = 0.0;

var images = document.querySelectorAll(".lazyload");

new LazyLoad(images,{
    rootMargin : '200px'
});

function handleIntersect(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
        $('#myModal').modal();
        observer.unobserve(document.querySelector("#open-modal"));
    }
  });
}

$(document).ready(function () {
    var observer  = null;   
    var options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.2
    };
    var boxElement = document.querySelector("#open-modal");
    observer = new IntersectionObserver(handleIntersect, options);
    observer.observe(boxElement);
});