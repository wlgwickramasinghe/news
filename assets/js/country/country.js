//Save Drug
function save_country() {

   base_url = 'http://127.0.0.1/DSMS/'

  data = $('#country_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/country/save_country',
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
    $('#country_form')[0].reset();
     setTimeout(function(){
  window.location = base_url+"index.php/country/view_country?page=country";
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

//Updat drug
function update_country(){

data = $('#country_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/country/update_country',
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
  window.location = base_url+"index.php/country/view_country?page=country";
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

 // Delete Dosage
 $('.delete_drug').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/drug/delete_drug',
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


//Save Drug Dosage
function save_dosage() {

  data = $('#dosage_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/drug/save_dosage',
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
    $('#dosage_form')[0].reset();
    setTimeout(function(){
      window.location = base_url+"index.php/drug/view_dosage?page=drug";
    // location.reload();
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

//Update dosage data
function update_dosage(){

data = $('#dosage_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/drug/update_dosage',
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
  window.location = base_url+"index.php/drug/view_dosage?page=drug";
  },1000);
  // window.location = base_url+"index.php/drug/view_dosage";

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

 // Delete Dosage
 $('.delete_dosage').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/drug/delete_dosage',
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

//Save Frequency
function save_frequency() {

  data = $('#frequency_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/drug/save_frequency',
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
    $('#frequency_form')[0].reset();
    setTimeout(function(){
    window.location = base_url+"index.php/drug/view_frequency?page=drug";
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

//Update frequency
function update_frequency(){

data = $('#frequency_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/drug/update_frequency',
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
  window.location = base_url+"index.php/drug/view_frequency?page=drug";
  },1000);
  // window.location = base_url+"index.php/drug/view_frequency";

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

 // Delete Frequency
 $('.delete_frequency').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/drug/delete_frequency',
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

//Drug Frequency
function save_period() {

  data = $('#period_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/drug/save_period',
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
    $('#period_form')[0].reset();
    setTimeout(function(){
     window.location = base_url+"index.php/drug/view_period?page=drug";
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

//Update period
function update_period(){

data = $('#period_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/drug/update_period',
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
  window.location = base_url+"index.php/drug/view_period?page=drug";
  },1000);
  // window.location = base_url+"index.php/drug/view_period";

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

 // Delete Dosage
 $('.delete_period').click(function(){
  var el = this;
  var id = this.id;

var result = confirm("Want to delete?");
if (result) {
  $.ajax({
   url: base_url+'index.php/drug/delete_period',
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

//Get Drug Current Stock
function get_current_stock(drug_id) {

  $.ajax({
    url: base_url+'index.php/drug/get_current_stock',
    type: 'POST',
    dataType: 'JSON',
    data: { "drug_id":drug_id }
  })
  .done(function(stock) {

        $('#c_stock').val(stock);
        $('#add').val("");
        $('#remove').val("");

    


  })
  .fail(function(response) {


  })

}
function add_stock(){

  drug_id = $('#drug_id').val();
  add_quantity = parseInt($('#add').val());
  current_stock = parseInt($('#c_stock').val());

  $.ajax({
    url: base_url+'index.php/drug/save_add_stock',
    type: 'POST',
    dataType: 'json',
    data: { "drug_id":drug_id, "add_quantity":add_quantity }
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Stock added successfully',
        addclass: 'alert bg-success alert-styled-left'
    });

    if(Number.isNaN(current_stock) == true){
      true_stock = 0;
    }else{
      true_stock = current_stock;
    }
    tot = parseInt(true_stock+add_quantity);
    $('#c_stock').val(tot);

    setTimeout(function(){

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

function remove_stock(){

  drug_id = $('#drug_id').val();
  remove_quantity = parseInt($('#remove').val());
  current_stock = parseInt($('#c_stock').val());

  $.ajax({
    url: base_url+'index.php/drug/save_remove_stock',
    type: 'POST',
    dataType: 'json',
    data: { "drug_id":drug_id, "remove_quantity":remove_quantity }
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Drug Deducted successfully',
        addclass: 'alert bg-success alert-styled-left'
    });
    setTimeout(function(){
    },1000);
    tot = parseInt(current_stock-remove_quantity);
    $('#c_stock').val(tot);
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

function null_remove(quantity) {

  $('#remove').val("");
  current_stock = parseInt($('#c_stock').val());

  intQuantity = parseInt(quantity);

  if(0 > intQuantity){
    new PNotify({
        title: 'Error',
        text: 'Please enter valid quantity',
        addclass: 'alert bg-danger alert-styled-left'
    });
    $('#add').val("");
  }

}

function null_add(quantity) {

  $('#add').val("");

  current_stock = parseInt($('#c_stock').val());
  intQuantity = parseInt(quantity);

  if(current_stock < intQuantity){
    new PNotify({
        title: 'Error',
        text: 'Please enter valid quantity',
        addclass: 'alert bg-danger alert-styled-left'
    });
    $('#remove').val("");
  }

}
