<?php $titre = 'Combi'; ?>

<?php ob_start(); ?>
<?php foreach ($produits as $produit): ?>
  <article>
    <header>
      <h1 class="titreBillet"><?= $produit['titre'] ?></h1>
      <time><?= $produit['date'] ?></time>
    </header>
    <p><?= $produit['contenu'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

<form method="post" action="index.php?action=poster">
    <input type="file" name="file">
    <input type="submit" name="sumbit">
</form>