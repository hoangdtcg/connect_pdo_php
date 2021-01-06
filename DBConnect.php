<?php
/* Connect to a MySQL database using driver invocation */
//$dsn = 'mysql:host=localhost;dbname=demodb';
//$user = 'root';
//$password = '';
//
//try {
//    $conn = new PDO($dsn, $user, $password);
//    echo 'success';
//} catch (PDOException $e) {
//    echo 'Connection failed: ' . $e->getMessage();
//}
include_once 'DB.php';

$query = 'SELECT first_name FROM authors where id = 1';
$smtm = DB::connect()->prepare($query);
$smtm->execute();
$result = $smtm->fetch();
echo '<pre>';
print_r($result);

$conn = null;

?>