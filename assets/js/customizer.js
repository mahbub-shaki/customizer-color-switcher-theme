(function($) {
    wp.customize('ccs_primary_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--primary-color', newval);
        });
    });
    wp.customize('ccs_secondary_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--secondary-color', newval);
        });
    });
})(jQuery);


(function($) {
    wp.customize('ccs_hero_title', function(value) {
        value.bind(function(newval) {
            $('.hero-title').text(newval);
        });
    });
    wp.customize('ccs_hero_subtitle', function(value) {
        value.bind(function(newval) {
            $('.hero-subtitle').text(newval);
        });
    });
    wp.customize('ccs_hero_button_text', function(value) {
        value.bind(function(newval) {
            $('.hero-button').text(newval);
        });
    });
    wp.customize('ccs_hero_button_url', function(value) {
        value.bind(function(newval) {
            $('.hero-button').attr('href', newval);
        });
    });
})(jQuery);
