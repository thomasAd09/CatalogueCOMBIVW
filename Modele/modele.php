<?php

// Renvoie la liste des produits sur le catalogue
function getProduits() {
    $bdd = getBdd();
    $produits = $bdd->query(
        'SELECT ID_ARTICLE as id,
        TITRE as titre,
        PRIX as prix,
        DATE as date,
        REF_TYPE as type,
        SHORTDESC as short_desc
        FROM ARTICLES
        ORDER BY ID_ARTICLE desc');
    return $produits;
}

// Renvoie les informations sur un produit
function getProduit($idProduit) {
    $bdd = getBdd();
    $produit = $bdd->prepare(
        'SELECT ID_ARTICLE as id,
        TITRE as titre,
        PRIX as prix,
        DATE as date,
        REF_TYPE as type,
        SHORTDESC as short_desc,
        LONGDESC as long_desc
        FROM ARTICLES 
        where ID_ARTICLE=?');
    $produit->execute(array($idProduit));
    if ($produit->rowCount() == 1)
      return $produit->fetch();  // Accès à la première ligne de résultat
    else
     throw new Exception("Aucun produit ne correspond à l'identifiant '$idProduit'");
}

function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=Catalogue;charset=utf8', 't',
    't', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}