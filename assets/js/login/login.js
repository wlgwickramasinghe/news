function auth() {

  base_url = 'http://127.0.0.1/DSMS/'
// alert(base_url);
  data = $('#login').serializeArray();
  var username = $('#username').val();
  var password = $('#password').val();

  $.ajax({
    url: base_url+'index.php/login/process',
    type: 'POST',
    dataType: 'json',
    data: { "username":username, "password":password },
  })
  .done(function(res) {
    if(res == "Admin"){
      window.location.href = base_url+'index.php/country/view_country?page=country'

    }else if (res == "Pharmacist") {
      window.location.href = base_url+'index.php/country/view_country?page=country'
      

    } else {
      window.location.href = base_url+'index.php/country/view_country?page=country'

    }

  })
  .fail(function(data) {
      // window.location.href = base_url+'index.php/dashboard'
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  })


  })

}

function userauth() {

// alert();
  base_url = 'http://127.0.0.1/DSMS/'
// alert(base_url);
  data = $('#login').serializeArray();
  var username = $('#username').val();
  var password = $('#password').val();

  $.ajax({
    url: base_url+'index.php/login/process',
    type: 'POST',
    dataType: 'json',
    data: { "username":username, "password":password },
  })
  .done(function() {

  window.location.href = base_url+'index.php/web/load_appointment'

  })
  .fail(function(data) {
      // window.location.href = base_url+'index.php/dashboard'
    $.each(data.responseJSON, function(index, val) {
      new PNotify({
          title: 'Error',
          text: val,
          addclass: 'alert bg-danger alert-styled-left'
      });
  })


  })

}

