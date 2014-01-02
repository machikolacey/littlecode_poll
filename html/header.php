<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/search.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

 
  <script>
 $(document).ready(function() {

 $("#const_name").click(function(){
 
 $("#const_name").val("");
 
 
 });
 


	$("#const_name").autocomplete({

		source: "searchcode.php",
		open: function(event, ui) {
			$('ul.ui-autocomplete')
			   .removeAttr('style').hide()
			   .appendTo('#searchSuggest').show();
		},
		 select: function(event,ui) {

				$(this).attr('const_id', ui.item.id);
				$("#const_i").val(ui.item.id);
			
			}
	}); //End of  $("#tags").autocomplete
	
 
 });
 
 
 
 
 
 </script>
</head>
<body>