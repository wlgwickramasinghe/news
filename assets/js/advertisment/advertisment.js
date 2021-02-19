//Save Advertisment
function save_advertisment() {

   base_url = 'http://127.0.0.1/DSMS/'

  data = $('#advertisment_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/advertisment/save_advertisment',
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
    $('#advertisment_form')[0].reset();
     setTimeout(function(){
  window.location = base_url+"index.php/advertisment/view_advertisment?page=advertisment";
  },1000);
  })
  .fail(function(data) {
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  });
  });
}

//Update Advertisment
function update_advertisment(){

data = $('#advertisment_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/advertisment/update_advertisment',
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
  window.location = base_url+"index.php/advertisment/view_advertisment?page=advertisment";
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

