<?php

// Le code du blog qui fait appel à la classe DBData
// c'est cette classe DBData qui communique avec MySQL, via PDO

require_once 'DBData.php';

$dbase = new DBData();

require_once '../templates/content.php';

?>
