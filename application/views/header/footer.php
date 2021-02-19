<!-- Footer -->
<div class="footer text-muted">
  <!-- &copy; 2018. <a href="#"></a> by <a href="" target="_blank"></a> -->
</div>
<script>

$(document).keydown(function(e) {
       if (e.keyCode == 70 && e.ctrlKey) {

           var patient_id_with_code = prompt("Please read patient barcode for Patient Profile");
           var pid = patient_id_with_code.substr(4);

           if (pid == null || pid == "") {
                  txt = "Patient ID is not found.";
                  alert(txt)
                } else {

                  window.location.href = base_url+"index.php/patient/patient_over_view/"+pid+"?page=patient";

                }
       }
   });

   $( document ).ready(function() {

     var DoB = $('#dob').val();

     var bthDate, curDate, ageYears, ageMonths, ageDays, ageText;
   	bthDate = new Date(DoB); // Change the birth date here!
   	curDate = new Date();
   	if (bthDate > curDate) return;
   	ageYears = curDate.getFullYear() - bthDate.getFullYear();
   	ageMonths = curDate.getMonth() - bthDate.getMonth();
   	ageDays = curDate.getDate() - bthDate.getDate();
   	if (ageDays < 0) ageMonths = ageMonths - 1;
   	if (ageMonths < 0) {
   		ageYears = ageYears - 1;
   		ageMonths = ageMonths + 12;
   	}
   	ageText = "";
   	if (ageYears > 0) {
   		ageText = ageText + ageYears + " year";
   		if (ageYears > 1) ageText = ageText + "s";
   	}
   	if (ageMonths > 0) {
   		if (ageYears > 0) ageText = ageText + " and ";
   		ageText = ageText + ageMonths + " month";
   		if (ageMonths > 1) ageText = ageText + "s";
   	}
$( "#age" ).html( ageText );
   });

 </script>
<!-- /footer -->
