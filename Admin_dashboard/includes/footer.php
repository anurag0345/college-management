
  </script>
  <!-- jQuery -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="js/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <script>
  </script>
  <!-- Add Course Form Validation -->
  <script>
  $(document).ready(function(){
    $('#valiadte_error1').hide();
    $('#valiadte_error2').hide();
    $('#valiadte_error3').hide();
    var branch = true;
    var address = true;
    $('#branch').keyup(function(){
      branch_value();
    });
    $('#address').keyup(function(){
      address_value();
    });

    function branch_value(){//branch function
      var branch_value = $('#branch').val();
      // alert(branch);
      if(branch_value.length == "")
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Please Fill The Branch');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        $('#error_branch').hide();
      }
      if(!isNaN(branch_value))
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Only Charecter Are Allowed');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        
      }
      if((branch_value.length<=2) || (branch_value.length>25))
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Branch Name Must Be Between 3 to 10');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error1').css('color','green');
      }
      
     
    }//branch function
    function address_value(){//address function
      var address_value = $('#address').val();
      if(address_value.length == '')
      {
        $('#valiadte_error2').show();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Please Fill The Address');
        $('#valiadte_error2').css('color','red');
        address = false;
        return false;
      }
      else{
      } 
      if(!isNaN(address_value))
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Only Charecter Are Allowed');
        $('#valiadte_error2').css('color','red');
        branch = false;
        return false;
      }else{
        
      }
      if((address_value.length<=5) || (address_value.length>25))
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Address Must Be Between 8 to 20');
        $('#valiadte_error2').css('color','red');
        address = false;
        return false;
      }else{
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error2').css('color','green');
      }   
    }//address function

    $('#add_course').click(function(){
    branch = true;
    address = true;
    branch_value();
    address_value();
    if((branch == true) && (address == true))
    {
      return true;
    }else{
      return false;
    }
    });
});
</script>
<!-- ////////////////////////////////////////////Add Course Form Validation///////////////////////////////////// -->

 <!-- ///////////////////////////////////////////Add Student Form Validation///////////////////////////////////// -->
  <script>
