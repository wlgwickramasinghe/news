//Save News
function save_news() {

  base_url = 'http://127.0.0.1/DSMS/'

var formData = new FormData($('#news_form')[0]);

  $.ajax({
  url: base_url+'index.php/news/save_news',
  method:"POST",
  data: formData, 
  contentType: false,  
  cache: false,  
  processData:false,  
  })
  .done(function() {
    new PNotify({
        title: 'Success',
        text:'Form submited without any error',
        addclass: 'alert bg-success alert-styled-left'
    });
    // $('#news_form')[0].reset();
     setTimeout(function(){
  window.location = base_url+"index.php/news/view_news?page=news";
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


//Update News
function update_news(){

var formData = new FormData($('#news_form_edit')[0]);

$.ajax({
  url: base_url+'index.php/news/update_news',
  method:"POST",  
    data: formData,   
    contentType: false,  
    cache: false,  
    processData:false,
})
.done(function() {
  new PNotify({
      title: 'Success',
      text:'Form submited without any error',
      addclass: 'alert bg-success alert-styled-left'
  });
  setTimeout(function(){
  window.location = base_url+"index.php/news/view_news?page=news";
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

