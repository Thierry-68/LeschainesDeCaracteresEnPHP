<?php
# Un message codé pour Indy
/* Voici comment procéder :

    Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".
    Récupère ensuite la sous-chaîne de la longueur du chiffre-clé en commençant à partir du 6ème caractère.
    Remplace les chaînes '@#?' par un espace.
    Pour finir, inverse la chaîne de caractères.

Lance ton code sur chacun des messages suivants, et poste ensuite le code PHP que tu as écrit, 
ainsi que les textes déchiffrés sur un Gist.

    message 1 : 0@sn9sirppa@#?ia'jgtvryko1
    message 2 : q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj
    message 3 : aopi?sgnirts@#?sedhtg+p9l!
*/
$message="0@sn9sirppa@#?ia'jgtvryko1";
// J'ai appris 
//$message="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
// toutes les ficelles
//$message="aopi?sgnirts@#?sedhtg+p9l!";
// des strings
$chiffreCle=(int)(strlen($message)/2);
$sousChaine=substr($message,5,$chiffreCle);
$sousChaine=str_replace("@#?"," ",$sousChaine);
$sousChaine=strrev($sousChaine);

echo "message décodé : $sousChaine";

