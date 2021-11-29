<?php get_header(); ?>

<?php

    $search_refer = $_GET["post_type"];
    $search_tax = $_GET["taxonomy"];
    if ($search_refer == 'any') {

        load_template(__DIR__ . '/tmpl/search-any.php');

    } elseif ($search_tax == 'regions') {

        load_template(__DIR__ . '/tmpl/search-ambassadors.php');

    };
 
?>

<?php get_footer(); ?>