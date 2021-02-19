
// Update_duration_time
function update_duration(){

data = $('#edit_duration_form').serializeArray();

$.ajax({
  url: base_url+'index.php/duration/update_duration',
  type: 'POST',
  dataType: 'json',
  data: data
})
.done(function() {
  new PNotify({
      title: 'Success',
      text:'Form submited successfully',
      addclass: 'alert bg-success alert-styled-left'
  });
    setTimeout(function(){
  window.location = base_url+"index.php/duration/view_duration?page=duration";
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

 