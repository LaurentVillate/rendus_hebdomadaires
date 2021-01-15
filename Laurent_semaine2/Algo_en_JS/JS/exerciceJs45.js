
//Exemple de recherche d'une valeur dans un tableau, traité dans le cour de C. Darmangeat//
// On crée un tableau avec 5 valeurs en entier. L'utilisateur saisit un entier n//
let tab = [1, 4, 18, 3, 12];
let n = window.prompt("Saisissez un nombre");

// Une boucle while parcourt les occurences du tableau tant que n n'est pas présent dans le tableau//
i = 0;
while (n != tab[i] && i<5){
    i++;
}
//Si n est égal à un entier du tableau, un message "fait parti du..." s'affiche; sinon: un message "ne fait pas partie..."//
    if (n == tab[i]){
    document.write(n + " fait partie du tableau")
    }
    else{
    document.write(n + " ne fait pas partie du tableau")
    } 


// NB: Ce code met en oeuvre une transformation de Morgan (ce que je comprends plus ou moins...) //





