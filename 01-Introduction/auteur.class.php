<?php
      
/*--
 * Création d'une Classe Auteur
 * Une Classe est une entité regroupant des variables / propriétés et des fonctions.
 */

class Auteur{
    
    // -- Déclaration des propriétés de notre Class "Auteur"
    private $Nom,
            $Prenom,
            $Email;
    
    
        /**
    * Afin de pouvoir attribuer une valeur à mes différentes variables, je vais mettre en place un constructeur
    */
    
    public function __construct(
    $Nom,
    $Prenom,
    $Email) {
        
        // -- Ici, nous allons attribuer à chaque proprité de notre classe, la valeur qui a été passée au constructeur.
        
        $this->Nom       = $Nom;
        $this->Prenom    = $Prenom;
        $this->Email     = $Email;

    } // Fin de mon constructeur
    
     /**
    *Getters : fonctions qui vont avoir la charge de nous rencvoyer nos informations.
    * Nous aurons une fonction par propriété de notre classe.
    */
    
    public function getNom(){
        return $this->Nom;
    }
        public function getPrenom(){
        return $this->Prenom;
    }
    
        public function getNomComplet(){
        return $this->Prenom. " ".$this->Nom;
    }
     public function getEmail(){
        return $this->Email;
    }

    /**
    * Setters : fonctions qui vont avoir la charge de modifier les propriétés de notre class
    */
    
    public function setNom($MonNouveauNom){
        $this->Nom = $MonNouveauNom;
    }
    
    
    
} //Fin de ma classe
    