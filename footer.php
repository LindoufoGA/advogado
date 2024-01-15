
  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-img">
      <img src="<?php the_field('logo_footer'); ?>" alt="">
    </div>
    <span><?php bloginfo('name'); ?> | Copyright © <?php echo date("Y"); ?> - Todos os direitos reservados.</span>
    <ul class="redes-sociais">
      <li>
        <a href="<?php the_field('link_instagram'); ?>"><img src="<?php the_field('icon_instagram'); ?>" alt="icon-instagram"></a>
      </li>
      <li>
        <a href="<?php the_field('link_whatsapp'); ?>"><img src="<?php the_field('icon_whatsapp'); ?>" alt="icon-whatsapp"></a>
      </li>
      <li>
        <a href="<?php the_field('link_email'); ?>"><img src="<?php the_field('icon_email'); ?>" alt="icon-email"></a>
      </li>
    </ul>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/script/formulario.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/script/script.js"></script>
  <?php wp_footer(); ?>
</body>

</html>