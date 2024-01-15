<?php 

require_once("../models/modelUtilisateur.php");

function inscription($post){
    if($_POST["nom"] == "" || $_POST["email"] == "" || $_POST["mdp"] == ""){
        $error_msg = "Certains champs sont vides";
        require("../inscription.php");
        return;
    }
    if (filter_var($post['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error_msg = "Adresse email invalide";
        require("../inscription.php");
        return;
    }
    $nom = $post["nom"];
    $email = $post["email"];
    $mdp = $post["mdp"];

    $utilisateur = new Utilisateur();
    $utilisateur->setNom($nom);
    $utilisateur->setEmail($email);
    $utilisateur->setMdp($mdp);
    User::ajouterUtilisateur($utilisateur);
    $success_msg = "Compte enregistrer";
    require("../inscription.php");
}