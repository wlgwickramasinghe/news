function save_patient() {

      base_url = 'http://127.0.0.1/DSMS/'

  data = $('#patient_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/patient/save_patient',
    type: 'POST',
    dataType: 'json',
    data: data
  })
  .done(function(data) {
    // alert()
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
    $('#patient_form')[0].reset();

    setTimeout(function(){
         var newWidget = $(data);
  window.location = base_url+"index.php/patient/patient_over_view/"+data+"?page=patient";
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

// window.location = base_url+"index.php/patient/patient_over_view/"+data;
  })

}

//Save web patient
function web_save_patient() {

   base_url = 'http://127.0.0.1/DSMS/'

  data = $('#web_patient_form').serializeArray();
  
  $.ajax({
    url: base_url+'index.php/web/save_patient',
    type: 'POST',
    dataType: 'json',
    data: data
  })
  .done(function(data) {
    // alert('success')
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
      $('#web_patient_form')[0].reset();
      $('#return_patient').hide();
      $('#new_patient_div').hide();
      $('#return_patient_div').show(); 
      // $('#return_patient_div').reload();
      $("#return_patient_div").load(location.href + " #return_patient_div");

//     setTimeout(function(){
//          var newWidget = $(data);
//   window.location = base_url+"index.php/web/load_appointment";
// },1000);

  
  })
  .fail(function(data) {
    // alert()
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

function load_edit_patient(id) {

   $('#web_edit_patient').show();

   base_url = 'http://127.0.0.1/DSMS/'

  // data = $('#web_patient_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/web/web_edit_patient',
    type: 'POST',
    dataType: 'json',
     data: { "id":id }
  })
  .done(function(data) {

    $('#pat_name').val("");
    $('#pat_birthday').val("");
    $('#pat_gender').val("");
    $('#pat_contact').val("");
    $('#pat_blood').val("");
    $('#pat_address').val("");
  data.forEach(function(el){   

    $('#patient_update_id').val(el.id);
    $('#pat_name').val(el.name);
    $('#pat_birthday').val(el.birthday);
    $('#pat_gender').val(el.gender);
    $('#pat_contact').val(el.contact);
    $('#pat_blood').val(el.blood);
    $('#pat_address').val(el.address);
    if(el.gender == "M"){
       $('#pat_gender').val('M');
    }else{
       $('#pat_gender').val('F');
    }
   


 })
    // alert('success')
    // new PNotify({
    //     title: 'Success',
    //     text:'Form submited without any error',
    //     addclass: 'alert bg-success alert-styled-left'
    // });
    // $('#web_patient_form')[0].reset();

//     setTimeout(function(){
//          var newWidget = $(data);
//   window.location = base_url+"index.php/web/load_appointment";
// },1000);


  })
  .fail(function(data) {
    // alert()
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



//Update patient data
function update_patient(){

data = $('#patient_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/patient/update_patient',
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
  window.location = base_url+"index.php/patient/view_patient?page=patient";
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

//Update patient data
function web_update_patient(){

  // alert(patient_id1);

    base_url = 'http://127.0.0.1/DSMS/'

data = $('#web_patient_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/web/update_patient',
  type: 'POST',
  dataType: 'json',
  data: data
})
.done(function() {

  $('#web_edit_patient').hide();
  $('#return_patient_div').show(); 
  $("#return_patient_div").load(location.href + " #return_patient_div");

  new PNotify({
      title: 'Success',
      text:'Patient Details Updated Successfully',
      addclass: 'alert bg-success alert-styled-left'
  });
  //   setTimeout(function(){
  // window.location = base_url+"index.php/web/load_appointment";
  // },1000);


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


function get_similar_patient(val){

if(val.length >= 3){
 $.ajax({
            url: base_url+'index.php/patient/get_similar_patient/'+val,
            type: 'POST',
            dataType: 'json',
            data: val
        })
        .done(function (data) {

              if(data.length > 0){
                $("#similar_patient_content").show();
                $('#ajax_lookup').remove();
                $('#similar').append("<div id='ajax_lookup' class='ajax_lookup' ></div>");
              
                var content = "<div class='patient_check_cont'>";
                data.forEach(function (el){

                  if(el.gender == 'M'){
                    gend = 'Male';
                  }else{
                    gend = 'Female';
                  }

                  content += "<div style='font-family:Arial;font-size:10px;'>";
                  content += "<a href='"+base_url+"index.php/patient/patient_over_view/" + el.id + "'>";
                  content += "<b> Patient ID : " + el.id + "</b><br>";
                  content += "<b> Name : " + el.name + "</b><br>";
                  content += "<b> Date of Birth : " + el.birthday + "</b><br>";
                  content += "<b> Gender : " +  gend + "</b><br>";
                  content += "</a>";
                  content += "</div><hr>";
                })
                content += "</div>";
                $('#ajax_lookup').html(content);
              }else{
                closeList("ajax_lookup");
                $("#similar_patient_content").show();
                $('#ajax_lookup').remove();
              }

        })
        .fail(function (data) {
        })
}else{
    $("#similar_patient_content").hide();

}

}
