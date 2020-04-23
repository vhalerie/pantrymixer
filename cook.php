<html>

<head><title>Pantry Mixer</title></head>

<?php
include 'openConnection.php';


if ( isset($_POST['submit'])){

	//form input

	$carbs = $_POST['carbs'];
	$meat = $_POST['meat'];
	$addon = $_POST['addon'];


	//database query

	$conn = openConnection();

	if ($conn){
		//$query = "SELECT recipe_name FROM recipes GROUP BY recipe_name ORDER BY recipe_name";

		$query = "SELECT recipe_name FROM recipes 
				  WHERE ingredients = " . "'". $carbs . "'".
				  " OR ingredients = " . "'" . $meat ."'".
				  " OR ingredients = " . "'". $addon ."'".
				  " GROUP BY recipe_name";	

		$result = pg_query($conn, $query);

		if($result){

			while($recipes = pg_fetch_row($result)){
				echo $recipes[0];	
				echo "<br>";
			}
		}
		
		else if(!$result) {
			echo $query. " ";
			echo "An error has occured.";
		}

		closeConnection();

	}
}


else echo "Failed connection";

?>

</html>