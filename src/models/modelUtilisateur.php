<?php

require_once("../../config/config.php");
class Utilisateur{
    public $id;
    public $nom;
    public $email;
    public $mdp;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
    public function getMdp(){
        return $this->mdp;
    }

    function ajouterUtilisateur($objetUtilisateur){
        // Se connecte a la bdd
        $db = initDb();
        // La requete sql
        $requete = $db->prepare("INSERT INTO utilisateur(utilisateurNom, utilisateurEmail, utilisateurMDP) VALUES (?,?,?)");
        $requete->execute([
            $objetUtilisateur->nom,
            $objetUtilisateur->email,
            $objetUtilisateur->mdp
        ]);
        // Recupère la dernière id et l'insère dans l'objet
        $this->id = $db->lastInsertId();
        // Ferme la connexion a la bdd
        $db = null;
    }
}