<?php
// Definition des constantes et variables //
  define("LOGIN", "albert@afpa.fr");
  define("PASSWORD","123");
  $message = " ";
 
if (empty($_POST["login"]) || empty($_POST["password"])){
  $message = "Renseignez l'identifiant et le mot de passe";
  echo $message;
}
else if($_POST["login"] == LOGIN || $_POST["password"] == PASSWORD){
  // La session peut s'ouvrir//
  session_start();
// Le login de la session est enregistré //
  $_SESSION["login"] = LOGIN;
// L'utilisateur est redirigé vers la page demandé//
  echo "L'utilisateur est redirigé vers la page demandée.";
}
else{
  $message = "Vérifier l'identifiant et le mot de passe";
  echo $message;
}
  

/*  if(empty($_POST["login"]) && empty($_POST["password"])) {
  $erreur = "formulaire vide"
  echo $erreur;
}


if(empty($_POST["login"]) && empty($_POST["password"])) {
  else if($_POST["login"] !== LOGIN){
    $erreur = "Identifiant incorrect";
    echo $erreur;
}
elseif($_POST["password"] !== PASSWORD){  
  $erreur = "Mot de passe incorrect";
  echo $erreur;
}
else{
// La session peut s'ouvrir//
  session_start();
// Le login de la session est enregistré //
  $_SESSION["login"] = LOGIN;
// L'utilisateur est redirigé vers la page demandé//
  echo "L'utilisateur est redirigé vers la page demandée.";
}


  /*
  // Test de l'envoi du formulaire
  if(!empty($_POST)) 
  {
    // Identifiant et mot de passe sont-ils renseignés?//
    if(!empty($_POST["login"]) && !empty($_POST["password"])) 
    {
      // Identifiant et mot de passe sont-ils corrects?//
      if($_POST["login"] !== LOGIN) 
      {
        $erreur = "Identifiant incorrect";
      }
        elseif($_POST["password"] !== PASSWORD) 
      {  
        $erreur = "Mot de passe incorrect";
      }
        else
      {
        // La session peut session//
        session_start();
        // Le login de la session est enregistré //
        $_SESSION["login"] = LOGIN;
        // L'utilisateur est redirigé vers la page demandé//
       echo "L'utilisateur est redirigé vers la page demandée.";
      }
    }
      else
    {
      $erreur = "Veuillez renseigner votre identifiant et votre mot de passe";
      echo $erreur;
    }
  }

// confirmer que ce code fonctionne//
*/
?>

