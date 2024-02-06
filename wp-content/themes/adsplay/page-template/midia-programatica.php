<?php

/*
Template Name: Mídia Programática
*/

get_header();
?>

<?php //  Banner Mídia Programática
include(get_template_directory() . '/template-parts/page/banner-midia-programatica.php'); ?>

<?php //  Descritivo Mídia Programática
include(get_template_directory() . '/template-parts/page/descritivo-midia-programatica.php'); ?>

<?php //  Formatos Mídia Programática
include(get_template_directory() . '/template-parts/page/formatos-midia-programatica.php'); ?>

<?php //  Cases Mídia Programática
include(get_template_directory() . '/template-parts/page/cases-midia-programatica.php'); ?>

<?php //  Blog Mídia Programática
include(get_template_directory() . '/template-parts/page/blog-midia-programatica.php'); ?>

<?php //  Contato Mídia Programática
// include(get_template_directory() . '/template-parts/page/contato-midia-programatica.php'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<script>
    var abaFormatos = document.querySelectorAll("li.aba");
    var modalFormatos = document.querySelectorAll(".formatos-content");

    abaFormatos.forEach(function(item, index) {
        item.addEventListener("click", function() {
            
            for (var i = 0; i < modalFormatos.length; i++) {
                abaFormatos[i].classList.remove("aba-ativa");
                modalFormatos[i].classList.remove("abrir");
            }
            abaFormatos[index].classList.add("aba-ativa");
            modalFormatos[index].classList.add("abrir");

        });
    });
</script>

<script>
    jQuery('.formato-slide').slick({
        dots: false,
        speed: 400,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: jQuery('#arrow-left'),
        nextArrow: jQuery('#arrow-right'),
        infinite: false,
        autoplay: false,
        responsive: [
            {
            breakpoint: 612,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 425,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
            }
        ],
    });
</script>

<?php
get_footer();
?>