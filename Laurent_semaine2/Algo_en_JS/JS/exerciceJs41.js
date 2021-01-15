let n = window.prompt("Entrez le nombre de valeurs dans le tableau");

let tableau = [];
let tableau_plus = [];

for (i=0; i<n; i++){
    
    let valeur = parseInt(window.prompt("Entrez un nombre"));
    tableau[i]= [valeur];
    tableau_plus[i]= valeur + 1;

}

document.write(tableau + "<br>" + tableau_plus);

/* L'utilisateur définit le nombre valeurs à entrer dans le tableau. Puis il entre les valeurs. Dans un nouveau tableau, la boucle For range chaque valeur + 1*/