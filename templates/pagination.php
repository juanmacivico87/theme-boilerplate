<?php

$args = [
    'mid_size' => 2,
    'prev_text' => __( '<', 'theme-boilerplate' ),
    'next_text' => __( '>', 'theme-boilerplate' ),
];

the_posts_pagination( $args );
