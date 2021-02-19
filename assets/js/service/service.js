function create_service() {

    base_url = 'http://127.0.0.1/DSMS/'

  data = $('#service_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/service/save_service',
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
    $('#service_form')[0].reset();

      setTimeout(function(){
      window.location = base_url+"index.php/service/view_service?page=service";
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

function update_service(){

data = $('#service_form').serializeArray();

$.ajax({
  url: base_url+'index.php/service/update_service',
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
    window.location = base_url+"index.php/service/view_service?page=service";
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

$(document).ready(function(){

 $('.btn.border-warning.text-warning-600.btn-flat.btn-icon.btn-rounded').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/service/delete_service',
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
