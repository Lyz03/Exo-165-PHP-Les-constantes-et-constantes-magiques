<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const CONST1 = 12;
const CONST2 = 2;

echo "<p>" . CONST1 * CONST2 . "</p>";

const CONST3 = "C'est cool PHP";

echo "<p>" . (CONST1 + CONST2) * strlen(CONST3) . "</p>";

/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __LINE__ . "<br>";