<?php
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'college';

$conn = new PDO('mysql:host='.$db_server.';dbname='.$db_name, $db_user, $db_password);
?>
