<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query( $args );
?>

<div class="blog-titulo-container">
    <div class="blog-titulo-content container">
        <h3>Blog</h3>
        <div class="blog-subtitulo">
            <span>
            Saiba o que é mídia digital, conheça os formatos de anúncios, mídia programática, certificações Google e tudo sobre o universo de marketing programático!
            </span>
        </div>
    </div>
</div>
<section class="blog-container">
    <div class="blog-content container">
        <?php if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-card">
                <div class="blog-card-thumb">
                    <?php
                            the_post_thumbnail('BLOG');
                    ?>
                </div>
                <div class="blog-card-box">
                    <span>
                        <?php $categories = get_the_category(); ?>
                        <?php echo esc_html($categories[0]->name); ?>
                    </span>
                    <h4>
                        <?php
                        $title = get_the_title();
                        $titlelen = strlen($title);
                        $limitetitle = '55';
                        $title = mb_substr($title, 0, $limitetitle);
                        if ($titlelen > $limitetitle) {
                            echo $title . '...';
                        } else {
                            echo $title;
                        }
                        ?>
                    </h4>
                    <p>
                        <?php
                        $limite = '290';
                        $descricao = get_the_content();
                        $descricao = strip_tags($descricao);
                        $descricao = mb_substr($descricao, 0, $limite);
                        echo $descricao . '[...]';
                        ?>
                    </p>
                    <div class="blog-card-saiba">Saiba mais</div>
                    <div class="blog-card-leia">Leia Mais <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/blog-arrow.svg"></div>
                </div>
            </a>
        <?php endwhile;
                endif;
        ?>
    </div>
</section>