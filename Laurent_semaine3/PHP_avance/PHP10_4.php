
<!DOCTYPE html>
<html>
<head>
    <title>Essai validation formulaire de contact jarditou en php </title>
  </head>
    <body>
<form name="formJarditou" action="PHP10_4script.php" method="post" id="formulaire">
<!--formulaire première partie: coordonnées-->
            <fieldset>
            <legend><h3>Vos coordonnées</h3></legend>
                <div class="form-group">
                    <label for="nom">Votre prénom*</label>
                    <input type="text" class="form-control" name ="nom" id="nom" placeholder="Veuillez saisir votre nom" value= <?php if(isset($_GET["erreur"]) && $_GET["erreur"] == "nom") {echo $_GET["valeur"]}><br>
                    <!-- validation du prénom en php -->
                    <?php
                    if (isset($_GET["erreur"]) && $_GET["erreur"] == "nom")
                    {
                        echo"Le nom doit être renseigné.";  
                    } 
                    ?>    
                </div>
                <div class="form-group">
                    <label for="prenom">Votre prénom*</label>
                    <input type="text" class="form-control" name ="prenom" id="prenom" placeholder="Veuillez saisir votre prénom"><br>
                    <!-- validation du prénom en php -->
                    <?php
                    if (isset($_GET["erreur"]) && $_GET["erreur"] == "prenom")
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
                <div class="form-group">
                    <label for="postal">Code postal*</label>
                    <input type="text" class="form-control" name="postal" id="postal"><br>   
                    <!-- validation du code postal en php -->
                    <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "postal") 
                     {
                    echo"Le code postal doit être renseigné.";  
                    }
                    ?> 
                </div> 
                <div class="form-group">
                    <label for="adresse">Adresse*</label>
                    <input type="text" class="form-control" name ="adresse" id="adresse"><br>
                    <!-- validation de l'adresse en php -->  
                    <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "adresse") 
                     {
                    echo"L'adresse doit être renseignée.";  
                    }
                    ?> 
                </div> 
                <div class="form-group">
                    <label for="ville">ville*</label>
                    <input type="text" class="form-control" name="ville" id="ville"><br> 
                     <!-- validation de la ville en php -->  
                     <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "ville") 
                     {
                    echo"La ville doit être renseignée.";  
                    }
                    ?>
                </div> 
                <div class="form-group">
                    <label for="mail">Email*</label>
                    <input type="text" class="form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr"><br>  
                    <!-- validation de l'adresse mail en php --> 
                    <?php 
                    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "mail") 
                     {
                    echo"Le mail doit être renseigné.";  
                    }
                    ?>   
                </div> 
            </fieldset>
                <input type="submit" class="btn btn-dark" value="Envoyer" id="envoyer">
                <input type="submit" class="btn btn-dark" value="Annuler">
            </fieldset>             
        </form>
<!--fin du formulaire-->
</body>
