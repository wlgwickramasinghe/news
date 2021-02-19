//Save Video
function save_video() {

   base_url = 'http://127.0.0.1/DSMS/'

  data = $('#video_form').serializeArray();

  $.ajax({
    url: base_url+'index.php/video/save_video',
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
    $('#video_form')[0].reset();
     setTimeout(function(){
  window.location = base_url+"index.php/video/view_video?page=video";
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

//Updat Video
function update_video(){

data = $('#video_form_edit').serializeArray();

$.ajax({
  url: base_url+'index.php/video/update_video',
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
  window.location = base_url+"index.php/video/view_video?page=video";
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

