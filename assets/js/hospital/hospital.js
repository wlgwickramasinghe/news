//Service Charger Save
function update_hospital_settings(id) {

  data = $('#hospital_settings_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/hospital/update_hospital_settings/'+id,
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
    $('#hospital_settings_form')[0].reset();
    setTimeout(function(){
      window.location.href = base_url+'index.php/hospital/view_hospital_settings?page=hospital_settings';
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
