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
            <div class="form-content">
                <h2>Vamos Conversar?</h2>
                <form id="form">
                    <div class="form-box row">
                        <label>
                            <span>Nome*</span>
                            <input type="text" name="nome" placeholder="Seu Nome">
                        </label>
                        <label>
                            <span>Whatsapp*</span>
                            <input type="text" name="whatsapp" placeholder="(XX) X XXXX-XXXX">
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>E-mail*</span>
                            <input type="email" name="email" placeholder="exemple@gmail.com">
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>Cargo*</span>
                        <select name="cargo" id="">
                            <option value="Cargo 1">Cargo 1</option> 
                            <option value="Cargo 2">Cargo 2</option> 
                        </select>
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>Segmento*</span>
                        <select name="segmento" id="">
                            <option value="Segmento 1">Segmento 1</option> 
                            <option value="Segmento 2">Segmento 2</option> 
                        </select>
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>Interesse*</span>
                        <select name="interesse" id="">
                            <option value="Interesse 1">Interesse 1</option> 
                            <option value="Interesse 2">Interesse 2</option> 
                        </select>
                        </label>
                    </div>
                    <button type="submit">Faça um orçamento</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="descritivo-container">
    <div class="container descritivo-content">
        <div class="descritivo-texto-box">
            <h3>A Mídia Programática</h3>
            <h4>Uma nova maneira de realizar a compra de anúncios</h4>
            <p>A Mídia Programática possibilita anunciar na internet, na TV, em mobiliário urbano, dentro de jogos e até no YouTube. Com a Mídia Programática você consegue montar uma estratégia omnichannel e trabalhar toda a jornada do seu cliente em diferentes canais, otimizando toda a comunicação da sua marca para seguir um storytelling eficiente e gerenciado alcance e frequência de impactos sob um único usuário.<br/>
Acesse diferentes inventários e agrupe eles sob as mesmas métricas, faça uploads de dados externos, pixel ou CRM e muito mais! A Mídia Programática é, com certeza, a mídia mais versártil e completa quando o assunto é alcançar novos usuários e espalhar a mensagem da sua marca.</p>
        </div>
        <div class="descritivo-img-box">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/midia-programatica.png" alt="Mídia Programática">
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