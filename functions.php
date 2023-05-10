<?php

function wp_learner_files() {
    wp_enqueue_style( "wp-learner_custom_style", get_template_directory_uri()."/assets/css/custom.css");

    wp_enqueue_style( "wp-learner_main_style", get_template_directory_uri()."/assets/css/style.css");

    wp_enqueue_style("wp_learner_bootstrap_styles", get_template_directory_uri(). "/assets/css/bootstrap.min.css");

    wp_enqueue_style("wp_learner_animate", get_template_directory_uri()."/assets/lib/animate/animate.css");

    wp_enqueue_style("wp_learner_animate_min", get_template_directory_uri()."/assets/lib/animate/animate.min.css");

    wp_enqueue_style("wp_learner_font_awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css");

    wp_enqueue_style("custom_fonts", "https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap");


    wp_enqueue_script( "bootstrap_script","https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("waypoins_min", get_template_directory_uri()."/assets/lib/waypoints/waypoints.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("easing_min", get_template_directory_uri()."/assets/lib/easing/easing.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("wow_min", get_template_directory_uri()."/assets/lib/wow/wow.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("owl_carousel", get_template_directory_uri()."/assets/lib/owlcarousel/owl.carousel.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("tempusdominos", get_template_directory_uri()."/assets/lib/tempusdominus/js/moment.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("tempusdominos", get_template_directory_uri()."/assets/lib/tempusdominus/js/moment-timezone.min.js", array('jquery'), "1.0", true );

    wp_enqueue_script("tempusdominos", get_template_directory_uri()."/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.minjs", array('jquery'), "1.0", true );

    wp_enqueue_script( "main_script", get_template_directory_uri()."/assets/js/main.js", array('jquery'), "1.0", true );


};

//this is the hook
add_action("wp_enqueue_scripts", "wp_learner_files");



?>