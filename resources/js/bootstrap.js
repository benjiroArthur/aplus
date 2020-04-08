window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default;
    //require('./plugins/wow.min');
    require('bootstrap');
    require('admin-lte');
    require('./plugins/jquery.magnific-popup.min');


    //require('./plugins/jquery.slicknav.min');

    /*require('./plugins/jquery.scrollUp.min');
    require('./plugins/jquery.ajaxchimp.min');
    require('./plugins/jquery.counterup.min');
    require('./plugins/jquery.form');
    require('./plugins/jquery.magnific-popup.min');
    require('./plugins/jquery.validate.min');

    require('./modernizr-3.5.0.min');
    require('./plugins/main');
    require('./plugins/ajax-form');
    require('./plugins/contact');
    require('./plugins/gijgo.min');
    require('./plugins/imagesloaded.pkgd.min');
    require('./plugins/isotope.pkgd.min');
    require('./plugins/mail-script');
    require('./plugins/nice-select.min');
    require('./plugins/owl.carousel.min');
    require('./plugins/plugins');
    require('./plugins/popper.min');
    require('./plugins/scrollIt');
    require('./plugins/slick.min');
    require('./plugins/waypoints.min');*/

} catch (e) {}


$(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 400) {
        $("#sticky-header").removeClass("sticky");
        $("#logo-mini").addClass("d-none");
        $('#back-top').fadeIn(500);
    } else {
        $("#sticky-header").addClass("sticky");
        $("#logo-mini").removeClass("d-none");
        $('#back-top').fadeIn(500);
    }
});

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
