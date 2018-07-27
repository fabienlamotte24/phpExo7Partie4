<?php
//Lancement de la fonction avec les paramètres demandés
 function identity($gender, $age){
   //Première condition si homme > 18 ans
   if($gender == 'homme' && $age > 18){
     echo 'Vous êtes un homme majeur';
   } elseif($gender == 'homme' && $age < 18){//Deusieme condition si homme < 18 ans
     echo 'Vous êtes un homme mineur';
   } elseif($gender == 'femme' && $age > 18){//Troisieme condition si femme > 18 ans
     echo 'Vous êtes une femme majeure';
   } else{//Quatrième condition si femme < 18 ans
     echo 'Vous êtes une femme mineure';
   }
 }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
<?= 
//Affectation des valeurs aux variable-paramètres
identity('homme',26);
?>
    </p>
  </body>
</html>
