let i = 1;
let a = 0;
let p = 0;

while (i>=1){
    let n = parseInt(window.prompt("saisissez un premier nombre"));
    if (n == 0){
        break;
    }
    else if (n>a){
        p = i;
        a = n;   
    }
    i++;
}
document.write("Le plus grand de ces nombres est: " + a + " et sa position est: " + p);



/* L'utilisateur saisit un nombre. La boucle while tourne tant que le nombre saisi n'est pas un 0. Lorsque l'utilisateur sasit un 0 la boucle s'arrête; le plus grand nombre et sa position sont affichée.