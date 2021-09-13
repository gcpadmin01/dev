let mix = require('laravel-mix');
require('laravel-mix-sri');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.autoload({
    jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"],
    tether: ['window.Tether', 'Tether', 'tether'],
    cookieconsent: ['window.cookieconsent']
});


/*mix.options({
	cleanCss: {
		level: {
			1: {
				specialComments: 'none'
			}
		}
	},
	externals: {
		jquery: 'jQuery'
	}
});*/

/*mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/medias.scss', 'public/css');

mix.js([
	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/masonry-layout/masonry.js',
	'node_modules/slick-carousel/slick/slick.js',
	'node_modules/progressbar.js/dist/progressbar.js',
	'node_modules/cookieconsent/build/cookieconsent.min.js',
	'node_modules/select2/dist/js/select2.full.min.js',
	'node_modules/countdown-js/dist/countdown.min.js',
	'node_modules/owl.carousel/dist/owl.carousel.min.js',
	'resources/assets/js/master-intern.js',
], 'public/js/master-intern.js');


mix.js([
	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/masonry-layout/masonry.js',
	'node_modules/cookieconsent/build/cookieconsent.min.js',
	'node_modules/select2/dist/js/select2.full.min.js',
	'node_modules/owl.carousel/dist/owl.carousel.min.js',
	'resources/assets/js/master-home.js',
], 'public/js/master-home.js');*/

/*mix.copy('resources/assets/js/home.js', 'public/js/home.js').
copy('resources/assets/js/intern.js', 'public/js/intern.js').
copy('resources/assets/js/countdown.min.js', 'public/js/countdown.min.js').
copy('resources/assets/js/instafeed.min.js', 'public/js/instafeed.min.js').
copy('resources/assets/js/lazy.min.js', 'public/js/lazy.min.js').
copy('resources/assets/js/progressbar.min.js', 'public/js/progressbar.min.js').
copy('resources/assets/js/owl.min.js', 'public/js/owl.min.js');*/

mix.autoload({
	jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"]
});

mix.js('resources/assets/js/main.js', 'public/js');
mix.js('resources/assets/js/v2/main-header.js', 'public/js');

mix.js('resources/assets/js/v2/home.js', 'public/js');

mix.js('resources/assets/js/v2/interna.js', 'public/js');
mix.js('resources/assets/js/v2/_deals.js', 'public/js');
mix.js('resources/assets/js/v2/_deals-detail.js', 'public/js');
mix.js('resources/assets/js/v2/_deals-detail-carousel.js', 'public/js');
mix.js('resources/assets/js/v2/_mosaic.js', 'public/js');
mix.js('resources/assets/js/v2/_deals-mosaic.js', 'public/js');
mix.js('resources/assets/js/v2/_concursos.js', 'public/js');
mix.js('resources/assets/js/v2/_webcams.js', 'public/js');
mix.js('resources/assets/js/v2/gms-personal-information.js', 'public/js');
mix.js('resources/assets/js/v2/gms-reservations.js', 'public/js');
mix.js('resources/assets/js/v2/gms-account-management.js', 'public/js');
mix.js('resources/assets/js/v2/gms-register.js', 'public/js');
mix.js('resources/assets/js/v2/destinations-intern.js', 'public/js');
mix.js('resources/assets/js/v2/agent-login.js', 'public/js');
mix.js('resources/assets/js/v2/agent-signup.js', 'public/js');
mix.js('resources/assets/js/v2/agent-faqs.js', 'public/js');
mix.js('resources/assets/js/v2/vacations.js', 'public/js');
mix.js('resources/assets/js/v2/gms-offer-subscription.js', 'public/js');
mix.js('resources/assets/js/v2/_year_offer.js', 'public/js');

mix.sass('resources/assets/sass/main.scss', 'public/css');
mix.sass('resources/assets/sass/deals.scss', 'public/css');
mix.sass('resources/assets/sass/deals-detail.scss', 'public/css');
mix.sass('resources/assets/sass/deals-detail-carousel.scss', 'public/css');
mix.sass('resources/assets/sass/_deals_subscription.scss', 'public/css');
mix.sass('resources/assets/sass/_gms_suscription_offers.scss', 'public/css');
mix.sass('resources/assets/sass/gms-personal-information.scss', 'public/css');
mix.sass('resources/assets/sass/gms-reservations.scss', 'public/css');
mix.sass('resources/assets/sass/gms-log-in.scss', 'public/css');
mix.sass('resources/assets/sass/voy-a-ganar.scss', 'public/css');
mix.sass('resources/assets/sass/destinations-intern.scss', 'public/css');
mix.sass('resources/assets/sass/resort.scss', 'public/css');
mix.sass('resources/assets/sass/webcam.scss', 'public/css');
mix.sass('resources/assets/sass/yearly_sale.scss', 'public/css');

mix.js('resources/assets/js/_deals_subscription.js', 'public/js');
mix.js('resources/assets/js/v2/components/_maps_resorts.js', 'public/js');
mix.js('resources/assets/js/_maps_destination.js', 'public/js');
mix.sass('resources/assets/sass/_deals_mosaic.scss', 'public/css');
mix.sass('resources/assets/sass/_agents.scss', 'public/css');
mix.sass('resources/assets/sass/agent-help.scss', 'public/css');

//Video
mix.sass('resources/assets/sass/video.scss', 'public/css');

//========================
// Landing Time Share
//=======================
mix.sass('resources/assets/sass/time-share.scss', 'public/css');
mix.js('resources/assets/js/time-share','public/js');

//========================
//Resort About
//=======================
mix.js('resources/assets/js/v2/resort-about.js', 'public/js');

mix.sass('resources/assets/sass/royalcarestandard.scss', 'public/css');
mix.js('resources/assets/js/v2/royalcarestandard.js', 'public/js');


mix.js('resources/assets/js/usd_to_mxn.js', 'public/js');
//
//
////========================
//// Landing de facebook
////=======================
mix.sass('resources/assets/sass/facebook/destinations.scss', 'public/css/facebook/')
	.js('resources/assets/js/facebook/destinations.js', 'public/js/facebook/')
	.sass('resources/assets/sass/facebook/resort.scss', 'public/css/facebook/')
	.js('resources/assets/js/facebook/resort.js', 'public/js/facebook/')
	.sass('resources/assets/sass/facebook/special-offers.scss', 'public/css/facebook/')
	.js('resources/assets/js/facebook/special-offers.js', 'public/js/facebook/');

mix.generateIntegrityHash({
		enabled: true
	})
mix.version();

if (!mix.inProduction()) {
	mix.purgeCss({
		whitelistPatternsChildren: [
			/^ui/,
			/^amenity/,
			/^collaps/
		]
	});

    mix.sourceMaps();
    mix.browserSync({
		proxy: 'https://dev.royalreservations.com',
		https: {
			key: "C:/xampp/apache/crt/dev.royalreservations.com/server.key",
			cert: "C:/xampp/apache/crt/dev.royalreservations.com/server.crt"
		},
	});
}