<?php
	include "connection.php";
	
	$type_id = $_POST['type_id'];
	$sql = "SELECT p_id,p_name FROM plantname WHERE type_id=".$type_id;
	$result = mysql_query($sql);
	$users_arr = array();
	while( $row = mysql_fetch_array($result))
	{
	    $p_id = $row['p_id'];
	    $p_name = $row['p_name'];

	    $users_arr[] = array("p_id" => $p_id, "p_name" => $p_name);
	}

	echo json_encode($users_arr);




/*
	include "config.php";

$type_id = $_POST['type_id'];   // department id
$sql = "SELECT p_id,p_name FROM plantname WHERE type_id=".$type_id;

$result = mysql_query($sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $p_id = $row['p_id'];
    $p_name = $row['p_name'];

    $users_arr[] = array("p_id" => $p_id, "p_name" => $p_name);
}

// encoding array to json format
echo json_encode($users_arr);
*/
?>