<?php
$id = $_REQUEST['id'];

include ('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);
    $insert = "DELETE from notes where id='$id'";
    $conn->exec($insert);

    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>