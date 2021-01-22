<script type='text/javascript'>
 
 // Set check or unchecked all checkboxes
 function checkAll(e) {
   var checkboxes = document.getElementsByName('check');
 
   if (e.checked) {
     for (var i = 0; i < checkboxes.length; i++) { 
       checkboxes[i].checked = true;
     }
   } else {
     for (var i = 0; i < checkboxes.length; i++) {
       checkboxes[i].checked = false;
     }
   }
 }
</script>