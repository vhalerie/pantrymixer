<?php

function openConnection(){

	$connString = "host=ec2-184-72-235-159.compute-1.amazonaws.com port=5432 dbname=dfi0fhpa561297 user=pbysdhycfhbhqt password=6dd099e1f40c31b046811662dacf896569a8c99c9d50c36f1ecd7c6c8745ea3d sslmode = require";

	$conn = pg_connect($connString);

	return $conn;

}

function closeConnection(){
	$conn ->close();
}

?>