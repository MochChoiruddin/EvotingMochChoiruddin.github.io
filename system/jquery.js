$(document).ready(function() {
  $('#check-all').click(function(){
    $("input:checkbox").attr('checked', true);
  });
  $('#uncheck-all').click(function(){
    $("input:checkbox").attr('checked', false);
  });
});