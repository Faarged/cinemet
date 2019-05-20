# cinemet
Exercice de création d'un site de VOD (video on demand) débuté le 21/04/2019 et rendu le 20/05/2019

J'ai utilisé Bootstrap pour faire la page index, la navbar, le footer et la page admin, les autres pages étant
pré-faites, j'ai changé des détails comme des backgrounds ou des couleurs et tailles de police.
J'ai créé un MCD avec JMerise comportant les tables film, réalisateur, acteur et genre, et une fois 
transformé en MLD les tables de liaisons joue, possede et fait se sont ajoutées afin de lier chaque film
à ses données.
J'ai utilisé PDO pour la connexion à la BDD et de nombreux SELECT pour le site afin que chaque info viennent
de la BDD
J'ai créé une page admin que je n'ai volontairement pas relié au site avec la nécessité d'un mot de passe pour y avoir accès
sans création de compte au départ
La page admin permet d'ajouter un film avec une requete INSERT INTO via un formulaire fait avec Bootstrap, je n'ai a mon niveau
 pas encore réussi à créer les liaisons via le formulaire.
 On peut également supprimer un film de la base de données via la page admin, en saisissant l'id du film à supprimer
 avec une requete DELETE, pour etre sur de ne pas faire d'erreur, j'ai ajouté un dropdown bootstrap qui déroule le titre 
 et l'id de chaque film de la BDD
