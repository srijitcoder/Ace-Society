<?php
$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$num = $_REQUEST['num'];


include ('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);
   	if($type == 'all')
    	$sql_count = "SELECT count(id) from notes where user_id='$id'" ;
    else if($type == 'color')
    	$sql_count = "SELECT count(id) from notes where user_id='$id' and color='$num'" ;
    else if($type == 'type')
    	$sql_count = "SELECT count(id) from notes where user_id='$id' and catg='$num'" ;
    else
    	$sql_count = "SELECT count(id) from notes where user_id='$id' and fav='$num'" ;

    $query_count = $conn->query($sql_count);
	$final_count = $query_count->fetchColumn();

    if($final_count > 0){
    	if($type == 'all')
    		$sql = "SELECT * from notes where user_id='$id'" ;
    	else if($type == 'color')
    		$sql = "SELECT * from notes where user_id='$id' and color='$num'" ;
    	else if($type == 'type')
    		$sql = "SELECT * from notes where user_id='$id' and catg='$num'" ;
    	else
    		$sql = "SELECT * from notes where user_id='$id' and fav='$num'" ;

    	$query = $conn->prepare($sql);
    	$query ->execute();
		$final = $query->fetchAll();

		foreach ($final as $row) {
			echo "
						<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
							<center>	
								<div class='cardNote'  style='background: url(cat/".$row['catg'].".jpg);background-size:cover;'>
									<div class='cardNoteOver'>
										<div class='colorLabel' style='background:"; 

										$color = $row['color'];
										switch ($color){
											case 1:
												echo "rgba(255, 0, 0, 0.48)";
												break;

											case 2:
												echo "rgba(78, 255, 0, 0.5)";
												break;

											case 3:
												echo "rgba(249, 255, 0, 0.5)";
												break;

											case 4:
												echo "rgba(141, 0, 255, 0.5)";
												break;
										}

										echo "'>
											<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 trash' onclick='trash(".$row['id'].")'>
											<i class='fa fa-trash-o'></i>
											</div>
										</div>

										<div class='noteHead'>
											<div class='col-lg-12 col-md-12 col-sm-12 colxs-12' onClick='generate(".$row['id'].")' style='cursor:pointer;'><a>"
												.$row['heading']."</a><br>
												<p class='noteBottom'>";
												
												$small_content = substr($row['content'], 0, 80);	
												echo $small_content;

												echo "[..] </p>	
											</div>
										</div>


										

										<div class='fav fav-".$row['id']."' onclick='favedit(".$row['id'].", ";
										
										if($row['fav'] == 0) {
											echo 1;
										}
										else {
											echo 0;
										}

										echo ")'>
											<i class='fa fa-heart";

											if($row['fav'] == 0) {
												echo "-o";
											}

											echo "'></i>
										</div>

										<div class='dateNote'>
											".$row['date']."
										</div>
									</div>
								</div>
							</center>
						</div>
			";
		} 
    }
    else {	
    	echo "

    		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style='margin-top:100px;'>
    			<center>
    				<div class='NoteNewCrete' onclick='createNote()'>
    					<i class='addNote fa fa-plus-circle' style='font-size:100px;margin-top:72px;'></i>
    				</div>
    			</center>
    		</div>

    	";
    }

    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

/*

		<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
			<center>	
				<div class='cardNote' style='background: url(../cat/food.jpg);'>
					<div class='cardNoteOver'>
						<div class='colorLabel' style='background: rgba(255, 0, 0, 0.48);'>

						</div>

						<div class='noteHead'>
							<div class='col-lg-12 col-md-12 col-sm-12 colxs-12'>
								Abcd<br>
								<p class='noteBottom'>
									Abcd emh ghu ojkd jki jkdj jhdj hhd hjdh dhh ojkd jki jkdj jhdj hhd hjdh dhh [..]
								</p>	
							</div>
						</div>

						<div class='fav'>
							<i class='fa fa-heart-o'></i>
						</div>

						<div class='dateNote'>
							Feb 2' 2016
						</div>
					</div>
				</div>
			</center>
		</div>

		*/

?>


