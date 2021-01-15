let n = window.prompt("Entrez le nombre de valeurs dans le tableau");
let tableau = [];
let valeur = 0;

for (i=0; i<n; i++){
    valeur = window.prompt("nombre?");
    tableau[i] = valeur;

}

max =  Math.max(...tableau);
position = tableau.indexOf(max);
document.write(tableau + "<br>" + max + "<br>" + position);









/* L'utilisateur définit le nombre valeurs à entrer dans le tableau. Puis il entre les valeurs successives grace à une boucle for. 
Grace à la fonction Max.max, on recherche la valeur maximum. 
Un indexOf doit rechercher la position de cette valeur maximum. Problème: il affiche systématiquement -1, donc il ne trouve pas la valeur.
*/