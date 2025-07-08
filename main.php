<?php
// Fonction pour poser une question et vérifier la réponse
function poserQuestion($question, $reponseAttendue) {
echo $question . "\n> ";
$reponse = trim(fgets(STDIN));

if (strtolower($reponse) == strtolower($reponseAttendue)) {
echo "############################################################\n";
echo "Bonne réponse !\n\n";
echo "############################################################\n";
return 10;
} else {
echo "############################################################\n";
echo "Mauvaise réponse. La bonne réponse était : $reponseAttendue\n\n";
echo "############################################################\n";
return 0;
}
}

// Variable pour stocker le score
$score = 0;
$nombreDeQuestions = 5;
echo "############################################################\n";
echo "=== Petit Quiz Algorithmique en PHP ===\n\n";
echo "Score : $score \n\n";
echo "############################################################\n";

// Question 1
$score += poserQuestion("1. Quel mot-clé permet de créer une fonction en PHP ?", "function");

echo "############################################################\n";
echo "Vous avez obtenu $score / 50 points.\n\n";
echo "############################################################\n";

// Question 2
$score += poserQuestion("2. Quel opérateur utilise-t-on pour vérifier l'égalité en PHP ? (ex: pour comparer 5 et 5)", "==");

echo "############################################################\n";
echo "Vous avez obtenu $score / 50 points.\n\n";
echo "############################################################\n";


// Question 3
$score += poserQuestion("3. Comment s'appelle la boucle qui s'exécute tant qu'une condition est vraie ?", "while");

echo "############################################################\n";
echo "Vous avez obtenu $score / 50 points.\n\n";
echo "############################################################\n";


// Question 4
$score += poserQuestion("4. Quel est le symbole pour les commentaires sur une ligne en PHP ?", "//");

echo "############################################################\n";
echo "Vous avez obtenu $score / 50 points.\n\n";
echo "############################################################\n";


// Question 5
$score += poserQuestion("5. Quel mot-clé permet d'arrêter une boucle en PHP ?", "break");


// Résultat final
echo "############################################################\n";
echo "=== Résultat final ===\n";
echo "Vous avez obtenu $score / 50 points.\n";
echo "############################################################\n";

// Calcul du pourcentage
$pourcentage = ($score / $nombreDeQuestions) * 10;
echo "############################################################\n";
echo "Votre score : " . $pourcentage . "% de bonnes réponses.\n";
echo "############################################################\n";

if ($score == 50) {
echo "############################################################\n";
echo "Parfait, bravo !\n";
echo "############################################################\n";

} elseif ($score >= 30) {
echo "############################################################\n";
echo "Pas mal, continue comme ça.\n";
echo "############################################################\n";
} else {
echo "############################################################\n";
echo "Courage, un petit coup de révision et ça ira mieux !\n";
echo "############################################################\n";
}
?>

