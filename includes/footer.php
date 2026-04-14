   <!-- Jquery JS-->
   <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script>
  
    </script>
    //   <!-- Add Course Form Validation -->
  <script>
  $(document).ready(function(){
    $('.loader').fadeOut(1000);
    $('#check').hide();
    $('#error_check').hide();
    $('#check_email').hide();
    $('#error_check_email').hide();
    $('#check_password').hide();
    $('#error_check_password').hide();
    $('#check_con_password').hide();
    $('#error_check_con_password').hide();
    $('#valiadte_error1').hide();
    $('#valiadte_error2').hide();
    $('#valiadte_error3').hide();
    $('#valiadte_error4').hide();
    var user_name = true;
    var email = true;
    var password = true;
    $('#user_name').keyup(function(){
      usernamefun();
    });
    $('#email').keyup(function(){
      emailfun();
    });
    $('#password').keyup(function(){
        passwordfun();
    });
    function  usernamefun(){//user_name function
      var user_name_value = $('#user_name').val();
      // alert(user_name);
      if(user_name_value.length == "")
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#error_check').show();
        $('#check').hide();
        $('#user_name').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html(' This field is required');
        $('#valiadte_error1').css('color','red');
        $('#username_lable').css('color','red');
        user_name = false;
        return false;
      }else{
        $('#error_user_name').hide();
      }
      if((user_name_value.length<=5) || (user_name_value.length>15))
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#error_check').show();
        $('#check').hide();
        $('#user_name').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html(' Name must be between 3 to 10');
        $('#valiadte_error1').css('color','red');
        $('#username_lable').css('color','red');
        user_name = false;
        return false;
      }else{
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#error_check').hide();
        $('#check').show();
        $('#user_name').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error1').html('Varified username');
        $('#valiadte_error1').css('color','green');
        $('#username_lable').css('color','green');
      }     
    }//user_name function
   
    function emailfun(){//email function
      var email_value = $('#email').val();
      // alert(email);
      if(email_value.length == "")
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#error_check_email').show();
        $('#check_email').hide();
        $('#email').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html(' This field is required');
        $('#valiadte_error2').css('color','red');
        $('#email_lable').css('color','red');
        email = false;
        return false;
      }else{
        $('#error_email').hide();
      }
      if(email_value.indexOf('@')<=0)
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#error_check_email').show();
        $('#check_email').hide();
        $('#email').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html(' @ Invalid Position');
        $('#valiadte_error2').css('color','red');
        $('#email_lable').css('color','red');
        email = false;
        return false;
      }else{
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#error_check_email').hide();
        $('#check_email').show();
        $('#email').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error2').html('Varified');
        $('#valiadte_error2').css('color','green');
        $('#email_lable').css('color','green');
      }     
      if((email_value.charAt(email_value.length-4)!='.') &&(email_value.charAt(email_value.length-3)!='.' ))
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#error_check_email').show();
        $('#check_email').hide();
        $('#email').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html(' . Invalid Position');
        $('#valiadte_error2').css('color','red');
        $('#email_lable').css('color','red');
        email = false;
        return false;
      }else{
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#error_check_email').hide();
        $('#check_email').show();
        $('#email').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error2').html('Varified email address');
        $('#valiadte_error2').css('color','green');
        $('#email_lable').css('color','green');
      }
    }//email function
   
    function  passwordfun(){//password function
      var password_value = $('#password').val();
      var con_password_value = $('#con_password').val();
      // alert(password_value);
      if(password_value.length == "")
      {
        $('#valiadte_error3').show();
        $('#valiadte_error3').focus();
        $('#error_check_password').show();
        $('#check_password').hide();
        $('#password').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error3').html(' This field is required');
        $('#valiadte_error3').css('color','red');
        $('#password_lable').css('color','red');
        password = false;
        return false;
      }else{
        $('#error_password').hide();
      }
      if((password_value.length<=5) || (password_value.length>15))
      {
        $('#valiadte_error3').show();
        $('#valiadte_error3').focus();
        $('#error_check_password').show();
        $('#check_password').hide();
        $('#password').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error3').html(' Name must be between 5 to 15');
        $('#valiadte_error3').css('color','red');
        $('#password_lable').css('color','red');
        password = false;
        return false;
      }else{
        $('#valiadte_error3').show();
        $('#valiadte_error3').focus();
        $('#error_check_password').hide();
        $('#check_password').show();
        $('#password').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error3').html('Varified Password');
        $('#valiadte_error3').css('color','green');
        $('#password_lable').css('color','green');
      }  // password function    

      // if(password_value !== con_password_value)
      // {
      //   $('#valiadte_error4').html('Varified Password');
      // }
     
    }
    
   
    $('#register').click(function(){
      user_name = true;
    email = true;
    password = true;
    usernamefun();  
    emailfun();
    passwordfun();
      if((user_name == true) && (email == true ) && (password == true ))
      {
        return true;
      }
      else{
        return false;
      }
    });

    <!--////////////////ADMIN Login Show Hide Password////////////////////-->

    $('.show_btn').on("click",function(event){
      event.preventDefault();
      // alert("show hide");
      var passwordField = $('#password');
        //  alert(password_val);
      var passwordFieldType = passwordField.attr('type');
      if(passwordFieldType == "password")
      {
        passwordField.attr('type','text');
        $('.show_btn').html("Hide Password");
      }else{
        passwordField.attr('type','password');
        $('.show_btn').html("Show Password");
      }
    });
  //  <!-- ADMIN Login Show Hide Password/////////////////// -->
  <!--////////////////ADMIN REGISTRAION Show Hide Password////////////////////-->

//  <!-- ADMIN REGISTRAION Show Hide Password/////////////////// -->

<!--////////////////username available or not check  ajax////////////////////-->
    $('#user_name').keyup(function(){
         var username = $(this).val();
        //  alert(username);
        $.ajax({
          url : "username_available.php",
          type : "post",
          data : {username : username},
          success : function(data){
            if(data != '0')
            {
              $('#valiadte_error1').show();
              $('#valiadte_error1').focus();
              $('#error_check').show();
              $('#check').hide();
              $('#user_name').css({"border":"2px solid red","opacity":".6"});
              $('#valiadte_error1').html('Username Not Available');
              $('#valiadte_error1').css('color','red');
              $('#username_lable').css('color','red');
            }else{
              $('#valiadte_error1').show();
              $('#valiadte_error1').focus();
              $('#error_check').hide();
              $('#check').show();
              $('#user_name').css({"border":"2px solid green","opacity":".6"});
              $('#valiadte_error1').html('Username Available');
              $('#valiadte_error1').css('color','green');
              $('#username_lable').css('color','green');
            }
          }
        });
      });
//  <!-- username available or not check  ajax/////////////////// -->
  
});
</script>
</body>
</html>