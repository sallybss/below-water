<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  
    
</head>
<body>
    <header>
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="Homepage" class="logo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.jpg'); ?>" class="logo-img" alt="Logo">
                </a>
                <div class="hamburger-menu" id="hamburger-menu">
                    &#9776; <!-- Hamburger icon (☰) -->
                </div>
                <div class="navbar-menu" id="navbar-menu">
                    <?php
                    // Display the primary menu
                    wp_nav_menu(array(
                        'theme_location' => 'primary', // Ensure this matches the location you assigned your menu to
                        'menu_class'     => 'navbar-nav', // Optional: add a class to the menu
                        'container'      => false,       // Optional: remove the default container (ul)
                        'fallback_cb'    => false       // Optional: do not display anything if no menu is set
                    ));
                    ?>
                    <!-- Language Switcher -->
                    <div class="language-switcher">
                        <ul>
                            <?php
                            // Display language switcher with flags and names
                            pll_the_languages(array(
                                'show_flags' => 1,  // Show flags
                                'show_names' => 1   // Show names
                            ));
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Your other content goes here -->

    <?php wp_footer(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerMenu = document.getElementById('hamburger-menu');
            const navbarMenu = document.getElementById('navbar-menu');

            hamburgerMenu.addEventListener('click', function() {
                navbarMenu.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
