let score_A = window.prompt("Saisissez le score du candidat A");
let score_B = window.prompt("Saisissez le score du candidat B");
let score_C = window.prompt("Saisissez le score du candidat C");
let score_D = window.prompt("Saisissez le score du candidat D");

document.write("Le candidat A obtient " + score_A + "%<br>");
document.write("Le candidat B obtient " + score_B + "%<br>");
document.write("Le candidat C obtient " + score_C + "%<br>");
document.write("Le candidat D obtient " + score_D + "%<br>");

switch(true)
{
    case score_A>50:
        document.write("Le candidat A est élu au premier tour");
        break;
    
    case score_B>50 || score_C>50 || score_D>50:
        document.write("Le ccandidat A est battu au premier tour");
        break;

    case score_A>=score_B && score_A>=score_C && score_A>=score_D:
        document.write("Le candidat A est en ballotage favorable");
        break;
    
    case score_A<=12.5:
        document.write("Le candidat est éliminé");
        break;

    default:
        document.write("Le candidat est en ballotage défavorable")
}

/* Election avec 4 candidats. Le switch analyse le score du candidat A et affiche son résultat: élu 1er tour, battu 1er tour, ballotage favorable 2e tour, ballotage défavorable 2e tour, éliminé 2e tour */



