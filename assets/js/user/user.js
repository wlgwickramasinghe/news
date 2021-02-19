
function create_user() {

    base_url = 'http://127.0.0.1/DSMS/'

  data = $('#user_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/user/save_user',
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
    $('#user_form')[0].reset();

      setTimeout(function(){
      window.location = base_url+"index.php/user/view_user?page=user";
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

function update_user(){

  base_url = 'http://127.0.0.1/DSMS/'

data = $('#user_form').serializeArray();

$.ajax({
  url: base_url+'index.php/user/update_user',
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
    window.location = base_url+"index.php/user/view_user?page=user";
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

function user_update(){

  base_url = 'http://127.0.0.1/DSMS/'

data = $('#user_form').serializeArray();

$.ajax({
  url: base_url+'index.php/webuser/user_update',
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
    window.location = base_url+"index.php/web/profile";
  },1000);


})
.fail(function(data) {


  if(data == 1){
    alert(data['error'])
  }

  $.each(data.responseJSON, function(index, val) {
    new PNotify({
        title: 'Error',
        text: val,
        addclass: 'alert bg-danger alert-styled-left'
    });
})


})
}


function user_create() {

    base_url = 'http://127.0.0.1/DSMS/'

  data = $('#user_form1').serializeArray();

  $.ajax({
    url: base_url+'index.php/webuser/save_user',
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
    $('#user_form1')[0].reset();

      setTimeout(function(){
      window.location = base_url+"index.php/web/web_login";
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
