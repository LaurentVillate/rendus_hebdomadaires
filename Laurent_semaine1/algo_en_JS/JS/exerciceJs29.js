for (i=1; i>=1; i++){
    let n = window.prompt("Saisissez un nombre compris entre 10 et 20");
    if (n>=10 && n<=20){
        document.write(n + " OK!");
        break;
    }
    else if (n>20){
        window.alert("Plus petit!");
    }
    else{
        window.alert("Plus grand!");
    }
}

/* L'utilisateur doit saisir un nombre entre 10 et 20. S'il saisit un nombre plus petit ou plus grand, un message d'alerte s'affiche puis il doit resaissir un nombre.*/