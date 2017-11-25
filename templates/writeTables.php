<?php

// Ajouter un article
$article = array();

$article = [
  'titre' => '\'Le syndrome de la page blanche.\'',
  'resume' => '\'Cette frustration quand le code ne vient pas, le temps passe, la deadline approche…\'',
  'corps' => '\'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\'',
  'date_publication' => 'CURRENT_TIMESTAMP',
  'visionnages' => '\'957\'',
  'auteur_id' => '\'1\'',
  'categorie_id' => '\'4\''
];

// $dbase->addArticle($article);



// -------------------------------------------------------- //

// Supprimer un article
$id = 4;

// $dbase->removeArticle($id);



// -------------------------------------------------------- //

// Modifier un article
$id = 4;
$champ = 'visionnages';
$value = 555;

// $dbase->editArticleWithId($id, $champ, $value);

?>
