<?php

require 'Controleur/controleur.php';

try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'catalogue') {
      catalogue();
    }
    else {
      throw new Exception("Action non valide");
    }
  }
  else {
    accueil();  // action par défaut
  }
}
catch (Exception $e) {
    erreur($e->getMessage());
}