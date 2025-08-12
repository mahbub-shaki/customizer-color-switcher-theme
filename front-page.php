<?php get_header() ;?>

<section class="text-center py-16" style="background-color: var(--primary-color); color: var(--secondary-color);">
    <h1 class="hero-title text-4xl font-bold mb-4">
        <?php echo esc_html( get_theme_mod('ccs_hero_title', 'Welcome to Customizer Color Switcher Theme') ); ?>
    </h1>
    <p class="hero-subtitle text-lg mb-6">
        <?php echo esc_html( get_theme_mod('ccs_hero_subtitle', 'Change the theme colors live from WordPress Customizer!') ); ?>
    </p>
    <a href="<?php echo esc_url( get_theme_mod('ccs_hero_button_url', '#') ); ?>" 
       class="hero-button inline-block px-6 py-3 rounded font-semibold"
       style="background-color: var(--secondary-color); color: var(--primary-color);">
        <?php echo esc_html( get_theme_mod('ccs_hero_button_text', 'Get Started') ); ?>
    </a>
</section>

<?php get_footer() ;?>