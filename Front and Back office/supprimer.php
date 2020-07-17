<?php 
function connect_to_database()
{
    $servername = "localhost";
    $username = "Summer";
    $password = "2020";
    $databasename = "devblog01";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

try {
    $pdo = connect_to_database();
$id = $_GET['id'];
$sql = "DELETE FROM utilisateurs WHERE id=$id ";
$pdo->exec($sql);
header('location: back.php?page=utilisateurs');
}catch (PDOException $e) {
    $e->getMessage();
}
