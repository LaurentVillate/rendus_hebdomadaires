let n = window.prompt("Entrez le nombre de valeurs dans le tableau");
let negatif = 0;
let positif = 0;

let tableau = [];

for (i=0; i<n; i++){
    
    let valeur = window.prompt("Entrez un nombre");
    tableau[i]= valeur;
    
    if (valeur<0){
        negatif++;
    }
    else{
    positif++;
    }
}

document.write(tableau + "<br>");
document.write("Nombre de valeurs positives: " + positif + "<br>");
document.write("Nombre de valeurs négatives :" + negatif + "<br>");