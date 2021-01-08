let n = window.prompt("Saisissez un nombre");
let i = 0;

do {
    document.write(n++ + "/");
    i++;
}
while (i<=10);



/*L'utilisateur saisit un nombre. La boucle While effectue ensuite 10 itérations afin d'afficher les 10 nombres suivant le nombre initial saisi.*/

/*Le résultat affiche n et les 10 chiffres après n. Il affiche donc le chiffre saisi par l'utilisateur, l'incrémentation se faisant après. Je m'attendrais à ce qu'il incrémente tout de suite le chiffre saisi.*/


