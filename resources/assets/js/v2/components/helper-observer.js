function observer(element, callback) {
    //========================================================================
    // Se agrega lazy load para el feed de instagram
    //========================================================================

        if (!IntersectionObserver) {
            callback();
        }else{
            var observerConfig = {
                root: null,
                rootMargin: "0px",
                threshold: [0]
            };
            
            
            var observer = new IntersectionObserver(function (entries, observer) {
                Array.prototype.forEach.call(entries, function (entry) {
                    if (entry.isIntersecting) {
                        observer.unobserve(entry.target);
                        callback();
                    }
                });
            }, observerConfig);
        
            observer.observe(element);
        }
    
}

export{
    observer
}