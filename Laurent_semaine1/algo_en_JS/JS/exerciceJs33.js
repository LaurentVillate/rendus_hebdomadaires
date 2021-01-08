let n = window.prompt("Saisissez un nombre");
let i = 1;
ad = 0;

for (i=1; i<n; i++){
    ad = ad + (ad + 1);
}
document.write(ad);


/*while (i<n){
    ad = ad + (ad + 1);
    i++;
}
document.write (ad + "<br>");
*/

/* L'utilisateur entre un nombre. La boucle calcule la somme des entiers jusqu'à ce nombre.*/