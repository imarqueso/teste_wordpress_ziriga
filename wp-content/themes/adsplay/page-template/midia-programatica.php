<?php

/*
Template Name: Mídia Programática
*/

get_header();
?>

<section class="banner-principal" style="background-image: url(<?php echo get_site_url(); ?>/<?php echo get_field('banner-principal'); ?>);">
<div class="banner-overlay">
    <div class="banner-content container">
        <div class="banner-box">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/icon_monitor.svg" alt="Icon Monitor">
            <h1><?php echo get_the_title(); ?></h1>
            <p>É possível comprar espaços e anunciar em<br/> grandes portais de forma rápida e automática</p>
            <span>Veja também</span>
            <a href="<?php echo get_site_url(); ?>/marketing-de-performance" class="btn-banner">Marketing de Performance</a>
        </div>
        <div class="form-box">
           
        </div>
    </div>
</div>
</section>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<?php
get_footer();
?>