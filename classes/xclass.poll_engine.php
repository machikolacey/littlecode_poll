<?php

class Engine {

	function __construct(){
	
		include("connection.php");
		mysql_select_db("poll") or die(mysql_error()); 		
			
	}
	
	function checkPoll($const_id){
		// check if the constituency is already there
		$check_const = mysql_query("SELECT COUNT(column_name) from poll where const_id = ".$const_id.")"  or die(mysql_error()); 	 
		$const 		 = mysql_fetch_array($check_const);
	
     	$check_const = mysql_query("SELECT COUNT(const_id) from poll where const_id = ".$const_id) 
	 	or die(mysql_error()); 
     	$const 	= mysql_fetch_array($check_const);	
		
		if($const>0){$exist = 1;}else{$exist=0;}
		return $exist;
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
	
	
	}
	
	function insertPoll($const_id, $exist, $vote){
		if($exist==1){
		// If there was already the const_id
			 $sql = "UPDATE poll SET party".$vote." = party".$vote." +1 WHERE const_id = ".$const_id;
			 $check_const = mysql_query($sql) or die(mysql_error()); 
		}else{
		// If there wasn't the const_id
			 $sql = "INSERT INTO poll VALUES (".$party_array[1].", ".$party_array[2].", ".$party_array[3].", ".$party_array[4].", ".$party_array[5].")";
		}

	}
	
	function getAllPoll(){
    	$sql  	 = "SELECT * FROM poll";	
		$poll 	 = mysql_query($sql or die(mysql_error()); 	 
		$allpoll = mysql_fetch_array($poll);
		
		return $allpoll;
	}


}
?>