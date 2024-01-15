# Projet : Système de Gestion de Bibliothèque

##  Objectif : Construire une application web pour gérer les livres d'une bibliothèque.

### 1. Structure du Projet (MVC) :

Modèle : Classes pour interagir avec la base de données (livres, utilisateurs).
Vue : Fichiers HTML/PHP pour l'affichage des données (interface de gestion, formulaires, messages d'erreur).
Contrôleur : Scripts PHP gérant la logique (traitement des requêtes, communication entre le modèle et la vue).

PS:  Beaucoup de technique sont possibles,  essayez  de séparés selon les  roles  ci-dessus.

AIDE (PS2): Si vous  retirez  les  Controleur, dites vous que la logique se trouve en haut des fichiers de Vue. :lamp_bulb:

### 2. Utilisation de PDO :

Connexion à une base de données SQL via PDO.
Requêtes préparées pour insérer, lire, mettre à jour et supprimer des données (CRUD) sur les livres.

### 3. Vérification et Validation des Données :

Formulaire de saisie pour ajouter ou modifier les livres (titre, auteur, année de publication).
Validation côté serveur en PHP (vérifier que les champs sont remplis, que l'année est valide, etc.).
Affichage des messages d'erreur en cas de données invalides.

###  4. Scénarios à Implémenter :

Ajout d'un nouveau livre.
Affichage de la liste des livres avec possibilité de les modifier ou supprimer.
Recherche de livres par titre ou auteur.
Gestion des erreurs (livre inexistant, données invalides).

### 5. Extensions Possibles :

Authentification des utilisateurs.
Gestion des emprunts de livres.


---

## Objectifs d'Apprentissage :

Maîtriser l'utilisation de PDO pour interagir avec une base de données SQL.
Comprendre et appliquer le modèle MVC (Modèle-Vue-Contrôleur) dans un projet PHP.
Savoir vérifier et valider les données reçues de l'utilisateur et afficher les erreurs correspondantes.
Description du Projet :
Vous allez développer une application web de gestion de bibliothèque. Cette application permettra d'ajouter, de consulter, de modifier et de supprimer des livres dans une base de données. Elle devra être développée en utilisant PHP et une base de données SQL avec l'approche PDO et suivre l'architecture MVC.

## Fonctionnalités Requises :

Connexion à la Base de Données : Utilisez PDO pour établir une connexion sécurisée.
CRUD des Livres : Implémentez les fonctionnalités pour créer, lire, mettre à jour et supprimer des livres.
Validation des Données : Assurez-vous que les données saisies dans les formulaires sont valides. Gérez et affichez les erreurs de saisie.
Interface Utilisateur : Créez des vues claires pour l'ajout de livres, l'affichage de la liste des livres, et la modification/suppression.
Recherche : Permettez aux utilisateurs de rechercher des livres par titre ou auteur.

## Critères d'Évaluation :

Respect de l'architecture MVC.
Sécurité et efficacité de l'utilisation de PDO.
Exactitude de la validation des données et gestion des erreurs.
Clarté et fonctionnalité de l'interface utilisateur.
Code propre, bien commenté et organisé.
