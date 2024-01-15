<?php
// Template Name: Page-home
?>

<?php get_header(); ?>
  <!-- BANNER -->
  <section class="container banner js-content">
    <div>
      <h1 class="h1"><?php the_field('titulo_banner'); ?></h1>
      <p><?php the_field('descricao_banner'); ?></p>
    </div>
    <p class="cta-banner"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons-whatsapp.png" alt="icon whatsapp">Para entrar em contato <span><a href="">clique aqui</a></span></p>
  </section>

  <!-- INTRODUÇÃO -->
  <section class="container introducao js-content" id="home">
    <div>
      <h1 id="text"><?php the_field('titulo_introducao'); ?></h1>
    </div>
    <div>
      <h2><?php the_field('subtitulo_introducao'); ?></h2>
      <p><?php the_field('descricao_introducao'); ?></p>
    </div>
  </section>

  <!-- NOSSA EQUIPE -->
  <section class="container equipe js-content" id="equipe">
    <h2 class="h2">Nossa equipe</h2>
    <ul class="lista-equipe">
      <li class="item-equipe">
        <img src="<?php the_field('imagem1'); ?>" alt="<?php the_field('legenda_imagem1'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv1'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
      <li class="item-equipe">
        <img src="<?php the_field('imagem2'); ?>" alt="<?php the_field('legenda_imagem2'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv2'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
      <li class="item-equipe">
        <img src="<?php the_field('imagem3'); ?>" alt="<?php the_field('legenda_imagem3'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv3'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
      <li class="item-equipe">
        <img src="<?php the_field('imagem4'); ?>" alt="<?php the_field('legenda_imagem4'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv4'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
      <li class="item-equipe">
        <img src="<?php the_field('imagem5'); ?>" alt="<?php the_field('legenda_imagem5'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv5'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
      <li class="item-equipe">
        <img src="<?php the_field('imagem6'); ?>" alt="<?php the_field('legenda_imagem6'); ?>">
        <div class="descricao-equipe">
          <h3 class="h3"><?php the_field('nome_adv6'); ?></h3>
          <button><a href="/advogados/">Saiba mais</a></button>
        </div>
      </li>
    </ul>
  </section>

  <!-- DIFERENCIAIS -->
  <section class="container diferencial js-content" id="diferencial">
    <h2 class="h2">Porque nos escolher</h2>
    <ul class="lista-diferencial">
      <li class="item-diferencial">
        <img src="<?php the_field('icon-diferencial_1'); ?>" alt="icon-imagem">
        <h3 class="h3"><?php the_field('titulo_diferencial_1'); ?></h3>
        <p><?php the_field('descricao_diferencial_1'); ?></p>
      </li>
      <li class="item-diferencial">
        <img src="<?php the_field('icon-diferencial_2'); ?>" alt="icon-imagem">
        <h3 class="h3"><?php the_field('titulo_diferencial_2'); ?></h3>
        <p><?php the_field('descricao_diferencial_2'); ?></p>
      </li>
      <li class="item-diferencial">
        <img src="<?php the_field('icon-diferencial_3'); ?>" alt="icon-imagem">
        <h3 class="h3"><?php the_field('titulo_diferencial_3'); ?></h3>
        <p><?php the_field('descricao_diferencial_3'); ?></p>
      </li>
    </ul>
    <button class="btn"><a href="#contato">Entre em contato</a></button>
  </section>

  <!-- AREA DE ATUAÇÃO -->
  <section class="container atuacao js-content" id="atuacao">
    <h2>Onde atuamos</h2>
    <ul class="lista-atuacao">
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_1'); ?></h3>
        <img src="<?php the_field('imagem_fundo_1'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_1'); ?></span>
          <p><?php the_field('descricao_atuacao_1'); ?></p>
        </div>
      </li>
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_2'); ?></h3>
        <img src="<?php the_field('imagem_fundo_2'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_2'); ?></span>
          <p><?php the_field('descricao_atuacao_2'); ?></p>
        </div>
      </li>
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_3'); ?></h3>
        <img src="<?php the_field('imagem_fundo_3'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_3'); ?></span>
          <p><?php the_field('descricao_atuacao_3'); ?></p>
        </div>
      </li>
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_4'); ?></h3>
        <img src="<?php the_field('imagem_fundo_4'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_4'); ?></span>
          <p><?php the_field('descricao_atuacao_4'); ?></p>
        </div>
      </li>
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_5'); ?></h3>
        <img src="<?php the_field('imagem_fundo_5'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_5'); ?></span>
          <p><?php the_field('descricao_atuacao_5'); ?></p>
        </div>
      </li>
      <li class="item-atuacao">
        <h3><?php the_field('titulo_atuacao_6'); ?></h3>
        <img src="<?php the_field('imagem_fundo_6'); ?>" alt="">
        <div class="atuacao-card card1">
          <span><?php the_field('subtitulo_hover_6'); ?></span>
          <p><?php the_field('descricao_atuacao_6'); ?></p>
        </div>
      </li>
      
    </ul>
  </section>

  <!-- DEPOIMENTOS -->
  <section class="container depoimento js-content">
    <h2 class="h2">O que dizem nossos clientes</h2>
    <ul class="lista-depoimento">
      <li class="item-depoimento">
        <img src="<?php the_field('foto_cliente_1'); ?>" alt="cliente 1">
        <h4><?php the_field('cliente_1'); ?></h4>
        <p><?php the_field('avaliacao_1'); ?></p>
      </li>
      <li class="item-depoimento">
        <img src="<?php the_field('foto_cliente_2'); ?>" alt="cliente 2">
        <h4><?php the_field('cliente_2'); ?></h4>
        <p><?php the_field('avaliacao_2'); ?></p>
      </li>
      <li class="item-depoimento">
        <img src="<?php the_field('foto_cliente_3'); ?>" alt="cliente 3">
        <h4><?php the_field('cliente_3'); ?></h4>
        <p><?php the_field('avaliacao_3'); ?></p>
      </li>
  
    </ul>
  </section>

  <!-- CONQUISTAS -->
  <section class="conquista">
    <div class="container js-content">
      <h2>Nossas conquistas</h2>
      <ul class="lista-conquista">
        <div class="div-conquista">
          <img src="<?php the_field('icon1'); ?>" alt="icon">
          <li class="item-conquista">
            <span><?php the_field('quantidade_servico_1'); ?></span>
            <p><?php the_field('descricao_servico_1'); ?></p>
          </li>
        </div>
        <div class="div-conquista">
          <img src="<?php the_field('icon2'); ?>" alt="icon">
          <li class="item-conquista">
            <span><?php the_field('quantidade_servico_2'); ?></span>
            <p><?php the_field('descricao_servico_2'); ?></p>
          </li>
        </div>
        <div class="div-conquista">
          <img src="<?php the_field('icon3'); ?>" alt="">
          <li class="item-conquista">
            <span><?php the_field('quantidade_servico_3'); ?></span>
            <p><?php the_field('descricao_servico_3'); ?></p>
          </li>
        </div>
        <div class="div-conquista">
          <img src="<?php the_field('icon4'); ?>" alt="">
          <li class="item-conquista">
            <span><?php the_field('quantidade_servico_4'); ?></span>
            <p><?php the_field('descricao_servico_4'); ?></p>
          </li>
        </div>
      </ul>
    </div>
  </section>

  <!-- PERGUNTAS -->
  <section class="container faq js-content">
    <h2>Perguntas frequentes</h2>
    <dl class="faq-lista js-accordion">
      <dt><?php the_field('pergunta_1'); ?></dt>
      <dd><?php the_field('resposta_1'); ?></dd>
      <dt><?php the_field('pergunta_2'); ?></dt>
      <dd><?php the_field('resposta_2'); ?></dd>
      <dt><?php the_field('pergunta_3'); ?></dt>
      <dd><?php the_field('resposta_3'); ?></dd>
      <dt><?php the_field('pergunta_4'); ?></dt>
      <dd><?php the_field('resposta_4'); ?></dd>
      <dt><?php the_field('pergunta_5'); ?></dt>
      <dd><?php the_field('resposta_5'); ?></dd>
    </dl>
  </section>

  <!-- CONTATO -->
  <section class="bg-contato" id="contato">
    <div class="container formulario js-content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235232.17500593877!2d-47.19585043859215!3d-22.894820724882997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8f6a2552649%3A0x7475001c58043536!2sCampinas%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1705332017502!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <form action="enviar.php" method="POST" class="form">
        <div>
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" placeholder="Nome" autocomplete="username" required>
        </div>
        <div>
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" id="telefone" placeholder="Telefone" autocomplete="tel" required>
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="email" required>
        </div>
        <div>
          <label for="mensagem">Mensagem</label>
          <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
        </div>
        <div>
          <button type="submit" class="btn btn-form">Enviar Mensagem</button>
        </div>
      </form>
    </div>
  </section>
  <?php get_footer(); ?>
