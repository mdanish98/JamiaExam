<html>
<head>
</head>
<body>
<select name="select1" id="drop1">
<option value="Select" selected>Select</option>
<option value="11">2011-12</option>
<option value="12">2012-13</option>
<option value="13">2013-14</option> 
</select>
<div class="cascade" id="tab1"></div> 

          <div id="tabb1" class="cascade"></div> 
        </div>
    </div>

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var acad_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#tab1").html( "" );
	$("#tabb1").html( "" );
	if (acad_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_degree.php",
			data: "acad_id="+acad_id,
			cache: false,
			beforeSend: function () { 
				$('#tab1').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#tab1").html( html );
			}
		});
	} 
});
});
</script>
</body>
</html>