<?php include_once('dados/dados.php');?>
<div class="bg-produtos">
</div>
<section class="produtos-container">
  <h2 class="title">Produtos</h2>
  <div class="produtos-content">
    <?php foreach($produtos as $produto) : ?>
    <div class="produto-item">
      <div class="img">
        <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
      </div>
      <h3 class="produto-titulo"><?=$produto['nome']?></h3>
      <p class="preco"><span>R$ </span><?=$produto['preco']?></p>
      <a href="<?='pages/produto.php?id='.$produto['id']?>" class="btn btn-comprar">SAIBA MAIS</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>