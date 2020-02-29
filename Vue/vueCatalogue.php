<?php $titre = "The Combi Brazil"; ?>

<?php ob_start(); ?>


<?php foreach ($produits as $produit): ?>
  <article>
    <header>
      <h3 class=""><?= $produit['titre'] ?></h3>
    </header>
    <h6><?= $produit['short_desc'] ?> </h6>
   <h4> <?= $produit['prix']?> €</p></h4>
  </article>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>