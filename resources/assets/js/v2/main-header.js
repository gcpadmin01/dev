import ResizeObserver from 'resize-observer-polyfill';
require('intersection-observer');
require('./components/modernizr-custom');

(function () {
    window.webp = true;
    Modernizr.on('webp', function(result) {
        if (!result){
            document.querySelector('body').classList.remove('webp');
            window.webp = false;
        }
    });


    var header = document.querySelector('header');
    var staticTop = document.querySelector('.static-top');
    var navPrimary = document.querySelector('.nav-primary');
    var labelPhone = document.querySelector('.nav-primary .label-phone');
    
    //========================================================================
    // Evento para el cintillo que se muestra en el header
    //========================================================================
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = function (callback, thisArg) {
            thisArg = thisArg || window;
            for (var i = 0; i < this.length; i++) {
                callback.call(thisArg, this[i], i, this);
            }
        };
    }

    
    //function mobileContentMenu() {
    //    staticTop.querySelectorAll('.dropdown-menu').forEach( element => {
    //        element.style.paddingTop  = staticTop.offsetHeight+"px";
    //    });
    //}
    function moveCallDiv() {
        if(staticTop.classList.contains('desktop')){

            if(staticTop.classList.contains('scroll')){
                if(staticTop.querySelector('.nav-blue #nav-call') != null){
                    staticTop.querySelector('.nav-primary .phone-call-li').append(staticTop.querySelector('.nav-blue #nav-call'));
                }
            }else{
                if(staticTop.querySelector('.nav-primary #nav-call') != null){
                    staticTop.querySelector('.nav-blue .phone-call-li').append(staticTop.querySelector('.nav-primary #nav-call'));
                }
            }

            

        }else{
            if(staticTop.querySelector('.nav-blue #nav-call') != null){
                staticTop.querySelector('.nav-primary .phone-call-li').append(staticTop.querySelector('.nav-blue #nav-call'));
            }
        }
    }

    function checkScroll() {
        var dif = staticTop.offsetHeight - window.scrollY;
        var height = staticTop.offsetHeight; // - navPrimary.offsetHeight 
        if(dif >= - 2){
            staticTop.classList.remove('scroll');
        }else {
            staticTop.classList.add('scroll');
        }
                
        if(staticTop.classList.contains('desktop')){
            height = staticTop.offsetHeight - navPrimary.offsetHeight;
            if (staticTop.classList.contains('no-overlay')){
                height = staticTop.offsetHeight;
            }
        }

        header.style.height = height + 'px' ;
        moveCallDiv();
    }

    var resizeObserver = new ResizeObserver(entries => {
        for (let entry of entries) {

            if(entry.contentRect.width >= 500){
                entry.target.classList.add('tablet-500');
            }else{
                entry.target.classList.remove('tablet-500');
            }

            if(entry.contentRect.width >= 835){
                entry.target.classList.add('desktop');
                staticTop.querySelectorAll('.dropdown-menu-p').forEach( element => {
                    element.style.removeProperty('padding-top');
                });

                staticTop.querySelectorAll("[data-title]").forEach ( element => {
                    element.innerHTML = element.dataset.badge + element.dataset.title;
                });
                
                //if(staticTop.querySelector('.nav-movil .resorts-vacations') != null){
                    if(staticTop.querySelector('.nav-movil .resorts-vacations') != null){
                        staticTop.querySelector('.nav-primary > .nav ').append(staticTop.querySelector('.nav-movil .resorts-vacations'));
                    }

                }else{
                    entry.target.classList.remove('desktop');
                    
                    staticTop.querySelectorAll('.dropdown-menu-p').forEach( element => {
                        element.style.paddingTop  = staticTop.offsetHeight+"px";
                    });
                    
                    staticTop.querySelectorAll("[data-title]").forEach ( element => {
                        element.innerHTML = element.dataset.badge + element.dataset.title_short;
                    });


                    if(staticTop.querySelector('.nav-primary > .nav > .resorts-vacations') != null){
                        staticTop.querySelector('.nav-primary .nav-movil .navbar-nav').append(staticTop.querySelector('.nav > .resorts-vacations'));
                    }
            }
            

            if(entry.contentRect.width >= 900){
                entry.target.classList.add('desktop-900');
            }else{
                entry.target.classList.remove('desktop-900');
            }
            
            if(entry.contentRect.width <= 1000){
                labelPhone.textContent = labelPhone.dataset.label;
            }

            if(entry.contentRect.width > 1000 && entry.contentRect.width <= 1250){
                labelPhone.textContent = labelPhone.dataset.label_md;
            }

            if(entry.contentRect.width > 1100){
                labelPhone.textContent = labelPhone.dataset.label_md;
                entry.target.classList.add('desktop-1100');
            }else{
                entry.target.classList.remove('desktop-1100');
            }

            if(entry.contentRect.width > 1250){
                labelPhone.textContent = labelPhone.dataset.label_lg;
                entry.target.classList.add('desktop-1250');

            }else{
                entry.target.classList.remove('desktop-1250');
            }
        
        }

        checkScroll();

    });
    
    resizeObserver.observe(staticTop);

    
    
    
    window.addEventListener( 'scroll', (event) => {
        checkScroll();
    });

    var observerConfig = {
        root: null,
        rootMargin: "0px",
        threshold: [0, 0.25, 0.5, 0.75, 1]
    };

    var bookingObserver = new IntersectionObserver(function (entries, observer) {
        var buttonFixed = document.querySelector('.boton-booking-now-fixed');

        if(buttonFixed != null){
            for(let entry of entries){
                if(entry.intersectionRatio > 0.35){
                    document.querySelector('.boton-booking-now-fixed').style.display = 'none';
                }else{
                    document.querySelector('.boton-booking-now-fixed').style.display = 'inline-block';
                }
            }
        }

    }, observerConfig);

    document.querySelectorAll('.booking-interno-container').forEach(element => {
        bookingObserver.observe(element);
    })
    //mobileContentMenu();
})();