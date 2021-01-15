<?php

$repertoire = "/Users/laurentvillate/Desktop/essais_php";

$fichiers = scandir($repertoire);

print_r($fichiers);

// Voir le cas où il y a des sous-répertoires//

// Quelque chose de ce genre est censé marcher...//

/*$dir = new DirectoryIterator("/Users/laurentvillate/Desktop/EssaiJavacript/essaisJavascript");

echo '<ul>';

foreach ($dir as $fileinfo)

{   

    if (!$fileinfo->isDot()) {

       echo '<li><a href="'.$fileinfo->getFilename().'" target="_blank">'.$fileinfo->getFilename().'</a></li>'; 

    }

}

echo '</ul>';
*/
?>


