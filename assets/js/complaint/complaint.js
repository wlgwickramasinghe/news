function save_complaint() {

  data = $('#complaint_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/complaint/save_complaint',
    type: 'POST',
    dataType: 'json',
    data: data
  })
  .done(function(data) {
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
    $('#complaint_form')[0].reset();

    setTimeout(function(){
         var newWidget = $(data);
  window.location = base_url+"index.php/complaint/view_complaint?page=complaint";
},1000);


  })
  .fail(function(data) {    
    console.log(data);
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  })

// window.location = base_url+"index.php/patient/patient_over_view/"+data;
  })

}

// function save_appointment() {

//   data = $('#lab_test_form').serializeArray();

//   $.ajax({
//     url: base_url+'index.php/appointment/save_appointment',
//     type: 'POST',
//     dataType: 'json',
//     data: data
//   })
//   .done(function() {
//     new PNotify({
//         title: 'Success',
//         text:'Form submited without any error',
//         addclass: 'alert bg-success alert-styled-left'
//     });
//     $('#lab_test_form')[0].reset();
//     setTimeout(function(){
//     location.reload();
//     },1000)

//   })
//   .fail(function(data) {
//     $.each(data.responseJSON, function(index, val) {
//       new PNotify({
//           title: 'Error',
//           text: val,
//           addclass: 'alert bg-danger alert-styled-left'
//       });
//   })


//   })

// }

//Updat patient data
function update_complaint(){

data = $('#complaint_form').serializeArray();

$.ajax({
  url: base_url+'index.php/complaint/update_complaint',
  type: 'POST',
  dataType: 'json',
  data: data
})
.done(function() {
  new PNotify({
      title: 'Success',
      text:'Form submited without any error',
      addclass: 'alert bg-success alert-styled-left'
  });
    setTimeout(function(){
  window.location = base_url+"index.php/complaint/view_complaint?page=complaint";
  },1000);

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

 // Delete
$(document).ready(function(){

 $('.btn.border-warning.text-warning-600.btn-flat.btn-icon.btn-rounded').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/patient/delete_patient',
   type: 'POST',
   data: { "id":id },
   success: function(response){

    // Removing row from HTML Table
    $(el).closest('tr').css('background','tomato');
    $(el).closest('tr').fadeOut(800, function(){
     $(this).remove();
    });

   }
  });
}

 });

})




