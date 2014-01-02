<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Multiple, remote</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
#tags {
    margin-bottom: 15px;
}
#searchSuggest {

    border: 1px dotted Red;
    margin-bottom: 15px;
}
#anotherDiv {
    width: 200px;
    height: 50px;
    border: 1px dotted Green;
}
#searchSuggest .ui-autocomplete {
    position: relative;
    float: none;
}
#searchSuggest .ui-menu .ui-menu-item {
    float: none;
}

  </style>
  <script>
 $(document).ready(function() {


	$("#tags").autocomplete({

		source: "searchcode.php",
		open: function(event, ui) {
			$('ul.ui-autocomplete')
			   .removeAttr('style').hide()
			   .appendTo('#searchSuggest').show();
		},
		 select: function(event,ui) {

			//	$(this).attr('const_id', ui.item.id);
		//	$("#const_name").value = ui.item.label;
			$("#const_id").value = ui.item.id;
			}
	}); //End of  $("#tags").autocomplete
	
 
 });// End of $(document).ready
 
 
 
 
 
 </script>
</head>
<body>
<div class="ui-widget">
    <label for="tags">Tags: </label>
    <input id="tags" cat_id="0">
</div>
<div id="searchSuggest">
</div>
<div id="anotherDiv">
   
</div>
</body>
</html>