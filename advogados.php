<?php
// Template Name: Advogados
?>
<?php get_header(); ?>

  <section class="container sobre-adv">
    <img src="<?php the_field('imagem_advogado'); ?>" alt="">
    <div>
      <h1 class="titulo"><?php the_field('nome_advogado'); ?></h1>
      <h2 class="subtitulo"><?php the_field('especialidade'); ?></h2>
      <p class="descricao"><?php the_field('descricao'); ?></p>
    </div>
  </section>

  <?php get_footer(); ?>