$(document).ready(function(){
    $('#valiadte_error4').hide();
    $('#valiadte_error5').hide();
    $('#valiadte_error6').hide();
    $('#valiadte_error7').hide();
    $('#valiadte_error9').hide();
    $('#valiadte_error10').hide();
    $('#valiadte_error11').hide();
    $('#valiadte_error12').hide();
    $('#valiadte_error13').hide();
    $('#valiadte_error14').hide();
    $('#valiadte_error15').hide();
    $('#valiadte_error16').hide();
    $('#valiadte_error17').hide();
    $('#valiadte_error18').hide();
    $('#valiadte_error19').hide();
    var std_name = true;
    var father_name = true;
    var contact = true ;
    var std_year = true ;
    var tution_fees = true;
    var td_fees = true;
    var sports = true;
    var insurance = true;
    var caution_money = true;
    var Fee_Welfare = true;
    var Advance_Fee = true;
    var std_total = true;
    var std_username = true;
    var std_password = true;
    $('#std_name').keyup(function(){
      stdname();
    });
    $('#father_name').keyup(function(){
      fathername();
    });
    $('#contact').keyup(function(){
      contactnumber();
    });
    $('#std_year').keyup(function(){
      std_yearfun();
    });
    $('#tution_fees').keyup(function(){
      tution_feesfun();
    });
    $('#td_fees').keyup(function(){
      td_feesfun();
    });
    $('#sports').keyup(function(){
      sportsfun();
    });
    $('#insurance').keyup(function(){
      insurancefun();
    });
    $('#caution_money').keyup(function(){
      cautionmoneyfun();
    });
    $('#Fee_Welfare').keyup(function(){
      Feewelfarefun();
    });
    $('#Advance_Fee').keyup(function(){
      Advancefeefun();
    });
    $('#std_total').keyup(function(){
      std_totalfun();
    });
    $('#std_username').keyup(function(){
      std_usernamefun();
    });
    $('#std_password').keyup(function(){
      std_passwordfun();
    });
    // call Student Name Function
    function stdname(){
      var std_name_value = $('#std_name').val();
      // alert(std_name_value);
      if(std_name_value.length =="")
      {
        $('#valiadte_error4').show();
        $('#valiadte_error4').focus();
        $('#std_name').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error4').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error4').css('color','red');
        std_name = false;
        return false;
      }else{
        $('#valiadte_error4').hide();
      }
      if(!isNaN(std_name_value))
      {
        $('#valiadte_error4').show();
        $('#valiadte_error4').focus();
        $('#std_name').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error4').html('<i class="fas fa-times text-red"></i> Please Must be write digits only !');
        $('#valiadte_error4').css('color','red');
        std_name = false;
        return false;
      }else{
        $('#valiadte_error4').hide();
      }
      if((std_name_value.length<=3) || (std_name_value.length>20))
      {
        $('#valiadte_error4').show();
        $('#valiadte_error4').focus();
        $('#std_name').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error4').html('<i class="fas fa-times text-red"></i> student Name Must Be Between 3 to 10');
        $('#valiadte_error4').css('color','red');
        std_name = false;
        return false;
      }else{
        $('#valiadte_error4').show();
        $('#valiadte_error4').focus();
        $('#std_name').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error4').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error4').css('color','green');
      }
    }// End call Student Name Function

     // call Father Name Function
     function fathername(){
      var father_name_value = $('#father_name').val();
      // alert(father_name_value);
      if(father_name_value.length =="")
      {
        $('#valiadte_error5').show();
        $('#valiadte_error5').focus();
        $('#father_name').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error5').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error5').css('color','red');
        father_name = false;
        return false;
      }else{
        $('#valiadte_error5').hide();
      }
      if(!isNaN(father_name_value))
      {
        $('#valiadte_error5').show();
        $('#valiadte_error5').focus();
        $('#father_name').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error5').html('<i class="fas fa-times text-red"></i> Please Must be write digits only !');
        $('#valiadte_error5').css('color','red');
        father_name = false;
        return false;
      }else{
        $('#valiadte_error5').hide();
      }
      if((father_name_value.length<=3) || (father_name_value.length>20))
      {
        $('#valiadte_error5').show();
        $('#valiadte_error5').focus();
        $('#father_name').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error5').html('<i class="fas fa-times text-red"></i> Father Name Must Be Between 3 to 10');
        $('#valiadte_error5').css('color','red');
        father_name = false;
        return false;
      }else{
        $('#valiadte_error5').show();
        $('#valiadte_error5').focus();
        $('#father_name').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error5').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error5').css('color','green');
      }
    }// End call Father Name Function

      // call Contact Number Function
      function  contactnumber(){
      var contact_no_value = $('#contact').val();
      // alert(contact_no_value);
      if(contact_no_value.length =="")
      {
        $('#valiadte_error6').show();
        $('#valiadte_error6').focus();
        $('#contact').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error6').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error6').css('color','red');
        contact = false;
        return false;
      }else{
        $('#valiadte_error6').hide();
      }
      if(isNaN(contact_no_value))
      {
        $('#valiadte_error6').show();
        $('#valiadte_error6').focus();
        $('#contact').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error6').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error6').css('color','red');
        contact = false;
        return false;
      }else{
        $('#valiadte_error6').hide();
      }
      if(contact_no_value.length!=10)
      {
        $('#valiadte_error6').show();
        $('#valiadte_error6').focus();
        $('#contact').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error6').html('<i class="fas fa-times text-red"></i> Contact Must be 10 Numbers');
        $('#valiadte_error6').css('color','red');
        contact = false;
        return false;
      }else{
        $('#valiadte_error6').show();
        $('#valiadte_error6').focus();
        $('#contact').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error6').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error6').css('color','green');
      }
    }// End call Contact Number Function

     // call student Year Function
     function  std_yearfun(){
      var std_year_value = $('#std_year').val();
      // alert(std_year_value);
      if(std_year_value.length =="")
      {
        $('#valiadte_error7').show();
        $('#valiadte_error7').focus();
        $('#std_year').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error7').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error7').css('color','red');
        std_year = false;
        return false;
      }else{
        $('#valiadte_error7').show();
        $('#valiadte_error7').html('<i class="fas fa-check text-green"></i> Success.');
        $('#std_year').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error7').css('color','green');
      }
     
    }// End call student Year Function
      // call tution_feesfun Function
      function  tution_feesfun(){
      var tution_fees_value = $('#tution_fees').val();
      // alert(tution_fees_value)
      if(tution_fees_value.length =="")
      {
        $('#valiadte_error9').show();
        $('#valiadte_error9').focus();
        $('#tution_fees').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error9').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error9').css('color','red');
        tution_fees = false;
        return false;
      }else{
        $('#valiadte_error9').hide();
      }
      if(isNaN(tution_fees_value))
      {
        $('#valiadte_error9').show();
        $('#valiadte_error9').focus();
        $('#tution_fees').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error9').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error9').css('color','red');
        tution_fees = false;
        return false;
      }else{
        $('#valiadte_error9').show();
        $('#valiadte_error9').html('<i class="fas fa-check text-green"></i> Success.');
        $('#tution_fees').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error9').css('color','green');
      }
    
    }// End call tution_fees Function

    // call td_fees Function
    function  td_feesfun(){
      var td_fees_value = $('#td_fees').val();
      // alert(td_fees_value)
      if(td_fees_value.length =="")
      {
        $('#valiadte_error10').show();
        $('#valiadte_error10').focus();
        $('#td_fees').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error10').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error10').css('color','red');
        td_fees = false;
        return false;
      }else{
        $('#valiadte_error10').hide();
      }
      if(isNaN(td_fees_value))
      {
        $('#valiadte_error10').show();
        $('#valiadte_error10').focus();
        $('#td_fees').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error10').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error10').css('color','red');
        td_fees = false;
        return false;
      }else{
        $('#valiadte_error10').show();
        $('#valiadte_error10').html('<i class="fas fa-check text-green"></i> Success.');
        $('#td_fees').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error10').css('color','green');
      }
    
    }// End call td_fees Function

     // call sportsfun Function
     function  sportsfun(){
      var sports_value = $('#sports').val();
      // alert(sports_value)
      if(sports_value.length =="")
      {
        $('#valiadte_error11').show();
        $('#valiadte_error11').focus();
        $('#sports').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error11').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error11').css('color','red');
        sports = false;
        return false;
      }else{
        $('#valiadte_error11').hide();
      }
      if(isNaN(sports_value))
      {
        $('#valiadte_error11').show();
        $('#valiadte_error11').focus();
        $('#sports').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error11').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error11').css('color','red');
        sports = false;
        return false;
      }else{
        $('#valiadte_error11').show();
        $('#valiadte_error11').html('<i class="fas fa-check text-green"></i> Success.');
        $('#sports').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error11').css('color','green');
      }
    
    }// End call sportsfun Function

    // call insurancefun Function
    function  insurancefun(){
      var insurance_value = $('#insurance').val();
      // alert(insurance_value)
      if(insurance_value.length =="")
      {
        $('#valiadte_error12').show();
        $('#valiadte_error12').focus();
        $('#insurance').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error12').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error12').css('color','red');
        insurance = false;
        return false;
      }else{
        $('#valiadte_error12').hide();
      }
      if(isNaN(insurance_value))
      {
        $('#valiadte_error12').show();
        $('#valiadte_error12').focus();
        $('#insurance').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error12').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error12').css('color','red');
        insurance = false;
        return false;
      }else{
        $('#valiadte_error12').show();
        $('#valiadte_error12').html('<i class="fas fa-check text-green"></i> Success.');
        $('#insurance').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error12').css('color','green');
      }
    
    }// End call insurancefun Function

     // call caution_moneyfun Function
     function  cautionmoneyfun(){
      var caution_money_value = $('#caution_money').val();
      // alert(caution_money_value)
      if(caution_money_value.length =="")
      {
        $('#valiadte_error13').show();
        $('#valiadte_error13').focus();
        $('#caution_money').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error13').html('<i class="fas fa-times text-red"></i>  This Field is Required !');
        $('#valiadte_error13').css('color','red');
        caution_money = false;
        return false;
      }else{
        $('#valiadte_error13').hide();
      }
      if(isNaN(caution_money_value))
      {
        $('#valiadte_error13').show();
        $('#valiadte_error13').focus();
        $('#caution_money').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error13').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error13').css('color','red');
        caution_money = false;
        return false;
      }else{
        $('#valiadte_error13').show();
        $('#valiadte_error13').html('<i class="fas fa-check text-green"></i> Success.');
        $('#caution_money').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error13').css('color','green');
      }
    
    }// End call caution_money Function

         // call Fee_Welfare Function
         function  Feewelfarefun(){
      var Fee_Welfare_value = $('#Fee_Welfare').val();
      // alert(Fee_Welfare_value)
      if(Fee_Welfare_value.length =="")
      {
        $('#valiadte_error14').show();
        $('#valiadte_error14').focus();
        $('#Fee_Welfare').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error14').html('<i class="fas fa-times text-red"></i>   This Field is Required !');
        $('#valiadte_error14').css('color','red');
        Fee_Welfare = false;
        return false;
      }else{
        $('#valiadte_error14').hide();
      }
      if(isNaN(Fee_Welfare_value))
      {
        $('#valiadte_error14').show();
        $('#valiadte_error14').focus();
        $('#Fee_Welfare').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error14').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error14').css('color','red');
        Fee_Welfare = false;
        return false;
      }else{
        $('#valiadte_error14').show();
        $('#valiadte_error14').html('<i class="fas fa-check text-green"></i> Success.');
        $('#Fee_Welfare').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error14').css('color','green');
      }
    
    }// End call Fee_Welfare Function    
    
      // call Advancefeefun() Function
      function  Advancefeefun(){
      var Advance_Fee_value = $('#Advance_Fee').val();
      // alert(Advance_Fee_value)
      if(Advance_Fee_value.length =="")
      {
        $('#valiadte_error15').show();
        $('#valiadte_error15').focus();
        $('#Advance_Fee').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error15').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error15').css('color','red');
        Advance_Fee = false;
        return false;
      }else{
        $('#valiadte_error15').hide();
      }
      if(isNaN(Advance_Fee_value))
      {
        $('#valiadte_error15').show();
        $('#valiadte_error15').focus();
        $('#Advance_Fee').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error15').html('<i class="fas fa-times text-red"></i> Please Must be write Numbers only !');
        $('#valiadte_error15').css('color','red');
        Advance_Fee = false;
        return false;
      }else{
        $('#valiadte_error15').show();
        $('#valiadte_error15').html('<i class="fas fa-check text-green"></i> Success.');
        $('#Advance_Fee').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error15').css('color','green');
      }
    
    }// End call Advance_Fee Function

    // call std_totalfeefun() Function
    function  std_totalfun(){
      var std_total_value = $('#std_total').val();
      // alert(std_total_value)
      if(std_total_value.length =="")
      {
        $('#valiadte_error19').show();
        $('#valiadte_error19').focus();
        $('#std_total').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error19').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error19').css('color','red');
        std_total = false;
        return false;
      }else{
        $('#valiadte_error19').show();
        $('#valiadte_error19').html('<i class="fas fa-check text-green"></i> Success.');
        $('#std_total').css({'border':'2px solid green','opacity':'.6'});
        $('#valiadte_error19').css('color','green');
      }
    
    
    }// End call std_total Function


       // call std_usernamefun() Function
       function  std_usernamefun(){
      var std_username_value = $('#std_username').val();
      // alert(std_username_value);
      if(std_username_value.length =="")
      {
        $('#valiadte_error17').show();
        $('#valiadte_error17').focus();
        $('#std_username').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error17').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error17').css('color','red');
        std_username = false;
        return false;
      }else{
        $('#valiadte_error17').hide();
      }
      if(std_username_value.length!=12)
      {
        $('#valiadte_error17').show();
        $('#valiadte_error17').focus();
        $('#std_username').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error17').html('<i class="fas fa-times text-red"></i> Adhar Number bust be 12 Digit');
        $('#valiadte_error17').css('color','red');
        std_username = false;
        return false;
      }else{
        $('#valiadte_error17').show();
        $('#valiadte_error17').focus();
        $('#std_username').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error17').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error17').css('color','green');
      }
    }// End call std_usernamefun() Function

      // call std_passwordfun() Function
      function  std_passwordfun(){
      var std_password_value = $('#std_password').val();
      // alert(std_password_value)
      if(std_password_value.length =="")
      {
        $('#valiadte_error18').show();
        $('#valiadte_error18').focus();
        $('#std_password').css({'border':'2px solid red','opacity':'.6'});
        $('#valiadte_error18').html('<i class="fas fa-times text-red"></i> This Field is Required !');
        $('#valiadte_error18').css('color','red');
        std_password = false;
        return false;
      }else{
        $('#valiadte_error18').show();
        $('#valiadte_error18').focus();
        $('#std_password').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error18').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error18').css('color','green');
      }
    }// End call std_passwordfun() Function
    $('#add_student').click(function(){
    std_name = true;
    father_name = true;
    contact = true ;
    std_year = true;
    tution_fees = true;
    td_fees = true;
    sports = true;
    insurance = true;
    caution_money = true;
    Fee_Welfare = true;
    Advance_Fee = true;  
    std_total = true; 
    std_username = true;
    std_password = true;
    stdname();  
    fathername();   
    contactnumber();
    std_yearfun();   
    tution_feesfun(); 
    td_feesfun();
    sportsfun();  
    insurancefun();    
    cautionmoneyfun();
    Feewelfarefun();
    Advancefeefun();
    std_totalfun();
    std_usernamefun();
    std_passwordfun();
    if((std_name == true) && (father_name == true) && (contact == true) && (std_year = true) && (tution_fees == true)
     && (td_fees == true) && (sports == true) && (insurance == true) && (caution_money == true)
     && (Fee_Welfare == true) && (Advance_Fee == true) && (std_total = true) &&( std_username = true) &&(std_password = true) )
    {
      return true;
    }else{
      return false;
    }
    }); 
});
</script>
<!--///////////////////////////////////////////Add Student Form Validation////////////////////////////////////// -->
<!--/////////////////////////////////////////// Setting/Forgot Password////////////////////////////////////// -->
 <!-- Add Course Form Validation -->
 <script>
  $(document).ready(function(){
    $('#valiadte_error1').hide();
    $('#valiadte_error2').hide();
    $('#valiadte_error3').hide();
    var branch = true;
    var address = true;
    $('#branch').keyup(function(){
      branch_value();
    });
    $('#address').keyup(function(){
      address_value();
    });

    function branch_value(){//branch function
      var branch_value = $('#branch').val();
      // alert(branch);
      if(branch_value.length == "")
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Please Fill The Branch');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        $('#error_branch').hide();
      }
      if(!isNaN(branch_value))
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Only Charecter Are Allowed');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        
      }
      if((branch_value.length<=2) || (branch_value.length>25))
      {
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-times text-red"></i> Branch Name Must Be Between 3 to 10');
        $('#valiadte_error1').css('color','red');
        branch = false;
        return false;
      }else{
        $('#valiadte_error1').show();
        $('#valiadte_error1').focus();
        $('#branch').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error1').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error1').css('color','green');
      }
      
     
    }//branch function
    function address_value(){//address function
      var address_value = $('#address').val();
      if(address_value.length == '')
      {
        $('#valiadte_error2').show();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Please Fill The Address');
        $('#valiadte_error2').css('color','red');
        address = false;
        return false;
      }
      else{
      } 
      if(!isNaN(address_value))
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Only Charecter Are Allowed');
        $('#valiadte_error2').css('color','red');
        branch = false;
        return false;
      }else{
        
      }
      if((address_value.length<=5) || (address_value.length>25))
      {
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid red","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-times text-red"></i> Address Must Be Between 8 to 20');
        $('#valiadte_error2').css('color','red');
        address = false;
        return false;
      }else{
        $('#valiadte_error2').show();
        $('#valiadte_error2').focus();
        $('#address').css({"border":"2px solid green","opacity":".6"});
        $('#valiadte_error2').html('<i class="fas fa-check text-green"></i> Success.');
        $('#valiadte_error2').css('color','green');
      }   
    }//address function

    $('#add_course').click(function(){
    branch = true;
    address = true;
    branch_value();
    address_value();
    if((branch == true) && (address == true))
    {
      return true;
    }else{
      return false;
    }
    });
});
</script>
<!-- ////////////////////////////////////////////Add Course Form Validation///////////////////////////////////// -->

 



