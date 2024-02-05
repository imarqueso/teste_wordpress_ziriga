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
                            <option value="" selected>Escolha uma opção</option> 
                            <option value="Cargo 1">Cargo 1</option> 
                            <option value="Cargo 2">Cargo 2</option> 
                        </select>
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>Segmento*</span>
                        <select name="segmento" id="">
                            <option value="" selected>Escolha uma opção</option> 
                            <option value="Segmento 1">Segmento 1</option> 
                            <option value="Segmento 2">Segmento 2</option> 
                        </select>
                        </label>
                    </div>
                    <div class="form-box row">
                        <label>
                            <span>Interesse*</span>
                        <select name="interesse" id="">
                            <option value="" selected>Escolha uma opção</option> 
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
<section class="formatos-titulo-container">
    <div class="formatos-titulo-overlay" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/formatos-background.png);">
        <div class="formato-titulo-content container">
            <div class="formato-titulo">
                <h3>Formatos</h3>
                <hr>
            </div>
            <div class="formato-subtitulo">
                <p>Contamos com uma série de formatos e inventários exclusivos mobile, tais como:</p>
            </div>
        </div>
    </div>
</section>
<section class="formatos-abas-container">
    <div class="formatos-aba-content container">
        <ul class="abas-formatos-box">
            <li class="aba-formatos aba aba-ativa">
                <span>Displays</span>
            </li>
            <li class="aba-formatos aba">
                <span>Vídeo Advertising</span>
            </li>
            <li class="aba-formatos aba">
                <span>Spotify</span>
            </li>
            <li class="aba-formatos aba">
                <span>Dooh</span>
            </li>
            <li class="aba-formatos aba">
                <span>Alto Impacto</span>
            </li>
            <li class="aba-formatos aba">
                <span>Native Ads</span>
            </li>
            <li class="aba-formatos aba">
                <span>Youtube Ads</span>
            </li>
            <li class="aba-formatos aba">
                <span>Mobile Ads</span>
            </li>
            <li class="aba-formatos-list">
                <span>Complementares <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/icon_down.svg" alt="Icone Down"></span>
                <ul class="aba-formatos-list-box">
                    <li class="aba-formatos-list-btn aba">
                        <span>DCO</span>
                    </li>
                    <li class="aba-formatos-list-btn aba">
                        <span>CDP e DPM</span>
                    </li>
                    <li class="aba-formatos-list-btn aba">
                        <span>AD Server</span>
                    </li>
                    <li class="aba-formatos-list-btn aba">
                        <span>TV Sync</span>
                    </li>
                    <li class="aba-formatos-list-btn aba">
                        <span>Brand Lift</span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/css/slick.css" />

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/js/slick.min.js">
</script>
<section class="formatos-container">
    <div class="formatos-content container abrir">
        <div class="formato-box-1">
            <p>Esse é o formato mais antigo da mídia programática e, embora o termo “<b>display</b>” seja usado para se referir a qualquer forma de anúncios visuais online, no contexto dos anúncios programáticos são apenas aqueles que aparecem no cabeçalho, no rodapé ou na barra lateral. Entretanto com o frequente avanço da tecnologia, a otimização móvel e o melhor uso dos dados, o display tornou dinâmico o que antes era estático.</p>
            <hr>
            <div class="formato-slide-content">
                <span class="span-formato-slide">Escolha um formato:</span>
                <div class="formato-slide-box">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/arrow-left.svg" id="arrow-left">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/arrow-right.svg" id="arrow-right">
                    <div class="formato-slide" id="formato-slide">
                        <a href="#" class="item"><span>Wide Skyscraper</span></a>
                        <a href="#" class="item"><span>Medium Banner</span/</a>
                        <a href="#" class="item"><span>Larger Skyscraper</span></a>
                        <a href="#" class="item"><span>Mobile Footer</span></a>
                        <a href="#" class="item"><span>Full Banner</span></a>
                        <a href="#" class="item"><span>Leaderboard</span></a>
                        <a href="#" class="item"><span>Billboard</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>VIDEO ADVERTISING</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>SPOTIFY</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>DOOH</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>ALTO IMPACTO</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>NATIVE ADS</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>YOUTUBE ADS</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>MOBILE ADS</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>DCO</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>CDP E DPM</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>AD SERVER</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>TV SYNC</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
    <div class="formatos-content container">
        <div class="formato-box-1">
            <p>BRAND LIFT</p>
        </div>
        <div class="formato-box-2">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/displays_icon.png" alt="Display">
        </div>
    </div>
