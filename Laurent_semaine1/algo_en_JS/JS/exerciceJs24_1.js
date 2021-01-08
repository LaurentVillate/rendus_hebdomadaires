let sexe = document.getElementById("sexe").value;
let age = document.getElementById("age").value


if (sexe == "M" && age>20){
    window.alert("Homme Imposable")
}
else if (sexe == "F" && (age>18 && age<35)){
    window.alert("Femme imposable")
}
else{
    window.alert("Non imposable")
}
