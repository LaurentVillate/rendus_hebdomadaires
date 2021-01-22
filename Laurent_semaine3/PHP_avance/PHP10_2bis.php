<!DOCTYPE html>
<!-- Essai pour valider la date dans formulaire jarditou-->
<html>
<head>
    <title>Formulaire d'authentification (exercice 10_1) </title>
  </head>
    <body>
        <form method=post action="PHP10_2bisscript.php">
          <fieldset>
          <div class="form-group">
                    <label for="datenaissance">Date de naissance</label>
                    <input type="text" class="form-control" name="date" id="datenaissance" placeholder="jj/mm/aaaa" value="<?php echo htmlentities($_POST["date"])?>"><br>
                    <!-- Validation date de naissance en php-->
                    <?php if(isset($erreur_date)){?>
                        <?php echo "<span style='color:red;'>$erreur_date</span>";?>
                        <?php }?>
                </div>
          </fieldset>
          <input type="submit" class="btn btn-dark" value="Envoyer" id="envoyer">
                <input type="submit" class="btn btn-dark" value="Annuler">
        </form>
   </body>
</html>


