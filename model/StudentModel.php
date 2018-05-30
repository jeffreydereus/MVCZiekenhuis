<?php

function getAllHospitals()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM Ziekenhuis ORDER BY `Name` ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
