<?php var_dump($POST_sujet);?>
<!DOCTYPE html>
<html>
<head>
    <title>Essai validation formulaire de contact jarditou en php </title>
  </head>
    <body>
    <form name="jarditouessai" action="PHP10_3script.php" method="POST" id="formulaire">
    <fieldset>
            <legend><h3>Vos coordonnées</h3></legend>
                <div class="form-group">
                    <label for="nom">Votre nom*</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" value=""><Br>
                    <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom") 
                     {
                    echo"Le nom doit être renseigné.";  
                    }
                    ?> 
                </div>
                <div class="form-group">
                    <label for="prenom">Votre prénom*</label>
                    <input type="text" class="form-control" name ="prenom" id="prenom" placeholder="Veuillez saisir votre prénom" value=""><br>
                    <?php
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") 
                    {
                    echo"Le prénom doit être renseigné.";  
                    }
                    ?>
                </div>
                <div class="form-group">
                <legend class="col-form-label">Sexe*</legend>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="feminin" id="optionsexe" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="masculin" id="optionsexe2" value="option2">
                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date de naissance</label>
                    <input type="text" class="form-control" name="date" id="datenaissance" placeholder="jj/mm/aaaa"><br>
                    <!-- Validation date de naissance en php-->
                    <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "date") 
                     {
                    echo"La date doit être renseignée.";  
                    }
                    ?> 
                </div>
          </fieldset>
          <input type="submit" value="Envoyer">
        </form>
   </body>
</html>
