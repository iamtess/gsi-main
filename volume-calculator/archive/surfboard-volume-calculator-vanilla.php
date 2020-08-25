<!doctype html>


<html>
	<head>
		<title>Surfboard Volume Calculator</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('.WgtRL input').keyup(multiply);
	
	function multiply() {
   	
	
	
	
	var weightRL = parseFloat($('.WgtRL input').val());
	var gfRL = $('AmountRL select').val();
	
	
	
	
	if (gfRL == '1')
	{
	var volumeRL =  +weightRL -(weightRL * 58/100); 
	}
	else if (gfRL == '2')
	{
	var volumeRL =  +weightRL -(weightRL * 55/100); 
	}
	else if (gfRL == '3')
	{
	var volumeRL =  +weightRL -(weightRL * 50/100); 
	}
	else if (gfRL == '4')
	{
	var volumeRL =  +weightRL -(weightRL * 25/100); 
	}
	else 
	{
	var volumeRL =  weightRL; 
	}
	
	
	var smlVol = volumeRL + 3;
	var medVol = volumeRL; 
	var lrgVol = volumeRL -3; 
	
	//grandTotalDiscount+=  +total -(total * 20/100); 
	
	
	$('#totalRL').html('<br>SMALL, MUSHY CONDITIONS: ' +smlVol +' ltr');
	$('#totalRL2').html('<br>MEDIUM, EVERYDAY CONDITIONS: ' +medVol +' ltr');
	$('#totalRL3').html('<br>LARGE, PUNCHY CONDITIONS: ' +(lrgVol  ) +' ltr');
	
	
	

	
    //$('#totalRL').on('change',function(){
	var totalRL = $('#totalRL');
	var totalRL2 = $('#totalRL2');
	var totalRL3 = $('#totalRL3');

	if(smlVol){
		
		echo 'totalRL';
	
		$.ajax({
			type:'POST',
			url:'get-vol-smll.php',
			data:'volume='+smlVol,
			success:function(html){
				$('#vol-smll').html(html);
				
			}
		}); 
		
		$.ajax({
			type:'POST',
			url:'eg-getcustomers.php',
			data:'salesrep='+salesrepID,
			success:function(html){
				$('#customer_select').html(html);
				$('#customer_select').prop('disabled', false);
			}
		}); 
		
	}
	
	});
});
</script>
		
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="/css/board-vol-calc-styles.css">
		
		<style>
			option[value=""] { /* value not val */
				font-family:helvetica;font-size: 100%;padding: 0.3em;
			}

			option[value="0.3"],[value="0.31"],[value="0.32"],[value="0.33"],[value="0.34"],[value="0.35"] { /* value not val */
				background-color: #f90723;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
		   option[value="0.36"],[value="0.37"],[value="0.38"] { /* value not val */
				background-color: #f9bd07;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.39"],[value="0.4"],[value="0.41"],[value="0.42"] { /* value not val */
				background-color: #ebee07;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.43"],[value="0.44"],[value="0.45"],[value="0.46"],[value="0.47"],[value="0.48"],[value="0.49"] { /* value not val */
				background-color: #9be643;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.5"],[value="0.51"],[value="0.52"],[value="0.53"],[value="0.54"],[value="0.55"] { /* value not val */
				background-color: #69a523;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			
			input[type=button] {
			  -webkit-appearance: none; -moz-appearance: none;
			  display: block;
			  margin: 0;
			  border-radius: 8px;
			  padding:0.6em,0.6em,0.6em,0.6em;
			  width: 50%; height: 30px;
			  line-height: 20px; 
			  border: 1px solid #bbb;
			  background: #fdfdfd; background: -moz-linear-gradient(top, #fdfdfd 0%, #bebebe 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fdfdfd), color-stop(100%,#bebebe)); background: -webkit-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: -o-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: -ms-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: linear-gradient(to bottom, #fdfdfd 0%,#bebebe 100%);
			}
			
			
			
			
		</style>
		
	</head>
	<body style="width:996px;"><div class="fieldLabels" style="font-size:130%;font-weight:bold;padding-bottom:10px;">SURFBOARD VOLUME CALCULATOR</div>
		<div colspan="2" class="fieldLabels" style="font-size:90%; padding-bottom:20px;">Volume is important when chosing a surfboard. You will need more or less depending on your body weight, fitness and skill level.<p>
		<p>An advanced surfer will require around 35%-40% of their body weight in board volume while a beginner will need a lot more for extra bouyancy while learning the ropes. Higher volume boards make paddling out into the line up and on to waves a lot easier.
		<p>
		To find the Surfboard Volume to suit you, select your skill level and enter your weight. NB: these number are only a guide.</div>
	<hr />
		<form id="vol-calc" action="#" method="post">
		<table width="100%" cellpadding="10" cellspacing="0" border="0" >
		
		
			<tr>
			
				<td class="AmountRL" valign="top">Skill level
				<br><select name="AmountRL" style="font-size:80%;">
					<option value="" SELECTED>Please select your Skill Level</option>
					<option value="5">Beginner</option>
					<option value="4">Beginner/Intermediate</option>
					<option value="3">Intermediate</option>
					<option value="2">Intermediate / Advanced</option>
					<option value="1">Advanced</option>
					
					
					</select>
				
				
				</td>
				
				
				<td class="WgtRL" align="left" valign="top">Weight (kg):<br><input style="font-size:80%;" class="createOrderInput"  type="text" name="WgtRL"></td>
				
				
				
				<td>Rec volume<br>
				<table width="100%"  cellpadding="10" cellspacing="0" border="0" class="fieldLabels" style="font-size:80%;">
			<tr>
				<td align="left" valign="top" >Groveller Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="totalRL"  style="padding:0.6em;"></span></div>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top">Medium Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="totalRL2"  style="padding: 0.6em;"></span></div>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top">Bigger Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="totalRL3"  style="padding: 0.6em;"></span></div>
				</td>
			</tr>
			</table>
				
				</td>
			
			
			
			</table>
			<br><br<br>
			
		
		
		<div style="padding-left:15px;"><input type="submit" class="button" id="configreset" value="RESET CALCULATOR"></div>
		</form>
		
		
		<div id="vol-smll"></div>


<script>
	$(document).ready(function(){
		//This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    if($('#vol-calc').length>0){
        $('#vol-calc')[0].reset(); 
    }
		
	
		
		
		
		
		
//$('td.Amount select').change(multiply);

		
 $('#configreset').click(function(){
            $('#vol-calc')[0].reset();
	 
	 $('#totalRL').empty();
	 $('#totalRL2').empty();
	 $('#totalRL3').empty();
 });
		

		
});

</script>
</body>
</html>
