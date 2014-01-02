<?php

class Poll {

	function __construct(){
	
		include("connection.php");
		mysql_select_db("poll") or die(mysql_error()); 		
	}
	
	function checkPoll($const_id){
		// check if the constituency is already there
		$sql = "SELECT COUNT(const_id) from poll where const_id = ".$const_id; 		 
	 	$check_const = mysql_query($sql) or die('query error' . mysql_error(). "checkpoll");
     	$const 	= mysql_fetch_array($check_const);	
		
		if($const[0]>0){$const_exist = 1;}else{$const_exist=0;}
		 
		return $const_exist;
	}
	
	function getPartyArray($vote){
	
		$party_array = array(1 =>"0", 2=>"0",3=>"0",4=>"0",5=>"0");
		
		Switch($vote){
		  case "1":
			$party_array[1] = "1";	  
		  break;
		  case "2":
			$party_array[2] = "1";	  
		  break;
		  case "3":
			$party_array[3] = "1";	 	  
		  break;
		  case "4":
			$party_array[4] = "1";	 	  
		  break;
		  case "5":
			$party_array[5] = "1";	 	  
		  break;
		}	
		
		return $party_array;
	
	}
	
	function insertPoll($const_id, $const_exist, $vote, $party_array){

		if($const_exist==1){
		// If there was already the const_id
			 $sql = "UPDATE poll SET party".$vote." = party".$vote." +1 WHERE const_id = ".$const_id;
			 $update = mysql_query($sql) or die(mysql_error()); 
		}else{
		// If there wasn't the const_id
			 $sql = "INSERT INTO poll VALUES (".$const_id.",".$party_array[1].", ".$party_array[2].", ".$party_array[3].", ".$party_array[4].")";
			 $insert = mysql_query($sql) or die(mysql_error()); 
		}

	}
	
	function getAllPoll(){
    	$sql  	 = "SELECT * FROM view_poll";	
		$poll 	 = mysql_query($sql); 	 
		while($row = mysql_fetch_array($poll, MYSQL_ASSOC)) {
		     $allpoll[] = $row;
		}
		return $allpoll;
	}


}
?>