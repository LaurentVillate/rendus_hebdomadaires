
let n = window.prompt("Saisissez un nombre");

for (i=0; i<=10; i++){
    document.write(n++ + "/");
}

/*L'utilisateur saisit un nombre. La boucle For effectue ensuite 10 itération afin d'afficher les 10 nombres suivant le nombre initial saisi.*/

/*Le résultat affiche n et les 10 chiffres après n. Il affiche donc le chiffre saisi par l'utilisateur, l'incrémentation se faisant après. Je m'attendrais à ce qu'il incrémente tout de suite le chiffre saisi.*/
