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