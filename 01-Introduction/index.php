<?php

include 'article.class.php';
include 'auteur.class.php';
include 'categorie.class.php';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $UnArticle est un objet de la classe Article.
* En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
*/

$Auteur = new Auteur ('RICHARD', 'Luc', 'luc@gmail.com');

$UnArticle = new Article("La formation WF3", "Une formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez !", "wf3.jpg", "04/08/2017");

/*
$UnArticle->setAuteur($Auteur);
*/

//* Afficher l'objet Article
echo '<pre>';
print_r($UnArticle);
echo '</pre>';


$DeuxArticle = new Article("La Martinique", "Une île pour les vacances !", "Venez nombreux !", "mart.jpg", "04/08/2017");

$DeuxArticle->setAuteur($Auteur);

//* Afficher l'objet Article
echo '<pre>';
print_r($DeuxArticle);
echo '</pre>';


// -- Je veux afficher le Titre de mon Premier Article
// -- echo $UnArticle->Titre;
# :  Uncaught Error: Cannot access private property Article::$Titre

echo $UnArticle->getTitre();
echo '<br>';
echo $UnArticle->getAccroche();
echo '<br>';
echo $UnArticle->getDescription();
echo '<br>';
echo $UnArticle->getFeaturedImage();
echo '<br>';
echo $UnArticle->getDateCreationArticle();

//-- ici, je vais modifier le titre de mon article
echo '<br><br>';
echo $UnArticle->setTitre('La formation WebForce3');
echo $UnArticle->getTitre();

echo '<pre>';
print_r($UnArticle);
echo '</pre>';


/**
* Création d'une instance de la Class "Auteur"
* Ici, notre variable $UnAuteur est un objet de la classe Auteur.
* En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
*/

$UnAuteur = new Auteur("Michel", "Jacquie", "micheletjaquie@free.fr");

//* Afficher l'objet Article
echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

$DeuxAuteur = new Auteur("Richard", "Luc", "lucrichard@free.fr");

//* Afficher l'objet Auteur
echo '<pre>';
print_r($DeuxAuteur);
echo '</pre>';


// -- Je veux afficher le Titre de mon Premier Article
// -- echo $UnArticle->Titre;
# :  Uncaught Error: Cannot access private property Article::$Titre

echo $UnAuteur->getNom();
echo '<br>';
echo $UnAuteur->getPrenom();
echo '<br>';
echo $UnAuteur->getEmail();


//-- ici, je vais modifier le titre de mon article
echo '<br><br>';
echo $UnAuteur->setNom('Marcel');
echo $UnAuteur->getNom();

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';


$TroisArticle = new Article("Lille", "Une île du Nord !", "Venez nombreux chez Maurice !", "lille.jpg", "04/08/2017");

$TroisArticle->setAuteur($Auteur);


$QuatreArticle = new Article("Lyon", "Ville lumière !", "ça se passe au mois de décembre !", "lyon.jpg", "04/08/2017");

$QuatreArticle->setAuteur($Auteur);


echo '<pre>';
print_r($TroisArticle);
echo '</pre>';

echo '<pre>';
print_r($QuatreArticle);
echo '</pre>';

echo '<hr>';

$UneCategorie = new Categorie('Voyage');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($DeuxArticle);
$UneCategorie->AjouterUnArticle($TroisArticle);
$UneCategorie->AjouterUnArticle($QuatreArticle);

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo '<hr>';

echo '<ol>';
    echo '<li>';
        echo $UneCategorie->getLibelle();
    echo '</li>';
    echo '<ul>';
        $articles = $UneCategorie->getCollectionArticles ();
        foreach ($articles as $article) :
            echo "<li>". $article->getTitre() ."-".
                $article->getAuteur()->getNomComplet() ."</li>";
        endforeach;
    echo '</ul>';
echo '</ol>';

echo '<hr>';

/* associer un auteur à un article
*
*
*/

