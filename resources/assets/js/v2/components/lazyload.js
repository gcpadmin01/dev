/*!
 * Lazy Load - JavaScript plugin for lazy loading images
 *
 * Copyright (c) 2007-2019 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://appelsiini.net/projects/lazyload
 *
 * Version: 2.0.0-rc.2
 *
 */

(function (root, factory) {
    if (typeof exports === "object") {
        module.exports = factory(root);
    } else if (typeof define === "function" && define.amd) {
        define([], factory);
    } else {
        root.LazyLoad = factory(root);
    }
}) (typeof global !== "undefined" ? global : this.window || this.global, function (root) {

    if (typeof define === "function" && define.amd){
        root = window;
    }

    var defaults = {
        src: "data-src",
        srcset: "data-srcset",
        selector: ".lazyload",
        root: null,
        rootMargin: "0px",
        threshold: 0
    };

    /**
    * Merge two or more objects. Returns a new object.
    * @private
    * @param {Boolean}  deep     If true, do a deep (or recursive) merge [optional]
    * @param {Object}   objects  The objects to merge together
    * @returns {Object}          Merged values of defaults and options
    */
    var extend = function ()  {

        let extended = {};
        let deep = false;
        let i = 0;
        let length = arguments.length;

        /* Check if a deep merge */
        if (Object.prototype.toString.call(arguments[0]) === "[object Boolean]") {
            deep = arguments[0];
            i++;
        }

        /* Merge the object into the extended object */
        let merge = function (obj) {
            for (let prop in obj) {
                if (Object.prototype.hasOwnProperty.call(obj, prop)) {
                    /* If deep merge and property is an object, merge properties */
                    if (deep && Object.prototype.toString.call(obj[prop]) === "[object Object]") {
                        extended[prop] = extend(true, extended[prop], obj[prop]);
                    } else {
                        extended[prop] = obj[prop];
                    }
                }
            }
        };

        /* Loop through each object and conduct a merge */
        for (; i < length; i++) {
            let obj = arguments[i];
            merge(obj);
        }

        return extended;
    };

    function LazyLoad(images, options) {
        this.settings = extend(defaults, options || {});
        this.images = images || document.querySelectorAll(this.settings.selector);
        this.observer = null;
        this.init();
    }

    LazyLoad.prototype = {
        init: function() {

            /* Without observers load everything and bail out early. */
            if (!root.IntersectionObserver) {
                this.loadImages();
                return;
            }

            let self = this;
            let observerConfig = {
                root: this.settings.root,
                rootMargin: this.settings.rootMargin,
                threshold: [this.settings.threshold]
            };

            this.observer = new IntersectionObserver(function(entries) {
                Array.prototype.forEach.call(entries, function (entry) {
                    if (entry.isIntersecting) {
                        self.observer.unobserve(entry.target);
                        let src = entry.target.getAttribute(self.settings.src);
                        let srcWebp = entry.target.getAttribute('data-webp');
                        let srcset = entry.target.getAttribute(self.settings.srcset);

                        entry.target.removeAttribute(self.settings.src);
                        entry.target.removeAttribute('data-webp');
                        entry.target.removeAttribute(self.settings.srcset);

                        if(!srcWebp){
                            srcWebp = src;
                        }

                        if ("img" === entry.target.tagName.toLowerCase()) {
                            if (src) {
                                entry.target.src = srcWebp;
                                if (!window.webp){
                                    entry.target.src = src;
                                }
                            }
                            if (srcset) {
                                entry.target.srcset = srcset;
                            }
                        }else if("picture" === entry.target.tagName.toLowerCase()){
                            entry.target.querySelectorAll('source').forEach(ele => {
                                let srcset = ele.getAttribute(self.settings.srcset);
                                ele.srcset = srcset;
                            });

                            let img = entry.target.querySelector('img');
                            img.src = img.getAttribute(self.settings.src);                            
                        } else {
                            entry.target.style.backgroundImage = "url(" + srcWebp + ")";
                            if (!window.webp){
                                entry.target.style.backgroundImage = "url(" + src + ")";
                            }
                        }
                    }
                });
            }, observerConfig);

            Array.prototype.forEach.call(this.images, function (image) {
                self.observer.observe(image);
            });
        },

        loadAndDestroy: function () {
            if (!this.settings) { return; }
            this.loadImages();
            this.destroy();
        },

        loadImages: function () {
            if (!this.settings) { return; }

            let self = this;
            Array.prototype.forEach.call(this.images, function (image) {
                let src = image.getAttribute(self.settings.src);
                let srcWebp = image.getAttribute('data-webp');
                let srcset = image.getAttribute(self.settings.srcset);

                if ("img" === image.tagName.toLowerCase()) {
                    if (src) {
                        image.src = src;
                    }
                    if (srcset) {
                        image.srcset = srcset;
                    }
                }else if("picture" === image.tagName.toLowerCase()){

                    image.querySelectorAll('source').forEach(ele => {
                        let srcset = ele.getAttribute(self.settings.srcset);
                        ele.srcset = srcset;
                    });

                    let img = image.querySelector('img');
                    img.src = img.getAttribute(self.settings.src);

                } else {

                    image.style.backgroundImage = "url('" + srcWebp + "')";
                    if (!window.webp){
                        image.style.backgroundImage = "url('" + src + "')";
                    }
                }
            });
        },

        destroy: function () {
            if (!this.settings) { return; }
            this.observer.disconnect();
            this.settings = null;
        }
    };

    root.lazyload = function(images, options) {
        return new LazyLoad(images, options);
    };

    if (root.jQuery) {
        var $ = root.jQuery;
        $.fn.lazyload = function (options) {
            options = options || {};
            options.attribute = options.attribute || "data-src";
            new LazyLoad($.makeArray(this), options);
            return this;
        };
    }

    return LazyLoad;
});