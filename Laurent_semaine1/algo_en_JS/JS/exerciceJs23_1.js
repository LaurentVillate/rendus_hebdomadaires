let age = window.prompt("Entrez l'âge de l'enfant");

switch(true)
{
    case age>=12:
        document.write("Cadet");
        break;
    
    case age>=10:
        document.write("Minime");
        break;

    case age>=8:
        document.write("pupille");
        break;
    
    case age>=6:
        document.write("Poussin");
        break;
}