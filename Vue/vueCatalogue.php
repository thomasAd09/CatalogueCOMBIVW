<?php $titre = "The Combi Brazil"; ?>

<?php ob_start(); ?>

<a href='<?= "index.php?action=catalogue" ?>' target="_blank"> <button type="button" class="btn btn-warning">Catalogue</button></a>

<?php foreach ($produits as $produit): ?>
  <article>
    <header>
      <h3 class=""><?= $produit['titre'] ?></h3>
      <time><?= $produit['date'] ?></time>
    </header>
    <p><?= $produit['short_desc'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>