<!doctype html>


<html>
	<head>
		<title>Surfboard Volume Calculator</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
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
		To help determine the required volume Whitney Guild created a scale called the Guild Factor (GF). Guild's formula is: Weight (kg) x GF (skill level) = Volume(ltr)<p>An advanced surfer will require around 35% of their body weight in board volume while a beginner will need a lot more for extra bouyancy while learning the ropes. Higher volume boards make paddling out into the line up and on to waves a lot easier.
		<p>
		To find the Surfboard Volume to suit you, match your skill level to a GF and enter your weight.</div>
	<hr />
		<form id="vol-calc">
		<table width="100%" cellpadding="10" cellspacing="0" border="0" >
		
		
		<tr>
			<td width="30%" class="fieldLabels" valign="top">STEP 1: SKILL LEVEL<p>
				<table width="100%"  cellpadding="10" cellspacing="6" border="0" >
				<tr>
					<td class="gfDesc" style="background-color: #f90723;text-align:center;line-height: 100%;">Super fit / Pro<br>(GF: .3 - .35)</td>
				</tr>
				<tr>
					<td class="gfDesc" style="background-color: #f9bd07;text-align:center;line-height: 100%;">Intermediate / Advanced<br>(GF: .36 - .38)</td>
				</tr>
				<tr>
					<td class="gfDesc" style="background-color: #ebee07;text-align:center;line-height: 100%;">Intermediate<br>(GF: .39 - .42)</td>
				</tr>
				<tr>
					<td class="gfDesc" style="background-color: #9be643;text-align:center;line-height: 100%;">Intermediate / Beginner<br>(GF: .43 - .49)</td>
				</tr>
				<tr>
					<td class="gfDesc" style="background-color: #69a523;text-align:center;line-height: 100%;">Beginner<br>(GF: .5 - .7+)</td>
				</tr>
				</table>
				
				
			</td>
			<td width="35%" align="left" valign="top" class="fieldLabels">STEP 2: ENTER YOUR DEETS<p>	
				<table width="100%"  cellpadding="10" cellspacing="0" border="0" class="fieldLabels" style="font-size:80%;">
				<tr>
				<td class="Amount" valign="top" >Guild Factor (GF):<br><select name="Amount" style="font-size:80%;">
					<option value="" SELECTED>Please select your GF</option>
					<option></option>
					<option value="">Advanced / Pro </option>
					<option value="0.3">0.3</option>
					<option value="0.31" >0.31</option>
					<option value="0.32" >0.32</option>
					<option value="0.33" >0.33</option>
					<option value="0.34" >0.34</option>
					<option value="0.35" >0.35</option>
					<option></option>
					<option value="">Intermediate / Advanced</option>
					<option value="0.36" >0.36</option>
					<option value="0.37" >0.37</option>
					<option value="0.38" >0.38</option>
					<option></option>
					<option value="">Intermediate</option>
					<option value="0.39" >0.39</option>
					<option value="0.4" >0.4</option>
					<option value="0.41" >0.41</option>
					<option value="0.42" >0.42</option>
					<option></option>
					<option value="">Intermediate / Beginner</option>
					<option value="0.43" >0.43</option>
					<option value="0.44" >0.44</option>
					<option value="0.45" >0.45</option>
					<option value="0.46" >0.46</option>
					<option value="0.47" >0.47</option>
					<option value="0.48" >0.48</option>
					<option value="0.49" >0.49</option>
					<option></option>
					<option value="">Beginner</option>
					<option value="0.5" >0.5</option>
					<option value="0.51" >0.51</option>
					<option value="0.52" >0.52</option>
					<option value="0.53" >0.53</option>
					<option value="0.54" >0.54</option>
					<option value="0.55" >0.55</option>
					<option value="0.55" >0.56</option>
					<option value="0.55" >0.57</option>
					<option value="0.55" >0.58</option>
					<option value="0.55" >0.59</option>
					<option value="0.55" >0.6</option>
					<option value="0.55" >0.61</option>
					<option value="0.55" >0.62</option>
					<option value="0.55" >0.63</option>
					<option value="0.55" >0.64</option>
					<option value="0.55" >0.65</option>
					<option value="0.55" >0.66</option>
					<option value="0.55" >0.67</option>
					<option value="0.55" >0.68</option>
					<option value="0.55" >0.69</option>
					<option value="0.55" >0.7</option>
					
					</select>
					

				</td>
					</tr><tr>
				<td class="Qty" align="left" valign="top">Weight (kg):<br><input style="font-size:80%;" class="createOrderInput"  type="text" name="Qty"></td>
				</tr><tr>
				
				</tr>
				</table>
			</td>
			
			<td width="35%" align="left" valign="top" class="fieldLabels">
			
			STEP 3: SURFBOARD VOLUME (ltrs)<p>	
			<table width="100%"  cellpadding="10" cellspacing="0" border="0" class="fieldLabels" style="font-size:80%;">
			<tr>
				<td align="left" valign="top" >Groveller Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="total"  style="padding:0.6em;"></span></div>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top">Medium Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="total2"  style="padding: 0.6em;"></span></div>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top">Bigger Waves:<br><div class="volStyle" style="font-family:helvetica;font-size: 80%;padding: 0.6em;">	<span id="total3"  style="padding: 0.6em;"></span></div>
				</td>
			</tr>
			</table>
			<br><br<br>
			
		
		
		<div style="padding-left:15px;"><input type="button" id="configreset" value="RESET CALCULATOR"></div>
		</td>
			</tr>
		</table></form>
		
		
		


<script>
	$(document).ready(function(){
		//This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    if($('#vol-calc').length>0){
        $('#vol-calc')[0].reset(); 
    }
		
	
		
		$('.Qty input').keyup(multiply);
//$('td.Amount select').change(multiply);
function multiply() {
    var quantity = parseFloat($('.Qty input').val());
	var dollars = $('td.Amount select').val().substr(1);
	
	var volumeTot = quantity * dollars;
	

    $('#total').html('<p>' +(volumeTot + 3 ).toFixed(2));
	$('#total2').html('<p>' +(quantity * dollars ).toFixed(2));
	$('#total3').html('<p>' +(volumeTot -3  ).toFixed(2));
}
		
 $('#configreset').click(function(){
            $('#vol-calc')[0].reset();
	 
	 $('#total').empty();
	 $('#total2').empty();
	 $('#total3').empty();
 });
		

		
});

</script>
</body>
</html>
