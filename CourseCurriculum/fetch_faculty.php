<?php
session_start();
include("connection2.php");
$acad=$_POST['acad_id'];
//echo "acad id= ". $acad;
?>
<table align="center">
<tr>
<td width="150">Faculty:</td>
<td width="400">
<select name="faculty" id="drop2">
<option value="0">--SELECT--</option>
	<option value="FAC01">FAC01 : FACULTY OF EDUCATION</option>
	<option value="FAC02">FAC02 : FACULTY OF ENGINEERING &amp; TECHNOLOGY</option>
	<option value="FAC03">FAC03 : FACULTY OF HUMANITIES &amp; LANGUAGES</option>
	<option value="FAC04">FAC04 : FACULTY OF LAW</option>
	<option value="FAC05">FAC05 : FACULTY OF NATURAL SCIENCES</option>
	<option value="FAC06">FAC06 : FACULTY OF SOCIAL SCIENCES</option>
	<option value="FAC09">FAC09 : FACULTY OF ARCHITECTURE &amp; EKISTICS</option>
	<option value="FAC11">FAC11 : FACULTY OF FINE ARTS</option>
	<option value="FAC12">FAC12 : FACULTY OF DENTISTRY</option>
	<option value="CEN01">CEN01 : FTK-CENTRE FOR INFORMATION TECHNOLOGY</option>
	<option value="CEN02">CEN02 : AJK MASS COMM. RESEARCH CENTRE</option>
	<option value="CEN03">CEN03 : STATE RESOURCE CENTRE</option>
	<option value="CEN04">CEN04 : CENTRE FOR COACHING &amp; CAREER PLANNING</option>
	<option value="CEN05">CEN05 : CENTRE FOR COACHING AND CAREER MANAGEMENT</option>
	<option value="CEN06">CEN06 : ACADEMIC STAFF  COLLEGE</option>
	<option value="CEN07">CEN07 : MMA JAUHAR ACADEMY OF INTERNATIONAL STUDIES</option>
	<option value="CEN08">CEN08 : DR. ZAKIR HUSAIN INSTITUTE OF ISLAMIC STUDIES</option>
	<option value="CEN09">CEN09 : CHILD GUIDANCE CENTRE</option>
	<option value="CEN10">CEN10 : BALAK MATA CENTRE</option>
	<option value="CEN11">CEN11 : CENTRE FOR COACHING &amp; PLACEMENT</option>
	<option value="CEN12">CEN12 : PUBLICATION SECTION (JAMIA MONTHLY)</option>
	<option value="CEN13">CEN13 : ARJUN SINGH CENTRE FOR DISTANCE AND OPEN LEARNING</option>
	<option value="CEN14">CEN14 : KHAN ABDUL GHAFFAR KHAN CHAIR</option>
	<option value="CEN15">CEN15 : DR. ZAKIR HUSAIN CHAIR</option>
	<option value="CEN16">CEN16 : CENTRE FOR JAWAHARLAL NEHRU STUDIES</option>
	<option value="CEN17">CEN17 : CENTRE FOR WEST ASIAN STUDIES</option>
	<option value="CEN18">CEN18 : CENTRE FOR EDU. FOR SECULARISM &amp; SOCIAL JUSTICE</option>
	<option value="CEN19">CEN19 : DR. K.R.NARAYANAN CENTRE FOR DALIT &amp; MINORITIES STUDIES</option>
	<option value="CEN20">CEN20 : CENTRE FOR EUROPEAN &amp; LATIN AMERICAN STUDIES</option>
	<option value="CEN21">CEN21 : CENTRE FOR JAWAHARLAL NEHRU STUDIES</option>
	<option value="CEN22">CEN22 : CENTRE FOR WEST ASIAN STUDIES</option>
	<option value="CEN25">CEN25 : CENTRE FOR GANDHIAN STUDIES</option>
	<option value="CEN27">CEN27 : CENTRE FOR COMP. REL. &amp; CIVILIZATION</option>
	<option value="CEN28">CEN28 : SAROJINI NAIDU CENTRE FOR WOMEN STUDIES</option>
	<option value="CEN29">CEN29 : CENTRE FOR MANAGEMENT STUDIES</option>
	<option value="CEN30">CEN30 : CENTRE FOR THEORETICAL PHYSICS</option>
	<option value="CEN31">CEN31 : CENTRE FOR DR. ZAKIR HUSAIN STUDIES</option>
	<option value="CEN32">CEN32 : UNIVERSITY COUNSELING &amp; GUIDANCE CENTRE</option>
	<option value="CEN33">CEN33 : CENTRE FOR PHYSIOTHERAPY AND REHABILITATION SCIENCES</option>
	<option value="CEN34">CEN34 : ACADEMY FOR PROFESSIONAL DEV. OF URDU MEDIUM TEACHERS</option>
	<option value="CEN35">CEN35 : INDIA ARAB CULTURAL CENTRE</option>
	<option value="CEN36">CEN36 : EURO ASIA INSTITUTE</option>
	<option value="CEN37">CEN37 : CENTRE FOR CULTURE, MEDIA &amp; GOVERNANCE</option>
	<option value="CEN38">CEN38 : CENTRE FOR INTERDISCIPLINARY RESEARCH IN BASIC SCIENCES</option>
	<option value="CEN39">CEN39 : NELSON MANDELA CENTRE FOR PEACE &amp; CONFLICT RESOLUTION</option>
	<option value="CEN40">CEN40 : PREMCHAND ARCHIVES &amp; LITERARY CENTRE</option>
	<option value="CEN41">CEN41 : GERDA PHILIPBORNE DAY CENTRE</option>
	<option value="CEN42">CEN42 : CENTRE FOR EARLY CHILDHOOD DEVELOPMENT &amp; RESEARCH</option>
	<option value="CEN43">CEN43 : M.K.GANDHI CHAIR</option>
	<option value="CEN44">CEN44 : MOULANA ABUL KALAM AZAD CHAIR</option>
	<option value="CEN45">CEN45 : SAJJAD ZAHEER CHAIR</option>
	<option value="CEN46">CEN46 : SAIFUDDIN KITCHEW CHAIR</option>
	<option value="CEN47">CEN47 : FORD FOUNDATION &amp; ENDOWED CHAIRS</option>
	<option value="CEN48">CEN48 : A.M. KHWAJA CHAIR</option>
	<option value="CEN49">CEN49 : CENTRE FOR NANO SC. &amp; NANO TECH.</option>
	<option value="OFA22">OFA22 : CENTRE FOR NORTH EAST STUDIES AND POLICY RESEARCH</option>
	<option value="SCH00">SCH00 : JAMIA SCHOOLS</option>
	<option value="SCH01">SCH01 : JAMIA SR. SECONDARY SCHOOL</option>
	<option value="SCH02">SCH02 : SYED ABID HUSAIN SR.SEC.SCHOOL(S.F.)</option>
	<option value="SCH03">SCH03 : JAMIA GIRLS SR. SEC. SCHOOL</option>
</select>
 </td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop2").change(function(){

	var fac_id =  $("select#drop2 option:selected").attr('value'); 
// alert(country_id);	
	if (fac_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
      		url: "fetch_department.php",
			data: "fac_id="+fac_id,
			cache: false,
			beforeSend: function () { 
				$('#department').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#department").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['acad'] = $acad;
?> 
