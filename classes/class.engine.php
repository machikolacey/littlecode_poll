<?php

class Engine {

	function __construct(){
	
		include("connection.php");
		mysql_select_db("poll") or die(mysql_error()); 		
			
	}

	
	function letsVote($const_id, $vote){
	   	 $poll = new Poll();
		 
	   	 $party_array = $poll->getPartyArray($vote);
	     $const_exist = $poll->checkPoll($const_id);
	     $poll->insertPoll($const_id, $const_exist, $vote, $party_array);
	
	}
	
	function letsCommit($const_id, $comm){
	   	 $commitment = new Commitment();
	     
		 $const_exist = $commitment->checkCommitment($const_id);
         $commitment->insertCommitment($const_id, $comm);
	
	}

}
?>