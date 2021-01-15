let n = window.prompt("Combien d'élèves dans la classe?");
let tab = [];
let notes = 0;
let total = 0;


for (i=0; i<n; i++){
    notes = parseInt(window.prompt("Saisissez la note de l'élève"));
    tab[i] = notes; 
    total = total + tab[i];
}

let moyenne = total/n;
let notes_sup = [];

for (i=0; i<n; i++){
    if (tab[i]>moyenne){
        notes_sup[i] = tab[i];
    }
}
document.write(tab + "<br>" + moyenne + "<br>" + notes_sup);





/* L'utilisateur saisit le nombre d'élèves (rangés dans un tableau) dans une classe. Une boucle for permet ensuite de saisir les notes des élèves. 
Puis la moyenne de la classe est calculée. une boucle stocke les notes supérieures à la moyenne dans un tableau.
*/