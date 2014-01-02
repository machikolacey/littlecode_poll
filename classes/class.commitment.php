<?php

class Commitment {

	function __construct(){
	
		include("connection.php");
		mysql_select_db("poll") or die(mysql_error()); 		
	}
	
	function checkCommitment($const_id){

		$sql = "SELECT COUNT(const_id) from commitment where const_id = ".$const_id; 		
	 	$check_const = mysql_query($sql) or die('query error' . mysql_error(). "checkcommitment");
     	$const 	= mysql_fetch_array($check_const);	
		
		if($const[0]>0){
		   $const_exist = 1;
		 }else{
		   $const_exist=0;
		 }
	
		return $const_exist;
	}
	function getSQLLine($commitment){
	 switch($commitment){
	   case "yes":
	      $sqlline = " 1 , 0 , 0 ";   
	      $sqlline_update = " vote = (vote + 1) , abandon = 0 , undecided = 0 ";   	   
	   break;
	   case "no":
	      $sqlline = " 0 , 1 , 0 ";   	   
	      $sqlline_update = "  vote = 0  , abandon = (abandon + 1) , undecided = 0  ";   
	   break;
	   case "undecided":
	      $sqlline = " 0 , 0 , 1 ";   	 	 
	      $sqlline_update = "  vote = 0  , abandon = 0 , undecided = (undecided + 1)  ";   		
	   break;	   	 
	   	 
	 }

	   $lines = array($sqlline, $sqlline_update);
	   return $lines;
	}
	
	
	
	function insertCommitment($const_id, $commitment){
		$lines = $this->getSQLLine($commitment);
		$const_exist = $this->checkCommitment($const_id);
	
		if($const_exist==1){
		     // If there was already the const_id
			 $sql = "UPDATE commitment SET  ".$lines[1]. " WHERE const_id = ".$const_id;
			 $update = mysql_query($sql) or die(mysql_error()); 
		}else{
		     // If there wasn't the const_id
			 $sql = "INSERT INTO commitment VALUES (".$const_id.", ".$lines[0].")";
			 $insert = mysql_query($sql) or die(mysql_error()); 
		}

	}
	
	function getAllCommitment(){
    	$sql  	    = "SELECT * FROM view_commitment";	
		$commitment = mysql_query($sql); 	 
		while($row  = mysql_fetch_array($commitment, MYSQL_ASSOC)) {
		     $allcommitment[] = $row;
		}		
		return $allcommitment;
	}


}
?>