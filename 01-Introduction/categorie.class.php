<?php
      
/*--
 * Création d'une Classe Categorie
 * Une Classe est une entité regroupant des variables / propriétés et des fonctions.
 */

class Categorie{
    
    // -- Déclaration des propriétés de notre Class "Categorie"
    private $Libelle,
            $CollectionArticles = [];
    
    
        /**
    * Afin de pouvoir attribuer une valeur à mes différentes variables, je vais mettre en place un constructeur
    */
    
    public function __construct(
    $Libelle) {
        
        // -- Ici, nous allons attribuer à chaque proprité de notre classe, la valeur qui a été passée au constructeur.
        
        $this->Libelle = $Libelle;

    } // Fin de mon constructeur
    
     /**
    *Getters : fonctions qui vont avoir la charge de nous rencvoyer nos informations.
    * Nous aurons une fonction par propriété de notre classe.
    */
    
    public function getLibelle(){
        return $this->Libelle;
    }
    
    /**
    *@return the $CollectionArticles
    */
     public function getCollectionArticles(){
        return $this->CollectionArticles;
    }

    /**
    * Setters : fonctions qui vont avoir la charge de modifier les propriétés de notre class
    */
    
    public function setLibelle($NewLibelle){
        $this->Libelle = $NewLibelle;
    }
    
    /**
    * pezrmet d'ajouter un objet Article à notre tableau (collection) d'articles
    */
    
    public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles[] = $Article;
    }
    
    
} //Fin de ma classe




    