<?php


$term = strtolower($_GET["term"]);

include("connection.php");


mysql_select_db("poll") or die(mysql_error()); 
 $classes = mysql_query("SELECT * FROM constituencies") 
 or die(mysql_error()); 



while ($row = mysql_fetch_assoc($classes)) {
	$searchterms[] = array(
		"const_id" => $row['const_id'],
		"const_name" => $row['const_name'],		
	);
}





$i=0;
$newsearchitems  = array();
	foreach ($searchterms as $key=>$row) {
		
		if (strpos(strtolower($row['const_name']), $term) !== false) {
		
		$newsearchitems[] = array(
			"id" => $row['const_id'],
			"label" => $row['const_name'],
		);
			
			$i++;
		}
	}



 echo json_encode($newsearchitems);
 

?>

