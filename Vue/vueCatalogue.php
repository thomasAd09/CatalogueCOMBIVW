<<<<<<< HEAD

<?php $titre = 'The Combi Brazil'; ?>
=======
<?php $titre = 'Combi'; ?>
>>>>>>> cdfb9acd4d85a525413ff62e0e6b24fe9d07b4e0

<?php ob_start(); ?>
<?php foreach ($produits as $produit): ?>
  <article>
    <header>
      <h1 class=""><?= $produit['titre'] ?></h1>
      <time><?= $produit['date'] ?></time>
    </header>
    <p><?= $produit['short_desc'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

<form method="post" action="index.php?action=poster">
    <input type="file" name="file">
    <input type="submit" name="sumbit">
</form>