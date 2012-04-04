<?php get_header(); ?>

<?php if (get_option_tree('slider_onoff') == 'Yes') { ?>

<?php

 $slider = get_option_tree('slider_select');

 $filenames = array(
            'Small Slider (Text)' => 'slider_small.php',
            'Small Slider (Thumbs)' => 'slider_small_thumbs.php',
            'Full Width Slider (Text)' => 'slider_wide.php',
            'Full Width Slider (Thumbs)' => 'slider_wide_thumbs.php',
            'Content Slider' => 'slider_content.php'
        );

 $script1 = $filenames[$slider];

 ?>

<?php  include("includes/sliders/$script1"); ?>

<?php } ?>

<?php if (get_option_tree('cta_onoff') == 'Yes') { ?>

<?php  include("includes/cta.php"); ?>

<?php } ?>

<?php if (get_option_tree('portfolio_onoff') == 'Yes') { ?>

<?php  include("includes/portfolio.php"); ?>

<?php } ?>

<?php get_footer(); ?>