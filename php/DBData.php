<?php

class DBData
{

  private $dbh;

  public function __construct()
  {
    // Connexion à la bdd
    try {
      // Handler de gestion de connexion
      $this->dbh = new PDO('mysql:host=localhost;dbname=challenge_pdo_blog;charset=utf8', 'pdoblogchal', 'pdo_blog');
      echo 'Connexion établit avec succès<hr>';
    }
    catch (PDOException $e) {
      die('Erreur de connexion à la base de donnée : '.$e->getMessage());
    }
  }

  // Retourne la liste des tables de la base de donnée
  public function getTablesList()
  {
    $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE'";
    $result = $this->dbh->query($sql);

    $alldb = $result->fetchAll(PDO::FETCH_ASSOC);

    $liste ='';
    echo 'Liste des tables de la base : ';
    foreach ($alldb as $key => $value) {
      $liste .= $value['TABLE_NAME'].', ';
    }
    $liste = substr($liste, 0, -2);
    echo $liste;
  }

  // Retourne tous les articles par date de publication décroissante
  public function articlesDescendDate()
  {
    $sql = 'SELECT * FROM `articles` ORDER BY `articles`.`date_publication` DESC';
    $result = $this->dbh->query($sql);

    $descDate = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($descDate);
    // echo '</pre>';

    $liste ='';
    foreach ($descDate as $key => $value) {
      $liste .= '['.$value['id'].'] '.$value['date_publication'].' | ';
    }
    $liste = substr($liste, 0, -3);
    echo $liste;
  }

  // Retourne tous les articles par date de publication décroissante
  public function getArticleByCategoryId($id)
  {
    $sql = 'SELECT * FROM `articles` WHERE `articles`.`categorie_id` = '.$id;
    $result = $this->dbh->query($sql);

    $articleByCatId = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($descDate);
    // echo '</pre>';

    $liste ='';
    foreach ($articleByCatId as $key => $value) {
      $liste .= '['.$value['id'].'] '.$value['titre'].' - cat'.$value['categorie_id'].' | ';
    }
    $liste = substr($liste, 0, -3);
    echo $liste;
  }

  // Retourne un article via son id
  public function getArticleById($id)
  {
    // Méthode classique
    // $sql = 'SELECT * FROM `articles` WHERE `id` = '.$id;
    // $result = $this->dbh->query($sql);

    // Méthode plus sécurisée
    // Requête avec un paramètre nommé
    $sql = 'SELECT * FROM `articles` WHERE `id` = :id';
    // On prépare la requête
    $result = $this->dbh->prepare($sql);
    // On associe une valeur au paramètre nommé :id
    $result->bindValue(':id', $id, PDO::PARAM_INT);
    // On exécute la requête préparée
    $result->execute();

    $articleById = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($articleById);
    // echo '</pre>';

    echo '['.$articleById[0]['id'].'] '.$articleById[0]['titre'];
  }

  // Retourne la liste des auteurs par ordre alphabétique
  public function auteursAscdName()
  {
    $sql = 'SELECT `nom` FROM `auteurs` ORDER BY `auteurs`.`nom` ASC';
    $result = $this->dbh->query($sql);

    $ascAuteurs = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($ascAuteurs);
    // echo '</pre>';

    $liste ='';
    foreach ($ascAuteurs as $key => $value) {
      $liste .= $value['nom'].' | ';
    }
    $liste = substr($liste, 0, -3);
    echo $liste;
  }

  // Retourne un auteur via son id
  public function getAuteurById($id)
  {
    $sql = 'SELECT * FROM `auteurs` WHERE `auteurs`.`id` = '.$id;
    $result = $this->dbh->query($sql);

    $auteurById = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($articleById);
    // echo '</pre>';

    echo '['.$auteurById[0]['id'].'] '.$auteurById[0]['nom'];
  }

  // Retourne les catégories dans l'ordre définie sur la maquette
  public function getCategoriesByIdOrder()
  {
    $sql = 'SELECT * FROM `categories` ORDER BY `ordering` ASC';
    $result = $this->dbh->query($sql);

    $categories = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($categories);
    // echo '</pre>';

    $liste ='';
    foreach ($categories as $key => $value) {
      $liste .= '['.$categories[$key]['id'].'] '.$categories[$key]['intitule'].' | ';
    }
    $liste = substr($liste, 0, -3);
    echo $liste;
  }

  // Ajouter un article
  public function addArticle($article)
  {
    $sql = 'INSERT INTO `articles` (`id`, `titre`, `resume`, `corps`, `date_publication`, `visionnages`, `auteur_id`, `categorie_id`) VALUES (NULL, '.$article["titre"].', '.$article["resume"].', '.$article["corps"].', '.$article["date_publication"].', '.$article["visionnages"].', '.$article["auteur_id"].', '.$article["categorie_id"].');';

    $success = $this->dbh->exec($sql);

    echo '<p>';
    echo $success ? 'addArticle($article) Success' : 'addArticle($article) Error';
    echo '</p>';
  }

  // Supprimer un article via son id
  public function removeArticle($id)
  {
    $sql = 'DELETE FROM `articles` WHERE `articles`.`id` = '.$id;

    $success = $this->dbh->exec($sql);

    echo '<p>';
    echo $success ? 'removeArticle($id) Success' : 'removeArticle($id) Error';
    echo '</p>';
  }

  // Modifier un article
  public function editArticleWithId($id, $champ, $value)
  {
    $sql = 'UPDATE `articles` SET `'.$champ.'` = \''.$value.'\' WHERE `articles`.`id` = '.$id;

    $success = $this->dbh->exec($sql);

    echo '<p>';
    echo $success ? 'editArticleWithId($id, $champ, $value) Success' : 'editArticleWithId($id, $champ, $value) Error';
    echo '</p>';
  }

}

?>
