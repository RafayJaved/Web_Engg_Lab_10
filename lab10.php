<html>
<head>
	<title>Lab#10</title>
	
	<style>
	
		
		body {
			font-family: Georgia, Times, serif;
  
		}
	
	</style>
</head>

<body>



	<div style="background-color:#ffa64d; height:35%; width:35%; position:relative; left:30%; top:30%; 	border-radius:50px; ">

	


	<?php
	
	$search_key =	strtoupper( $_GET["search"]);

	
	?>
	
	
	
	<?php
	
	$str = file_get_contents('data.json');
	$json = json_decode($str, true); 

	$keys_dictionary = array_keys($json);
	
		foreach($keys_dictionary as $key){
		
		if(strpos($key,$search_key)!=NULL){
	?>
	
	<p	style=" position:relative; left:5%; top:30%; ">
	
	<?php
	
	
	
	echo $key;
	
	?>
	
	:</p>
			
	<p	style=" position:relative; left:5%; top:30%; ">
	
	<?php
	
	
	
			echo $json[$key] ;
	
	?>
	
	</p>
			
<?php
		}
		
		
	}
	?>

	</div>
</body>

</html>

