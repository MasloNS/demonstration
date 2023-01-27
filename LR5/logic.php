<?php

$driver ='mysql';
$port='3306';
$host ='localhost';
$db_name='bikes';
$db_user ='root';
$db_pass='';
$charset= 'utf8';


try
{
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;port=$port;charset=$charset",
        $db_user,$db_pass
    );
}catch (PDOException $i)
{
    die("Ошибка подключения к базе данных");
}

$cost = '';
$typename = '';
$description = '';
$name='';
$str='';
$typeStr = 'Выберите вид';


$sql="SELECT t1.id, t1.img_path, t2.name as 'typename' , t1.name, t1.description, t1.cost
FROM bicycles AS t1 JOIN types AS t2 ON t1.id_type = t2.id";


$query=$pdo->prepare($sql);
$query->execute();
$bicycles= $query->fetchAll();




$query=$pdo->prepare("SELECT * FROM types ");
$query->execute();
$typenames = $query->fetchAll();





$arBind = [];
if(!key_exists('Clear',$_GET))
{
    if(count($_GET)>0)
    {
        $cost=$_GET['cost'];
        $description =$_GET['description'];
        $name=$_GET['name'];
        $isfirst=0;

        $sql .=" WHERE";
        if($_GET['cost'])
        {
            if(is_numeric($_GET['cost']))
            {
                if($isfirst!=0)
                    $sql .= " AND ";
                $sql .=" t1.cost = :cost  ";
                $arBind[':cost'] = htmlspecialchars($_GET['cost']);
                $isfirst=1;
            }
            else
            {
                $str="Неправильный ввод";
            }
        }
        if($_GET['description'])
        {
            if($isfirst!=0)
                $sql .= " AND ";
            $sql .=" t1.description  like :description  ";
            $arBind[':description'] = "%".htmlspecialchars($_GET['description'])."%";
            $isfirst=1;
        }
        if($_GET['typename'] and $typeStr!=$_GET['typename'])
        {
            if($isfirst!=0)
                $sql .= " AND ";
            $sql .=" t2.name= :typename ";
            $arBind[':typename'] = htmlspecialchars($_GET['typename']);
            $isfirst=1;
        }
        if($_GET['name'])
        {
            if($isfirst!=0)
                $sql .= " AND ";
            $sql .=" t1.name  like :name  ";
            $arBind[':name'] = "%".htmlspecialchars($_GET['name'])."%";
            $isfirst=1;
        }


        if(!empty($arBind))
        {
            $sth=$pdo->prepare($sql);
            $sth->execute($arBind);
            $bicycles=$sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
else $_GET['typename']="";


?>