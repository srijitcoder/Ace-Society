<?php
$id = $_REQUEST['id'];


include ('config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);

    	$sql = "SELECT * from notes where id='$id' limit 1" ;
    	$query = $conn->prepare($sql);
    	$query ->execute();
		$final = $query->fetchAll();

		foreach ($final as $row) {
			echo "


							<div class='EditMain' style='background: url(cat/".$row['catg']."l.jpg);background-size: cover;'>
							<div class='NewBg'>
								<div class='col-lg-8 col-md-8 col-sm-10 col-xs-10'>
									<input type='text' name='heading' class='NewHeading' id='EditHeading' placeholder='Heading' maxlength='13' value='".$row['heading']."'><br>
								</div> 

								<div class='col-lg-4 col-md-4 col-sm-2 col-xs-2 saveEdit' onclick='saveEdit(".$row['id'].")'>
									<i class='fa fa-floppy-o' style='color:";

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

									echo "'></i>
								</div>

								<div class='col-lg-12 col-sm-12 col-md-12 col-xs-12'>
									<textarea name='content' class='NewContent' id='EditContent' placeholder='Write your note here. :)'>".$row['content']."</textarea>
								</div>
							</div>
							<div class='NewFooter' style='background:";

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
								<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='text-align:left;margin-top:10px;'>
									<div class='category'>CATEGORY</div>
									<select class='catSelect' id='Editcatg'>";

									$catg_edit = $row['catg'];
									switch ($catg_edit) {
											case 1:
												echo "
													<option selected='selected'>Food</option>
													<option>Meeting</option>
													<option>Office</option>
													<option>Home</option>
													<option>Others</option>
												";
												break;
											
											case 2:
												echo "
													<option>Food</option>
													<option selected='selected'>Meeting</option>
													<option>Office</option>
													<option>Home</option>
													<option>Others</option>
												";
												break;

											case 3:
												echo "
													<option>Food</option>
													<option>Meeting</option>
													<option selected='selected'>Office</option>
													<option>Home</option>
													<option>Others</option>
												";
												break;

											case 4:
												echo "
													<option>Food</option>
													<option>Meeting</option>
													<option>Office</option>
													<option selected='selected'>Home</option>
													<option>Others</option>
												";
												break;

											case 5:
												echo "
													<option>Food</option>
													<option>Meeting</option>
													<option>Office</option>
													<option>Home</option>
													<option selected='selected'>Others</option>
												";
												break;
										}	
										

									echo "</select>
								</div>
								<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='text-align:right;margin-top:10px;'>
									<div class='category'>COLOUR</div>
									<select class='catSelect' id='EditcolorNew'>";

									$color_edit = $row['color'];
									switch ($color_edit) {
											case 1:
												echo "
													<option selected='selected'>Red</option>
													<option>Green</option>
													<option>Yellow</option>
													<option>Indigo</option>
												";
												break;
											
											case 2:
												echo "
													<option>Red</option>
													<option selected='selected'>Green</option>
													<option>Yellow</option>
													<option>Indigo</option>
												";
												break;

											case 3:
												echo "
													<option>Red</option>
													<option>Green</option>
													<option selected='selected'>Yellow</option>
													<option>Indigo</option>
												";
												break;

											case 4:
												echo "
													<option>Red</option>
													<option>Green</option>
													<option>Yellow</option>
													<option selected='selected'>Indigo</option>
												";
												break;
										}	

									echo "</select>
								</div>
							</div>
							</div>



			";
						
		} 
    


    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<!--











							<div class='NewBg'>
								<div class='col-lg-8 col-md-8 col-sm-10 col-xs-10'>
									<input type='text' name='heading' class='NewHeading' id='NewHeading' placeholder='Heading' maxlength='13' value=''><br>
								</div>  
								<div class='col-lg-4 col-md-4 col-sm-2 col-xs-2 saveNew'>
									<i class='fa fa-floppy-o'></i>
								</div>

								<div class='col-lg-12 col-sm-12 col-md-12 col-xs-12'>
									<textarea name='content' class='NewContent' id='NewContent' placeholder='Write your note here. :)'></textarea>
								</div>
							</div>
							<div class='NewFooter'>
								<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='text-align:left;margin-top:10px;'>
									<div class='category'>CATEGORY</div>
									<select class='catSelect' id='catg'>
										<option>Food</option>
										<option>Meeting</option>
										<option>Office</option>
										<option>Home</option>
										<option>Others</option>
									</select>
								</div>
								<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='text-align:right;margin-top:10px;'>
									<div class='category'>COLOUR</div>
									<select class='catSelect' id='colorNew'>
										<option>Red</option>
										<option>Green</option>
										<option>Yellow</option>
										<option>Indigo</option>
									</select>
								</div>
							</div>

							-->