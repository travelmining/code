<?php
include "functions.php";

if (isset($_POST['cityname'])) $cityname = $_POST['cityname'];
//else $cityname = "beijing";

$query = "select subcity,description from wikitravel_district where city='$cityname' ";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);

echo '<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">';
	echo '<div class="navbar-header">';
		echo '<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-js-navbar-scrollspy">';
		echo '<span class="sr-only">Toggle navigation</span>';
		echo '<span class="icon-bar"></span>';
		echo '<span class="icon-bar"></span>';
		echo '</button>';
	echo '<a class="navbar-brand" href="#">Overview</a>';
	echo '</div>';
   echo '<div class="collapse navbar-collapse bs-js-navbar-scrollspy">';
	echo '<ul class="nav navbar-nav">';
	for ($i = 0 ; $i < $rows ; ++$i)
	{
	if (strlen(mysql_result($result,$i,'description')) > 0) 
	echo '<li><a href="#' . mysql_result($result,$i,'subcity') . '">' . mysql_result($result,$i,'subcity') . '</a></li>';
	}
	echo '</ul>';
   echo '</div>';
echo '</nav>';

echo '<div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:400px;overflow:auto; position: relative;">';
	for ($i = 0 ; $i < $rows ; ++$i)
	{
	if (strlen(mysql_result($result,$i,'description')) > 0)  
		{
		echo '<h4 id="' . mysql_result($result,$i,'subcity') . '">' . mysql_result($result,$i,'subcity') . '</h4>';
		echo '<p>' . mysql_result($result,$i,'description') . '</p>';
		}
	}
echo '</div>';
?>