</section>
<section class="cases-titulo-container">
    <div class="cases-titulo-content container">
        <h3>Cases</h3><hr>
    </div>
</section>
<section class="cases-container">
    <div class="cases-content">
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/usaflex_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
            </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/usaflex_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/ifood_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/ifood_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/vale_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/vale_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/agroshow_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/agroshow_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/vale_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/vale_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/metrorio_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/metrorio_logo.png" class="cases-card-logo">
        </a>
        <a href="#" class="cases-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/acer_banner.jpg" class="cases-card-banner">
            <div class="cases-card-overlay">
           </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/acer_logo.png" class="cases-card-logo">
        </a>
    </div>
</section>
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
        <article class="blog-card">
            <div class="blog-card-thumb">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_banner.jpg">
            </div>
            <div class="blog-card-box">
                <h4>Semana do Brasil x dia do cliente</h4>
                <p>Uma semana comemorativa, ideal para colocar suas estratégias de vendas em prática com sucesso.   Setembro é um bom mês para dar um upgrade em suas vendas e no engajamento de sua marca. Por quê? Porque nele comemora-se o Dia do Cliente (15/09) e a Semana do Brasil (de 2 a 13/09), datas que […]</p>
                <a href="#" class="blog-card-saiba">Saiba mais</a>
                <a href="#" class="blog-card-leia">Leia Mais <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/blog-arrow.svg"></a>
            </div>
        </article>
        <article class="blog-card">
            <div class="blog-card-thumb">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_banner.jpg">
            </div>
            <div class="blog-card-box">
                <h4>Você já ouviu falar da adsplay educação?</h4>
                <p>Uma semana comemorativa, ideal para colocar suas estratégias de vendas em prática com sucesso.   Setembro é um bom mês para dar um upgrade em suas vendas e no engajamento de sua marca. Por quê? Porque nele comemora-se o Dia do Cliente (15/09) e a Semana do Brasil (de 2 a 13/09), datas que […]</p>
                <a href="#" class="blog-card-saiba">Saiba mais</a>
                <a href="#" class="blog-card-leia">Leia Mais <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/blog-arrow.svg"></a>
            </div>
        </article>
        <article class="blog-card">
            <div class="blog-card-thumb">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_banner.jpg">
            </div>
            <div class="blog-card-box">
                <h4>Os desafios do gestor de marketing digital em 2022</h4>
                <p>Uma semana comemorativa, ideal para colocar suas estratégias de vendas em prática com sucesso.   Setembro é um bom mês para dar um upgrade em suas vendas e no engajamento de sua marca. Por quê? Porque nele comemora-se o Dia do Cliente (15/09) e a Semana do Brasil (de 2 a 13/09), datas que […]</p>
                <a href="#" class="blog-card-saiba">Saiba mais</a>
                <a href="#" class="blog-card-leia">Leia Mais <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/blog-arrow.svg"></a>
            </div>
        </article>
        <article class="blog-card">
            <div class="blog-card-thumb">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/centernorte_banner.jpg">
            </div>
            <div class="blog-card-box">
                <h4>Brand safety e mídia programática</h4>
                <p>Uma semana comemorativa, ideal para colocar suas estratégias de vendas em prática com sucesso.   Setembro é um bom mês para dar um upgrade em suas vendas e no engajamento de sua marca. Por quê? Porque nele comemora-se o Dia do Cliente (15/09) e a Semana do Brasil (de 2 a 13/09), datas que […]</p>
                <a href="#" class="blog-card-saiba">Saiba mais</a>
                <a href="#" class="blog-card-leia">Leia Mais <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/blog-arrow.svg"></a>
            </div>
        </article>
    </div>
</section>
<section class="fale-conosco-container">
    <div class="fale-conosco-overlay" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/formatos-background.png);">
        <div class="fale-conosco-content container">
            <h3>O que podemos fazer pela sua marca hoje?</h3>
            <a href="#">Fale conosco</a>
        </div>
    </div>
</section>
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
    });
</script>

<?php
get_footer();
?>