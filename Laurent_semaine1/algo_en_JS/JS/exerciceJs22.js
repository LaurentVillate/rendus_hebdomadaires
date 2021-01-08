let n = window.prompt("Saisissez un nombre");
if (n<0){
    document.write("Nombre négatif");
}
else if (n == 0){
    document.write("Zéro!");
}
else{
    document.write("Nombre positif");
}