document.forms["formulaire"];

let sexe = document.getElementById("sexe").value;
let age = parseInt(document.getElementById("age").value);

function imposition( ){
if (sexe = "M" && age>20){
    alert("Homme Imposable")
}
else if (sexe = "F" && (age>18 && age<35)){
    alert("Femme imposable")
}
else{
    alert("Non imposable")
}
}

/* Script dans le fichier Html */

/* let homme = sexe == "M" && age > 20;
let femme = sexe == "F" && (age>18 && age<35);

if (homme || femme = true){
    document.write("Homme imposable");
}
else{
    document.write("Non imposable");
}
*/


