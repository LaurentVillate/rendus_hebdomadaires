let du = parseInt(window.prompt("Entrez la somme due"));
document.write("Somme due: " + du + "<br>");
let paiement = parseInt(window.prompt("Entrez la somme payée"));
document.write("Somme payée: " + paiement + "<br>");
let rendu = paiement - du;
document.write("Somme à rendre: " + rendu +"<br>");


if (rendu>10){
rendu_10 = Math.trunc(rendu/10);
document.write("Nombre de billet(s) de 10 € à rendre = " + rendu_10 +"<br>");

rendu_5 = Math.trunc((rendu%10)/5);
document.write ("Nombre de billet(s) de 5 € à rendre = " + rendu_5 +"<br>");

rendu_1 = rendu%5;
document.write("Nombre de pièces de 1 € à rendre: " + rendu_1);
}

else if (rendu>5){
    rendu_5 = Math.trunc((rendu)/5);
document.write ("Nombre de billet(s) de 5 € à rendre = " + rendu_5 +"<br>");

rendu_1 = rendu%5;
document.write("Nombre de pièces de 1 € à rendre: " + rendu_1);
}

else{
    rendu_1 = rendu;
document.write("Nombre de pièces de 1 € à rendre: " + rendu_1);
}

/* On rentre un prix, puis la somme que remet le client. La somme à rendre s'affiche et se décompose en 3: les billets de 10 à rendre, les billets de 5, les pièces de 1. Les conditions prennent en compte les cas où la somme à rendre est supérieure à 10, à 5, ou inférieur à 5.*/


