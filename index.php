<?php

require 'Controleur/controleur.php';

try {
    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'billet') {
        if (isset($_GET['id'])) {
          $idProduit = intval($_GET['id']);
          if ($idProduit != 0)
            produit($idProduit);
          else
            throw new Exception("Identifiant de produit non valide");
        }
        else
          throw new Exception("Identifiant de produit non défini");
      }
      else
        throw new Exception("Action non valide");
    }
    else {
      accueil();  // action par défaut
    }
  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }