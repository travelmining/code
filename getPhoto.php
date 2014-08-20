<?php // getPhoto.php

require 'ini.php';
if (isset($_POST['cityPOI'])) $cityPOI = strip_tags($_POST['cityPOI']);
if (isset($_POST['cityname'])) $cityname = $_POST['cityname'];
else $cityname = "beijing";
$cityPOI = "%$cityPOI%";


try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $db->prepare("select photourl from photo_link where city=:city ");
    $stmt->bindParam(':city', $cityname, PDO::PARAM_STR, 50);
    $stmt->execute(); 
    $j = 0;
    while( $row = $stmt->fetch() )
        {
        if ($j == 0 ) {
			echo ' <div class="item active">';
			}
		else {
			echo ' <div class="item">';
			}
		echo ' <img src="image/' . $cityname . '/' .  $row['photourl'] . '">';
		echo ' <div class="container">';
		echo ' <div class="carousel-caption">';
		echo ' </div>';
		echo ' </div>';
		echo ' </div>';
		$j += 1;
        }

    $db = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }



?>


				