<?php 
function bookshop_load_resources(){
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js', array(), null, false);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Paytone+One&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
}

add_action("wp_enqueue_scripts", "bookshop_load_resources");

function bookshop_remove_gutenberg(){
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "bookshop_remove_gutenberg");

function td_register_translatable_strings() {
    pll_register_string('Useful Links', 'Useful Links', 'text-domain');
    pll_register_string('10 Best Books Every Graphic Designer Should Own', '10 Best Books Every Graphic Designer Should Own', 'text-domain');
    pll_register_string('13 Must-Read Graphic Design Books', '13 Must-Read Graphic Design Books', 'text-domain');
    pll_register_string('The Best Graphic Design Books on Branding, Logos, Type and More', 'The Best Graphic Design Books on Branding, Logos, Type and More', 'text-domain');
    pll_register_string('Contact Us', 'Contact Us', 'text-domain');
    pll_register_string('Phone', 'Phone', 'text-domain');
    pll_register_string('Email', 'Email', 'text-domain');
    pll_register_string('Address', 'Address', 'text-domain');
    pll_register_string('Avrtikl Bookshop. All rights reserved.', 'Avrtikl Bookshop. All rights reserved.', 'text-domain');
}
add_action('init', 'td_register_translatable_strings');

