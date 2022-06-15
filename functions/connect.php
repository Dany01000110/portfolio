<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'intra_hct';
$db_host     = 'localhost';

try {
	$pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br/>";
    die();
}
?>