<?php
$username = $_POST['username'];
$pwd = md5($_POST['pwd']);

include ('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);
   
    $sql_count = "SELECT count(id) from username where username='$username' and pwd='$pwd'" ;
    $query_count = $conn->query($sql_count);
	$final_count = $query_count->fetchColumn();

    if($final_count == 1){
    	session_start();
    	$_SESSION['keepen_ace']=$username;
    	header("location:../home.php");
    }
    else {	
    	echo "error:"." <a href='../index.php'>Re-Try</a>";
    }

    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>