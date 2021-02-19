
// function open_report(id,page){
//   // alert(page)
//   window.open (base_url+"index.php/report/"+page+"?pid="+ id , "mywindow","location=1,status=1,scrollbars=1, width=700,height=500");
// }

//Print Queue
function print_queue(id,page){

  $.ajax({
    url: base_url+'index.php/persistent/save_queue',
    type: 'POST',
    dataType: 'json',
    data: {"id":id}
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
    window.open (base_url+"index.php/report/"+page+"?pid="+ id , "mywindow","location=1,status=1,scrollbars=1, width=700,height=500");

  })
  .fail(function(data) {
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  })


  })
}

function spesific_date(){
    date = $('#date').val();
    page = $('#pageSD').val();
    window.open (base_url+"index.php/report/"+page+"?date="+ date , "mywindow","location=1,status=1,scrollbars=1");
}
function date_range_report(){
    from = $('#from').val();
    to = $('#to').val();
    page = $('#page').val();
    window.open (base_url+"index.php/report/"+page+"?from="+ from + "&to=" + to , "mywindow","location=1,status=1,scrollbars=1");
}


function printPrescription() {

      var url = base_url+"index.php/report/print_prescription/"
      var data = '?';
      $.each($("#print:checked"), function (key, value) {
          data += 'print[]=' + $(this).val() + '&';
      });
      var pId =$('#p_id').val();
      var pres_id =$('#pres_id').val();
      data += 'pid=' + pId + '&pres_id='+pres_id;
      var params = "menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,width=750,height=700";
      window.open(url + data, "lookUpW", params);

  }


function printDiv(el){
  	var restorepage = document.body.innerHTML;
  	var printcontent = document.getElementById(el).innerHTML;
  	document.body.innerHTML = printcontent;
  	window.print();
  	document.body.innerHTML = restorepage;

}

function print_patient_summary(pid) {
  // alert()

  window.open (base_url+"index.php/report/patient_summary?pid="+ pid , "mywindow","location=1,status=1,scrollbars=1");

  }
