<?php
// Fonction pour poser une question et vérifier la réponse
function poserQuestion($question, $reponseAttendue) {
echo $question . "\n> ";
$reponse = trim(fgets(STDIN));

if (strtolower($reponse) == strtolower($reponseAttendue)) {
echo "Bonne réponse !\n\n";
return 10;
} else {
echo "Mauvaise réponse. La bonne réponse était : $reponseAttendue\n\n";
return 0;
}
}

// Variable pour stocker le score
$score = 0;
$nombreDeQuestions = 5;

echo "=== Petit Quiz Algorithmique en PHP ===\n\n";

// Question 1
$score += poserQuestion("1. Quel mot-clé permet de créer une fonction en PHP ?", "function");

// Question 2
$score += poserQuestion("2. Quel opérateur utilise-t-on pour vérifier l'égalité en PHP ? (ex: pour comparer 5 et 5)", "==");

// Question 3
$score += poserQuestion("3. Comment s'appelle la boucle qui s'exécute tant qu'une condition est vraie ?", "while");

// Question 4
$score += poserQuestion("4. Quel est le symbole pour les commentaires sur une ligne en PHP ?", "//");

// Question 5
$score += poserQuestion("5. Quel mot-clé permet d'arrêter une boucle en PHP ?", "break");

// Résultat final
echo "=== Résultat final ===\n";
echo "Vous avez obtenu $score / 50 points.\n";

// Calcul du pourcentage
$pourcentage = ($score / $nombreDeQuestions) * 100;
echo "Votre score : " . $pourcentage . "% de bonnes réponses.\n";

if ($score == 50) {
echo "Parfait, bravo !\n";
} elseif ($score >= 30) {
echo "Pas mal, continue comme ça.\n";
} else {
echo "Courage, un petit coup de révision et ça ira mieux !\n";
}
?>

