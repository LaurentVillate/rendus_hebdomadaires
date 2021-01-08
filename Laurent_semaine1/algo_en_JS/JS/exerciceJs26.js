let age = window.prompt("Quel est votre âge?");
let permis = window.prompt("Combien d'années de permis?");
let accident = window.prompt("Combien d'accident(s)?");
let assurance = window.prompt("Depuis combien d'années êtes-vous assuré chez nous?");

let rouge = "Tarif rouge";
let orange = "Tarif orange";
let vert = "Tarif vert";
let bleu = "Tarif bleu";


switch(true)
{
    case assurance>5:
        rouge = orange;
        orange = vert;
        vert = bleu;
    
    case age<25 && permis<2 && accident<1 || age<25 && permis>2 && accident==1 || age>25 && permis>2 && accident>2:
        document.write(rouge);    
        break; 
            
    case age<25 && permis>2 && accident<1 || age>25 && permis>2 && accident==1:
        document.write(orange);
        break;

    case age>25 && permis>2 && accident<1:
        document.write(vert);
        break;

    default:
        document.write("Refusé");   
}

/* Le switch attribue un tarif d'assurance ou un avis de refus. Si le client est asssuré depuis 5 ans dans la maison il améliore son tarif.
 
        }*/