function create() {

  data = $('#departmentForm').serializeArray();

  $.ajax({
    url: base_url+'index.php/department/DepartmentRegister',
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
    $('#departmentForm')[0].reset();

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

function update_department(){

data = $('#departmentEditForm').serializeArray();

$.ajax({
  url: base_url+'index.php/department/DepartmentUpdate',
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
  window.location = base_url+"index.php/department/view_department";

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

 // Delete
 $('.delete').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/department/delete_department',
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
