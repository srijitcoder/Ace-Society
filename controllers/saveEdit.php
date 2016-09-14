<?php
$id = $_REQUEST['id'];
$heading = $_REQUEST['heading'];
$content = $_REQUEST['content'];
$color = $_REQUEST['color'];
$catg = $_REQUEST['catg'];

if($color == 'Red'){
	$color_n = 1;
}
else if($color == 'Green') {
	$color_n = 2;
}
else if($color == 'Yellow'){
	$color_n = 3;
}
else if($color == 'Indigo') {
	$color_n = 4;
}

if($catg == 'Food'){
	$catg_n = 1;
}
else if($catg == 'Meeting') {
	$catg_n = 2;
}
else if($catg == 'Office'){
	$catg_n = 3;
}
else if($catg == 'Home') {
	$catg_n = 4;
}
else if($catg == 'Others') {
	$catg_n = 5;
}

include ('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);


    if($heading != null or $content != null){
    	$insert = "UPDATE notes set heading='$heading', content='$content', color='$color_n', catg='$catg_n' where id='$id'";
    	$conn->exec($insert);
    }
    else {	
    	
    }

    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>