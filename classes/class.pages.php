<?php

class Pages {

	function __construct(){
			
			
	}
	
	
	
	function displayPage2(){
	     //Correct data from poll
	   	 $poll = new Poll();
		 $all_poll = $poll->getAllPoll();

		 
	     //Correct data from commitment	
	   	 $commitment = new Commitment();
		 $all_commitment = $commitment->getAllCommitment();	
	
	    //display the result	
		 ob_start();
		 include("/html/table.php");
		 $table = ob_get_clean();			
		 	
		 echo $table;
		 echo "<br /><br />";	
	
	}
		 
		 
		 

}
?>