<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){

	
	$('#smllVol').on('change',function(){
	var volume1 = $("#smllVol").val();
		
		
	if(volume1){
		
		//alert ("submitted");
	
		$.ajax({
			type:'POST',
			url:'get-vol-smll.php',
			data:'smllVol1='+volume1,
			success:function(html){
				$('#smllVol-deets').html(html);
			}
		});  	
	
	}

	});
		
	});
</script>

</head>

<body>

<?php

	echo '<form action="#" name="vol-calc" id="vol-calc">';
	echo '<input type="text" name="smllVol" id="smllVol" placeholder="SMALL WAVE VOLUME">';
	echo '</form>';
	echo '<div id="smllVol-deets"></div>';
    
   ?>




</body>

</html>
