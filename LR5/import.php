<?php
// include mysql database configuration file
$dbHost = "localhost";
$dbName = "bikes";
$dbChar = "utf8";
$dbUser = "root";
$dbPass = "";
try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=$dbChar",
        $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]);
} catch (Exception $ex) { exit($ex->getMessage()); }

if (isset($_POST['import'])){
    $db =   new mysqli('localhost','root','','bikes');
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db->connect_error;
        exit();
    }

    if(($handle     =   fopen("bikes_exported.csv", "r")) !== FALSE){
        while(($row =   fgetcsv($handle)) !== FALSE){
            $db->query('INSERT INTO bicycles(id, img_path, name, id_type, description, cost) VALUES ("'.$row[0].'","'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'")');
        }
        fclose($handle);
    }
}