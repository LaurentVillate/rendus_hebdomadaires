// Repositionner les nombres d'un tableau dans l'ordre croissant//
let tab = [45, 122, 3, 21, 78, 64, 53, 89, 28, 84, 46];
document.write(tab);

for (i = 0; i<=10 ; i++){
// A chaque tour de boucle, pour démarrer le processus, on décide que tab[i] est (provisoirement) le plus petit élément//
    mini = i;
// La seconde boucle examine tous les élément après tab[i]. D'où: j = +1 //
    for (j=i+1; j<11; j++){
// La condition teste si tab[j] est inférieur à tab[mini]//
        if(tab[j]<tab[mini]){
            mini = j;
        }
// Le plus petit élément étant identifié, on effectue la permutation//
// Le plus petit élément est placé dans une variable temp//
        temp = tab[mini];
// Le plus petit élément remplace tab[i]//
        tab[mini] = tab[i];
// La variable temp remplace tab[i]//
        tab[i] = temp;
    }
}

document.write("<br>Tableau dans l'ordre croissant" + tab);









//variante//

/*for (i=0; i<11; i++){
    for(j=0; j<11; j++){
        if(tab[j]>tab[i]){
            temp = tab[i];
            tab[i] = tab[j];
            tab[j] = temp;
        }
    }   
}
document.write("<br>Tableau dans l'ordre croissant" + tab);*/



// A chaque fois qu'une valeur plus petite est trouvée, l'échange se fait.