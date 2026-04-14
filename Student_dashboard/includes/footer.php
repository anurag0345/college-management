   <!-- Jquery JS-->
   <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.loader').fadeOut(1000);
    $('.show_btn').on("click",function(event){
      event.preventDefault();
      var passwordField = $('#password');
      var passwordFieldType = passwordField.attr('type');
      if(passwordFieldType == 'password')
      {
        passwordField.attr('type','text');
        $(this).html("Hide Password");
      }else{
       passwordField.attr('type','password');
        $(this).html("Show Password");
      }
    });
  });
  </script>
</body>
</html>