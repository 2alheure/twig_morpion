# Morpion (Tic Tac Toe)

## A propos de cette correction
Seuls PHP, Twig et TailwindCSS ont été utilisés (en plus de HTML / CSS).  
Ma classe Jeu contient toute la logique du jeu, ainsi que les différents éléments, tels que les joueurs.  
Les Joueur sont présents principalement pour la distinction lors de l'affichage, et idem pour les Jeton.  

## Installation
Pour tester ce code :
1. Assurez-vous de disposer de PHP 8 minimum (j'utilise la syntaxe PHP 8)
2. Téléchargez le dossier, ou clonez-le
3. Lancez la commande `composer install` pour télécharger les dépendances
4. Faites une partie ou deux ;-)

## Rappels
### Consignes
Créez un jeu de Morpion à l'aide des technologies suivantes :
- HTML
- CSS
- PHP
- Twig

### Conseils
1. Commencez par modéliser les différents éléments du jeu en PHP Orienté Objet.
2. Créez un template pour afficher le plateau
3. Créez une "page" (un script) pour effectuer **un** coup
4. Sur chaque case vide du plateau (dans le template) vous allez mettre un lien vers le script

### Conseils techniques
- Mémorisez les éléments grâce à une session
- Oubliez pas de vérifier si la grille est gagnante / égalitaire

