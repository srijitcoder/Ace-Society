<?php
$id = $_REQUEST['id'];
$fav = $_REQUEST['fav_val'];

include('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);
    $insert = "UPDATE notes set fav='$fav' where id='$id'";
    $conn->exec($insert);
    if($fav == 1){
    	echo "<i class='fa fa-heart'></i>";
    }
    else {
    	echo "<i class='fa fa-heart-o'></i>";	
    }

   }
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>