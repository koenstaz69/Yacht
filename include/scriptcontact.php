<!-- JQUERY:: JQUERY.JS -->
      <script src="assets/js/jquery.min.js"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src="assets/js/tether.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- JQUERY:: CUSTOM -->
      <script src="assets/js/custom.js"></script>

      <script>
        function sendContact() { 
           var valid;  
            valid = validateContact();
            if(valid) { 
              jQuery.ajax({
                url: "contact_mail.php",
                data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
                type: "POST",
                success:function(data){
                  $("#mail-status").html(data);
                },
                error:function (){}
              }); 
            }
        }
        function validateContact() {
            var valid = true;  
            if(!$("#userName").val()) {
              valid = false;
            }
            if(!$("#userEmail").val()) {
              valid = false;
            }
            if(!$("#subject").val()) {
              valid = false;
            }
            if(!$("#content").val()) {
              valid = false;
            }
            return valid;
          }
      </script>