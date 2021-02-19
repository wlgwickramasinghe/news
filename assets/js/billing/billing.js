//Service Charger Save
function save_service_charger() {

  data = $('#service_charger_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/billing/save_service_charger',
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
    $('#service_charger_form')[0].reset();

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

//Drug Charger Save
function save_drug_chargers() {
        
  data = $('#drug_charger_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/billing/save_drug_charger',
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
    $('#drug_charger_form')[0].reset();

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



