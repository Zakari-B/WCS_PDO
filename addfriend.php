<?php

require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);

$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);

if ($firstname != "" && $lastname != "") {
    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
    $statement->execute();
    header("Location: index.php");
    exit;
}
