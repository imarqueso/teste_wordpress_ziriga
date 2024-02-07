<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?>

<footer class="footer-container">
    <div class="footer-content container">
        <div class="footer-box-1">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/logo_adsplay.svg" alt="ADSPLAY" class="logo-footer">
            <div class="icons-footer">
            <?php
                $socialFooter = get_field('social-footer');
                echo $socialFooter;
            ?>
            </div>
        </div>
        <div class="footer-box-2">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'Sobre'
                ));
            ?>
        </div>
        <div class="footer-box-3">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'Footer'
                ));
            ?>
        </div>
        <div class="footer-box-4">
            <div class="footer-box-endereco">
                <p>Rua Fernão Dias, 10</p>
                <p>São Paulo - CEP: 05440-000</p>
            </div>
            <div class="footer-box-contato">
                <a href="#"><img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/fone_icon.svg">11 3031.0240</a>
                <a href="#"><img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/email_icon.svg">falecom@adsplay.com.br</a>
            </div>
        </div>
        <div class="footer-box-5">
            <p>
            Inscreva-se para receber os nossos materiais e ficar por dentro das principais notícias do nosso setor.
            </p>
            <form action="">
                <div>
                    <input type="text" placeholder="Seu e-mail">
                    <button type="submit">Enviar</button>
                </div>
                <label>
                    <input type="checkbox">
                    <span>Li, compreendi e concordo com os Termos de Uso e Política de Privacidade do site.</span>
                </label>
            </form>
        </div>
    </div>
    <div class="footer-bottom-container">
        <div class="footer-bottom-content container">
            <p>&copy; ADSPLAY - Todos os direitos reservados. <a href="#">Política de Privacidade</a></p>
            <a href="https://ziriga.com.br/" class="poweredby" target="_blank">
                <span>Desenvolvido por</span>
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/logo_ziriga.png">
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
