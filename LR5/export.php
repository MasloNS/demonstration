<?php
//require "inportexportpage.php";
// (A) CONNECT TO DATABASE
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


if (isset($_POST['export'])) {


// (B) HTTP CSV HEADERS
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"bikes_exported.csv\"");

// (C) GET USERS FROM DATABASE + DIRECT OUTPUT
//$out = fopen("php://output", "w");
$stmt = $pdo->prepare("SELECT * FROM types");
$stmt->execute();

echo "ID;Name";
echo "\r\n";
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo implode(";", [
           $row['id'], $row['name']
    ]);
    echo "\r\n";
    //fputcsv($out, $row);
}

echo "\r\n";
    $stmt = $pdo->prepare("SELECT * FROM bicycles");
    $stmt->execute();
   echo "ID;img_path;name;id_type;description;cost";
    echo "\r\n";
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
       echo implode(";", [
           $row['id'], $row['img_path'], $row['name'], $row['id_type'], $row['description'], $row['cost']
        ]);
       echo "\r\n";
       // fputcsv($out, $row);
    }
   //fclose($out);
    exit;
   
}

?>

