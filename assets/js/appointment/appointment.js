function save_appointment() {

  base_url = 'http://127.0.0.1/DSMS/'

  data = $('#appointment_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/appointment/save_appointment',
    type: 'POST',
    dataType: 'json',
    data: data
  })
  .done(function(data) {
    new PNotify({
      title: 'Success',
      text:'Form submited successfully',
      addclass: 'alert bg-success alert-styled-left'
    });
    $('#appointment_form')[0].reset();

    setTimeout(function(){
      var newWidget = $(data);
      window.location = base_url+"index.php/appointment/view_appointment?page=appointment";
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

function web_save_appointment() {

// alert();

base_url = 'http://127.0.0.1/DSMS/'

data = $('#web_appointment_form').serializeArray();
// patient_id = $('#patient_id').val();

$.ajax({
  // url: base_url+'index.php/web/save_appointment/'+patient_id,
   url: base_url+'index.php/web/save_appointment/',
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
  $('#web_appointment_form')[0].reset();
  $('#web_appo').show(); 
   $("#web_appo").load(location.href + " #web_appo");



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

function load_edit_appointment(id) {  

  base_url = 'http://127.0.0.1/DSMS/'

  $.ajax({
    url: base_url+'index.php/web/web_edit_appointment',
    type: 'POST',
    dataType: 'JSON',
    data: { "id":id }
  })
  .done(function(data) {
    $('#web_edit_appointment').show();
    $('#appo_id').val("");
    $('#service').val("");
    $('#date').val("");
    $('#time').val("");
  data.forEach(function(el){   

    $('#appo_id').val(el.id);
    $('#patient').val(el.patient_id);
    $('#service').val(el.service_type);
    $('#date').val(el.date);
    $('#check_date').val(el.date);
    $('#time1').val(el.time);
    $('#check_time').val(el.time);


  })
  

  // new PNotify({
  //   title: 'Success',
  //   text:'Form submited without any error',
  //   addclass: 'alert bg-success alert-styled-left'
  // });
  $('#web_appointment_form')[0].reset();

  // setTimeout(function(){
  //   var newWidget = $(data);
  //   window.location = base_url+"index.php/web/load_appointment";
  // },1000);


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


//Update appointment data
function update_appointment(){

  data = $('#appointment_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/appointment/update_appointment',
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
      window.location = base_url+"index.php/appointment/view_appointment?page=appointment";
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

//Updat patient data
function send_msg(id){

  // alert(id)


  base_url = 'http://127.0.0.1/DSMS/'

  data = $('#').serializeArray();

  $.ajax({
    url: base_url+'index.php/web/send_msg',
    type: 'POST',
    dataType: 'json',
    data: { "id":id }
  })
  .done(function() {
    new PNotify({
      title: 'Success',
      text:'Confirmation message send successfully',
      addclass: 'alert bg-success alert-styled-left'
    });
    setTimeout(function(){
      window.location = base_url+"index.php/web/view_appointment";
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


//Updat patient data
function web_update_appointment(){


  base_url = 'http://127.0.0.1/DSMS/'

  data = $('#web_appointment_form_edit').serializeArray();

  $.ajax({
    url: base_url+'index.php/web/update_appointment',
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
      window.location = base_url+"index.php/web/load_appointment";
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




function approved(id){
let isBoss = confirm("Send message to Patient?");
if (isBoss==true){
    $.ajax({
    url: base_url+'index.php/appointment/update_appointment_status',
    type: 'POST',
    dataType: 'json',
    data: {"id":id}
  })
  .done(function() {
    new PNotify({
      title: 'Success',
      text:'Appoinment Approved',
      addclass: 'alert bg-success alert-styled-left'
    });
    setTimeout(function(){
      window.location = base_url+"index.php/appointment/today_appointment?page=appointment";
    },500);

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
else{
  $('input:checkbox').removeAttr('checked');
}
}

// $("#approved").change(function(){
//  var id = $(this).attr('id');
//   alert(id)

// });

// var res = '<?php echo json_encode($this->uri->segment(4)); ?>';
// alert(res)
