# Présantation de notre projet : MatchMyGame

- [Problèmatique](#pourquoi-matchemygame)
- [MatchMyGame qu'est que c'est ?](#matchmygame)
- [Notre équipe](#notre-équipe)
- [Choix des technologies](#quelles-technologies)
- [Notre organisation](#organisation)
- [Lancer le projet](#comment-lancer-le-projet)

## Pourquoi MatcheMyGame
Le projet vise à résoudre le problème des équipes aléatoires dans les jeux en équipe, en offrant aux utilisateurs la possibilité de choisir leurs coéquipiers en fonction de leurs préférences et de leurs statistiques de jeu, particulièrement lorsqu'ils souhaitent participer à des compétitions.

## MatchMyGame
Ce site est un moyen simple et efficace de trouver rapidement des personnes pour former une équipe équilibrée.
## Notre équipe
Pour la partie frontend nous avons KUICHEU Berol et MAHASSADI Antoine.
Pour le backend il y a DIOUF Amadou makhtar et BENGUIGUI Avidan.
CHARLERY Malcolm est asigné au rôle de lead dev et chef de projet.

## Quelles technologies ?
Nous avons opté pour Laravel en tant que framework côté serveur, en raison de notre familiarité avec le langage PHP. Pour la partie frontend, nous avons choisi Vue.js, privilégiant une alternative à React.js, qui est souvent utilisé dans des projets plus importants. Le choix de travailler avec des frameworks nous permet de structurer le projet, offrant une base solide et des facilités pour le développement, tout en adaptant notre approche à des travaux de moindre envergure.

## organisation
Nous collaborons sur un référentiel GitHub, où le travail est organisé en deux parties distinctes : un projet pour le frontend et un autre pour le backend. De manière logique, nous avons créé une branche distincte pour chaque projet. À partir de là, nous utilisons l'une ou l'autre comme base pour créer des branches supplémentaires dédiées à des tâches spécifiques. Cette approche nous permet de créer des pull requests pour chaque tâche individuelle, puis de fusionner l'ensemble dans la branche principale (main) à la fin du processus. Nous gérons les conflits un par un à chaque pull request pour assurer une intégration harmonieuse.

## Comment lancer le projet
Pour faire fonctionner le projet il faut lancer la la fois le server vue et celui de laravel. Pour ça il faut lancer unepremière comande pour vuejs dans le dossier corepondant

    npm run dev

puis le serveur de laravel dans un nouveau terminal : 

    php atisan serve