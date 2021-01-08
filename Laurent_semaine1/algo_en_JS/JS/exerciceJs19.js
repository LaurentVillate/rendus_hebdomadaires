let prixht = window.prompt("Saisissez le prix HT");
let quantite = window.prompt("Saisissez le nombre d'articles");
let TVA = window.prompt("saisissez le taux de TVA");
let total = (prixht * quantite) * (TVA/100 + 1);
document.write(total);