(function($) {
    // Live preview for primary color change in Customizer
    wp.customize('ccs_primary_color', function(value) {
        value.bind(function(newval) {
            // Update CSS variable --primary-color dynamically
            document.documentElement.style.setProperty('--primary-color', newval);
        });
    });

    // Live preview for secondary color change in Customizer
    wp.customize('ccs_secondary_color', function(value) {
        value.bind(function(newval) {
            // Update CSS variable --secondary-color dynamically
            document.documentElement.style.setProperty('--secondary-color', newval);
        });
    });
})(jQuery);

(function($) {
    // Live preview for Hero Title text change
    wp.customize('ccs_hero_title', function(value) {
        value.bind(function(newval) {
            // Update the text content of elements with class .hero-title
            $('.hero-title').text(newval);
        });
    });

    // Live preview for Hero Subtitle text change
    wp.customize('ccs_hero_subtitle', function(value) {
        value.bind(function(newval) {
            // Update the text content of elements with class .hero-subtitle
            $('.hero-subtitle').text(newval);
        });
    });

    // Live preview for Hero Button Text change
    wp.customize('ccs_hero_button_text', function(value) {
        value.bind(function(newval) {
            // Update the button text in elements with class .hero-button
            $('.hero-button').text(newval);
        });
    });

    // Live preview for Hero Button URL change
    wp.customize('ccs_hero_button_url', function(value) {
        value.bind(function(newval) {
            // Update the href attribute of elements with class .hero-button
            $('.hero-button').attr('href', newval);
        });
    });
})(jQuery);
