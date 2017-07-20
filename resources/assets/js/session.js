$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#registerForm').on('submit', function(e){
  $form = $(e.target);
  url = $form.attr('action') + '?' + $form.serialize();

  $.ajax({
    method: 'post',
    url: url,
    success: function(res, status, xhr){
      data = JSON.parse(res);
      if (data.error_code > 0) {
        alert(data.msg);
      } else {
        location.reload();
      }
    },
    error: function(res, status, xhr){
      console.error('API error');
    }
  });

  return false;
});


$('#loginForm').on('submit', function(e){
  $form = $(e.target);
  url = $form.attr('action') + '?' + $form.serialize();

  $.ajax({
    method: 'post',
    url: url,
    success: function(res, status, xhr){
      data = JSON.parse(res);
      if (data.error_code > 0) {
        alert(data.msg);
      } else {
        location.reload();
      }
    },
    error: function(res, status, xhr){
      console.error('API error');
    }
  });

  return false;
});

