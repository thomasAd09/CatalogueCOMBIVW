<?php $titre = "The Combi Brazil"; ?>

<?php ob_start(); ?>

<div class="container">
  <div class="row row-cols-4">
  <?php foreach ($produits as $produit): ?>
    <div class="col">
    <div class="divsize">
    <article>
      <header>
        <h3 class=""><?= $produit['titre'] ?></h3>
      </header>
      <h6><?= $produit['short_desc'] ?> </h6>
    <div class="divsize-price">
      <h4> <?= $produit['prix']?> €</p></h4>
    </div>  
    </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>