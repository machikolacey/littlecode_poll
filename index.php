<?php
	require_once ("html/header.php");
	
	spl_autoload_register(function($class) {
		require_once "classes/class." . $class . ".php";
	});
	
	
	if(isset($_POST['submit'])){
	
		 $engine   = new Engine();
		 $pages    = new Pages();
		 $engine->letsVote($_POST['const_i'], $_POST['vote']);
		 $engine->letsCommit($_POST['const_i'], $_POST['commitment']);
		 $pages->displayPage2();
	}else{
	//display Page1
		 require_once ("html/form.php");
	}
	


	 require_once ("html/footer.php");  
?>