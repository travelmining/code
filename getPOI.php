
<?php

require 'ini.php';
if (isset($_POST['cityPOI'])) $cityPOI = strip_tags($_POST['cityPOI']);
if (isset($_POST['cityname'])) $cityname = $_POST['cityname'];
else $cityname = "beijing";
$cityPOI = "%$cityPOI%";
echo $cityname;

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $db->prepare("select type, poi from wikitravel_poi where city=:city and type like :type ");
    //$stmt = $db->prepare("select photourl from photo_link where city=:city ");
    $stmt->bindParam(':city', $cityname, PDO::PARAM_STR, 50);
    $stmt->bindParam(':type', $cityPOI, PDO::PARAM_STR, 50); 
    $stmt->execute(); 
    while( $row = $stmt->fetch() )
        {
        echo $row['poi'].'<br />';
        //echo $row['photourl'].'<br />';
        }

    $db = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>

