<?php
include ("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>
<!-------FORM TO INSERT VALUES FOR TABLE------->
<form method="post" name="upfrm" action="" enctype="multipart/form-data">
Upload Image <input type="file" name="uploadfile" value="" class="file_input" /><br><br>
id <input type="text" name="id" value=""/><br><br>
pokemon number <input type="text" name="pokemon_number" value=""/><br><br>
pokemon name <input type="text" name="pokemon_name" value=""/><br><br>
hp <input type="text" name="hp" value=""/><br><br>
atk <input type="text" name="atk" value=""/><br><br>
def <input type="text" name="def" value=""/><br><br>
spa <input type="text" name="spa" value=""/><br><br>
spd <input type="text" name="spd" value=""/><br><br>
spe <input type="text" name="spe" value=""/><br><br>
type <input type="text" name="type" value=""/><br><br>
ability <input type="text" name="ability" value=""/><br><br>
hidden_ability <input type="text" name="hidden_ability" value=""/> <br><br>

<input type="submit" name="submit" value="Submit"/> <br><br>

</form>

<?php 
//*When 'submit' button is clicked**/
if($_POST['submit'])
{   
	/**Declare and store variables for table fields */
	$id = $_POST['id'];
	$pokemon_number = $_POST['pokemon_number'];
	$pokemon_name = $_POST['pokemon_name'];
	$hp = $_POST['hp'];
	$atk = $_POST['atk'];
	$def = $_POST['def'];
	$spa = $_POST['spa'];
	$spd = $_POST['spd'];
	$spe = $_POST['spe'];
	$type = $_POST['type'];
	$ability = $_POST['ability'];
	$hidden_ability = $_POST['hidden_ability'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "PokemonImages/".$filename;
	/**function tp move image file and store in database */
    move_uploaded_file($tempname,$folder);

	//***If statement to check if inserted field values are not null to run insert query */
	if($filename!="" && $id!="" && $pokemon_number!="" && $pokemon_name!="" &&
	$hp!="" && $atk!="" && $def!="" && $spa!="" &&
	$spd!="" && $spe!="" && $type!="" && $ability!="" && $hidden_ability!="")
	{
		$query = "INSERT INTO pokemonindex VALUES ( '$folder', '$id', '$pokemon_number', '$pokemon_name' , 
		'$hp', '$atk', '$def', '$spa', '$spd', '$spe',
		'$type', '$ability', '$hidden_ability')";
		$data = mysqli_query($conn2, $query);
		/* Print confirmation if data was inserted correctly or not*/
        if($data)
        {
	        echo "Data inserted into database";
        }else {
	             echo "Error uploading data.";
              }
	}else {
		echo "All fields required";
	}

}
?>

</body>
</html>



