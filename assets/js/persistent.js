//Save Common
function save(form,save_url,next_url){

data = $('#'+form).serializeArray();
// alert(data)
var vid = $("#vid").val();

$.ajax({
  url: base_url+'index.php'+save_url,
  type: 'POST',
  dataType: 'JSON',
  data: data
})
.done(function(data) {

  new PNotify({
      title: 'Success',
      text:'Form submited without any error',
      addclass: 'alert bg-success alert-styled-left'
  });
  $('#'+form)[0].reset();
  setTimeout(function() {
    window.location.href = base_url+'index.php'+next_url+'/'+vid;
  }, 1000);


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

//Save Prescription
function save_prescription(form,pid,vistid,save_url,next_url){

  data = $('#'+form).serializeArray();
  // alert(next_url)

$.ajax({
  url: base_url+'index.php'+save_url,
  type: 'POST',
  dataType: 'JSON',
  data: data
})
.done(function(data) {

  // new PNotify({
  //     title: 'Success',
  //     text:'Form submited without any error',
  //     addclass: 'alert bg-success alert-styled-left'
  // });
  $('#'+form)[0].reset();
  setTimeout(function() {
     window.location.href = base_url+'index.php'+next_url+'/'+data;
  }, 1000)


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



//Load Drug Names
$( document ).ready(function() {

 $.ajax({
            url: base_url+'index.php/drug/load_drugs',
            type: 'POST',
            dataType: 'json',
        })
        .done(function (data) {

            data.forEach(function (el){

              sto = parseInt(el.stock);
              ro_lev = parseInt(el.reorder_level);

              if(sto < ro_lev) {

                $('#drug').append(`<option style="color:red;" value="`+el.id+`">`+el.name+" ("+ el.stock+")"+`</option>`)
              }else{
                $('#drug').append(`<option style="color:blue;" value="`+el.id+`">`+el.name+" ("+ el.stock+")"+`</option>`)
              }
            })
        })
        .fail(function (data) {

        })
});

//Load Dosage
$( document ).ready(function() {

 $.ajax({
            url: base_url+'index.php/drug/load_dosage',
            type: 'POST',
            dataType: 'json',
        })
        .done(function (data) {

            data.forEach(function (el){

                $('#dosage').append(`<option value="`+el.id+`">`+el.dosage+`</option>`)
            })
        })
        .fail(function (data) {

        })
});

//Load Frequency
$( document ).ready(function() {

 $.ajax({
            url: base_url+'index.php/drug/load_frequency',
            type: 'POST',
            dataType: 'json',
        })
        .done(function (data) {

            data.forEach(function (el){

                $('#frequency').append(`<option value="`+el.id+`">`+el.frequency+`</option>`)
            })
        })
        .fail(function (data) {

        })
});

//Load Period
$( document ).ready(function() {

 $.ajax({
            url: base_url+'index.php/drug/load_period',
            type: 'POST',
            dataType: 'json',
        })
        .done(function (data) {

            data.forEach(function (el){

                $('#period').append(`<option value="`+el.id+`">`+el.period+`</option>`)
            })
        })
        .fail(function (data) {

        })
});

function add_prescription(){

    data = $('#prescription_form').serializeArray();
    drug_price = $('#drug_price_id').val();

    if(drug_price){

    $.ajax({
      url: base_url+'index.php/persistent/save_prescribe_item',
      type: 'POST',
      dataType: 'JSON',
      data: data
    })
    .done(function(data) {

      new PNotify({
          title: 'Success',
          text:'Form submited without any error',
          addclass: 'alert bg-success alert-styled-left'
      });
      // setTimeout(function() {
      location.reload();
      // }, 1000)


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

  }else {
    alert("fill drug price firstly")
  }

}

  function delete_item(id){

    $.ajax({
      url: base_url+'index.php/persistent/delete_item',
      type: 'POST',
      dataType: 'JSON',
      data: { "id":id }
    })
    .done(function(response) {

      new PNotify({
          title: 'Success',
          text:'Form submited without any error',
          addclass: 'alert bg-success alert-styled-left'
      });
      setTimeout(function() {
      location.reload();
      }, 1000)


    })
    .fail(function(response) {
      location.reload();
      $.each(response.responseJSON, function(index, val) {
        new PNotify({
            title: 'Error',
            text: val,
            addclass: 'alert bg-danger alert-styled-left'
        });
    })

    })
  }

  function send_to_pharmacy(pres_id){

    $.ajax({
      url: base_url+'index.php/persistent/send_to_pharmacy',
      type: 'POST',
      dataType: 'JSON',
      data: { "pres_id":pres_id }
    })
    .done(function(response) {

      new PNotify({
          title: 'Success',
          text:'Prescription sent successfully',
          addclass: 'alert bg-success alert-styled-left'
      });

    })
    .fail(function(response) {

      $.each(response.responseJSON, function(index, val) {
        new PNotify({
            title: 'Error',
            text: val,
            addclass: 'alert bg-danger alert-styled-left'
        });
    })

    })

  }

  function set_default(drug_id){

    $('#drug_price_id').val("");

    var pid = $("#p_id").val();

    $.ajax({
      url: base_url+'index.php/persistent/get_default',
      type: 'POST',
      dataType: 'JSON',
      data: { "drug_id":drug_id }
    })

    .done(function(response) {

      response.forEach(function (el){
        // alert(el.stock)

        reorder_level = parseInt(el.reorder_level);
        stock = parseInt(el.stock);

        if(reorder_level >= stock){

        if (confirm('This drug is in low stock, Do you want to prescribe?')) {
            $('#dosage').val(el.default_dosage);
          $('#frequency').val(el.default_frequency);
          $('#period').val(el.default_period);
        } else {
           location.reload();
        }
        }

          

      })

    })
    .fail(function(response) {


    })

    $.ajax({
      url: base_url+'index.php/persistent/get_drug_price',
      type: 'POST',
      dataType: 'JSON',
      data: { "drug_id":drug_id }
    })

    .done(function(response) {

      response.forEach(function (el){

          $('#drug_price_id').val(el.id);


      })

    })
    .fail(function(response) {
      alert("Please check drug price of this selected drug")

    })

  }

  function dispense(visit_id){
    // alert(visit_id)

    data = $('#dispense').serializeArray();
    pid = $('#p_id').val();
    // alert(pid)
    // alert(data)

    $.ajax({
      url: base_url+'index.php/persistent/dispense',
      type: 'POST',
      dataType: 'text',
      data: data
    })
    .done(function(response) {

      new PNotify({
          title: 'Success',
          text:'Form submited without any error',
          addclass: 'alert bg-success alert-styled-left'
      });
      setTimeout(function() {
          location.reload();
      }, 1000);
        // window.location = base_url+"index.php/patient/patient_visit_over_view/"+pid+"/"+visit_id+"?page=pharmacy";

    })
    .fail(function(response) {

      $.each(response.responseJSON, function(index, val) {
        new PNotify({
            title: 'Error',
            text: val,
            addclass: 'alert bg-danger alert-styled-left'
        });
    })

    })

  }

  

//Continue all previouse items
  function continue_all(){

    var pres_id = $("#pres_id").val();
    var previouse_pres_id = $("#previouse_pres_id").val();
    var v_id = $("#v_id").val();
    var p_id = $("#p_id").val();

    $.ajax({
      url: base_url+'index.php/persistent/continue_all',
      type: 'POST',
      dataType: 'json',
      data: {"pres_id":pres_id, "previouse_pres_id":previouse_pres_id, "v_id":v_id, "p_id":p_id}
    })
    .done(function() {
      new PNotify({
          title: 'Success',
          text:'Form submited without any error',
          addclass: 'alert bg-success alert-styled-left'
      });
      setTimeout(function() {
     location.reload();
      }, 1000)


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


    })

  }



  function save_payment() {
    // alert()
  
        data = $('#payment').serializeArray();
        $.ajax({
          url: base_url+'index.php/billing/save_payment',
          type: 'POST',
          dataType: 'JSON',
          data: data
        })
        .done(function(response) {
  
          new PNotify({
              title: 'Success',
              text:'Form submited without any error',
              addclass: 'alert bg-success alert-styled-left'
          });
  
 
  
        })
        .fail(function(response) {
  
          $.each(response.responseJSON, function(index, val) {
            new PNotify({
                title: 'Error',
                text: val,
                addclass: 'alert bg-danger alert-styled-left'
            });
        })
  
        })
  
  }

  $('#sweet_loader').on('click', function() {
      swal({
          title: "Do you want save the payment",
          text: "",
          type: "info",
          showCancelButton: true,
          closeOnConfirm: false,
          confirmButtonColor: "#2196F3",
          showLoaderOnConfirm: true
      },
      function() {

        data = $('#payment').serializeArray();
              $.ajax({
                url: base_url+'index.php/billing/save_payment',
                type: 'POST',
                dataType: 'JSON',
                data: data
              })
              .done(function(response) {
                setTimeout(function() {
                    swal({
                        title: "Payment finished!",
                        confirmButtonColor: "#2196F3"
                    });
                }, 1000);
                // location.reload();
                $('#sweet_loader').hide();
                $('#status11').show();

              })
              .fail(function(response) {

                $.each(response.responseJSON, function(index, val) {
                  new PNotify({
                      title: 'Error',
                      text: val,
                      addclass: 'alert bg-danger alert-styled-left'
                  });
              })

              })
      });

  });
