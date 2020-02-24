<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreCombi">Combi</h1></a>
        <p>Bienvenu dans le catalogue des combis.</p>
      </header>
      <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
      </div>
      <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
      </footer>
    </div> <!-- #global -->
  </body>
</html>