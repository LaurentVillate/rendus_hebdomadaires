let jour = window.prompt("saisissez un jour");
let mois = window.prompt("Saisissez un mois");
let an = window.prompt("saisissez une année");

switch(true){

case jour<=31 && (mois==1 || mois==3 || mois==5 || mois==7 || mois==8 || mois==10 || mois==12 ):
    document.write("Date valide");
    break;

case jour<=30 && (mois==4 || mois==6 || mois==9 || mois==11):
    document.write("Date valide");
    break;

case jour<=28 && mois == 2:
    document.write("Date valide");
    break;

case jour<=29 && mois == 2 && (an%4 == 0 && (!an%100 == 0 && an%400 == 0)):
    document.write("Date valide");
    break;

default:
    document.write("date non valide")
}






/*
La date est valide si le nombre de jours est inférieur ou égal à 30 ou 31 selon les mois concernés.
Pour le mois de février:
- la date est valide si le nombre de jour est inférieur ou égal à 28 hors année bissextile;
- la date est valide si le nombre e jour est inférieur ou égal à 29 si l'année est bissextile: l'année est divisible par 4 mais sont exclues les années divisibles par 100, sauf celles divisibles par 400.
*/



