
let tableau = [10, 10, 20, 20];
let n = tableau.length;
let som = 0;


for(i=0; i<n; i++){
    som = som + tableau[i];
}

document.write(tableau +"<br>");
document.write(som);