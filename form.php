<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hybreed';

$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($mysqli->connect_error)
{
	die("Unable to connect database: " . $mysqli->connect_error);
}

$name = $_POST['name'];
$shop_no = $_POST['shop_no'];
$redevelopment = $_POST['redevelopment'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$carpet_area= $_POST['carpet_area'];
$secretary_carpet= $_POST['secretary_carpet'];
$revised_area= $_POST['revised_area'];
$claimed_area= $_POST['claimed_area'];



if($name=='' || $email=='' || $mobile=='' )
{
	echo 3;
}
else
{
	$index2_img = $_FILES['index2']['name'];
	$index2_tmp = $_FILES['index2']['tmp_name'];
	$index2_size = $_FILES['index2']['size'];

	$propertycart_img = $_FILES['propertycart']['name'];
	$propertycart_tmp = $_FILES['propertycart']['tmp_name'];
	$propertycart_size = $_FILES['propertycart']['size'];

	//echo $propertycart_size."<br>";

	$loandocument_img = $_FILES['loandocument']['name'];
	$loandocument_tmp = $_FILES['loandocument']['tmp_name'];
	$loandocument_size = $_FILES['loandocument']['size'];

	//echo $loandocument_size."<br>";

	$anyother_img = $_FILES['anyother']['name'];
	$anyother_tmp = $_FILES['anyother']['tmp_name'];
	$anyother_size = $_FILES['anyother']['size'];

	//echo $anyother_size."<br>";

	$size=5120000;

	if($index2_size>=$size)
	{
		echo 6;
	}
	elseif($propertycart_size>=$size)
	{
		echo 6;
	}
	elseif($loandocument_size>=$size)
	{
		echo 6;
	}
	elseif($anyother_size>=$size)
	{
		echo 6;		
	}
	else
	{
		$valid_extensions = array('jpeg','jpg','png','pdf','ppt','pptx'); // valid extensions

		// get uploaded file's extension
		$index2_ext = strtolower(pathinfo($index2_img, PATHINFO_EXTENSION));
		$propertycart_ext = strtolower(pathinfo($propertycart_img, PATHINFO_EXTENSION));
		$loandocument_ext = strtolower(pathinfo($loandocument_img, PATHINFO_EXTENSION));
		$anyother_ext = strtolower(pathinfo($anyother_img, PATHINFO_EXTENSION));
	
		if(in_array($index2_ext, $valid_extensions) && in_array($propertycart_ext, $valid_extensions) && in_array($loandocument_ext, $valid_extensions) && in_array($anyother_ext, $valid_extensions))
		{
			$path = 'upload/'.$name;

			if (!file_exists($path)) 
			{
				mkdir($path, 0777, true);
			}

			$index2_path = $path.'/'.strtolower($index2_img); 
			$propertycart_path = $path.'/'.strtolower($propertycart_img); 
			$loandocument_path = $path.'/'.strtolower($loandocument_img); 
			$anyother_path = $path.'/'.strtolower($anyother_img); 

			/*echo $path;*/

			if(move_uploaded_file($index2_tmp,$index2_path) && move_uploaded_file($propertycart_tmp,$propertycart_path) && move_uploaded_file($loandocument_tmp,$loandocument_path) && move_uploaded_file($anyother_tmp,$anyother_path))
			{

				$sql = "INSERT INTO `form`(`name`, `shopno`, `redevelopment`, `email`, `mobile`, `carpetarea`, `index2`, `propertycart`, `loandocument`, `anyother`, `secretarycarpet`, `revisedarea`, `claimedarea`) VALUES ('".$name."','".$shop_no."','".$redevelopment."','".$email."','".$mobile."','".$carpet_area."','".$index2_path."','".$propertycart_path."','".$loandocument_path."','".$anyother_path."','".$secretary_carpet."','".$revised_area."','".$claimed_area."')";

				if (mysqli_query($mysqli, $sql)) 
				{
					echo 1;
				} 
				else 
				{
					echo "2". mysqli_error($mysqli);;		
				}
			}
		}
		else
		{
			echo 7;
		}
	}
}
?>
