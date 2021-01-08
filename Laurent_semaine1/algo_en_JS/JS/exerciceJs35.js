

let a = 0;
let p = 0;
for (i=1; i<=4; i++){
    let n = parseInt(window.prompt("saisissez un premier nombre"));
    if (n>a){
        p = i;
        a = n;   
    }   
}
document.write("Le plus grand de ces nombres est: " + a + " et sa position est: " + p);

/* L'utilisateur entre 4 nombres. La boucle sélectionne le plus grand de ces nombres et indique sa position*/

