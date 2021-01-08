<?php
$a = $post["nombre_1"];
$b = $post["nombre_2"];
if (a<0 || b<0){
    echo "Le produit est négatif";
}
else if (a==0 || b==0){
    echo "le produit est nul";
}
else{
    echo "Le produit est positif";
}
?>