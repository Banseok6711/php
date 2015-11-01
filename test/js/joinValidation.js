
 function joinValidate(){

   //임의로 값을 주고 있음 , 유효성 체크 나중에 수정하기(aJax 사용해서)
   $("input[name='userid']").focusout(function(){

      //  $("#id_check").append("ID is duplicated").css("color","red");
       $("#userid_check").addClass("vali_success");
   });
   $("input[name='userid']").focusin(function(){
       $("#userid_check").empty();
   });

   //비밀번호 자릿수 체크
   $("input[name='password']").focusout(function(){
     if($("input[name='password']").val().length <6 ){
         $("#password_check").append("비밀번호 6자리 이상입력하세요.").css("color", "red");
         $("#password_check").removeClass("vali_success");
     }else{
       $("#password_check").addClass("vali_success");
     }

   });
   $("input[name='password']").focusin(function(){
       $("#password_check").empty();
   });

   //비밀번호 확인
   $("input[name='passwordCheck']").focusout(function(){
       if($("input[name='password']").val() == $("input[name='passwordCheck']").val() && $("input[name='password']").val().length > 5 ){
           $("#passwordCheck_check").append("비밀번호 일치합니다.").css("color","blue");
           $("#passwordCheck_check").addClass("vali_success");
       }else{
         $("#passwordCheck_check").append("비밀번호가 틀립니다.").css("color","red");
            $("#passwordCheck_check").removeClass("vali_success");
       }
   });

   $("input[name='passwordCheck']").focusin(function(){
     $("#passwordCheck_check").empty();
   });


   //fullName regular patter check
   $("input[name='fullName']").focusout(function(){
     var fullNameValue = $("input[name='fullName']").val();
     var namePattern = /[a-zA-Z]{3,8}$/;

     //입력을 안했으면
     if( fullNameValue.lenght == 0 || !fullNameValue.match(namePattern)){
       $("#fullName_check").append("input correct fullName").css("color","red");
       $("#fullName_check").removeClass("vali_success");
     }else{
       $("#fullName_check").addClass("vali_success");
     }
   });

   $("input[name='fullName']").focusin(function(){
      $("#fullName_check").empty();
   });



   //폰번호 자릿수 11자리이거나 미만
   $("input[name='phone']").focusout(function(){
     var phoneNum= $("input[name='phone']").val();
     if(!(phoneNum.length == 11 && $.isNumeric(phoneNum) )){
       $("#phone_check").append("-제외하고 숫자 11자리만 입력해주세요").css("color","red");
       $("#phone_check").removeClass("vali_success");
     }else{
       $("#phone_check").addClass("vali_success");
     }
   });
   $("input[name='phone']").focusin(function(){
     $("#phone_check").empty();
   });

   //birth check
   $("input[name='birth']").focusout(function(){
     if( $("input[name='birth']").val().length != 6 || !$.isNumeric($("input[name='birth']").val()) ){
         $("#birth_check").append("생년월일 6자리를 숫자로 입력해주세요.").css("color","red");
         $("#birth_check").removeClass("vali_success");
     }else{
        $("#birth_check").addClass("vali_success");
     }
   });
   $("input[name='birth']").focusin(function(){
     $("#birth_check").empty();
   });


   //email regular patter check
   $("input[name='email']").focusout(function(){
     var strValue = $("input[name='email']").val();
     var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;

     //입력을 안했으면
     if(strValue.lenght == 0){
       return false;
     }

     //이메일 형식에 맞지않으면
     if (!strValue.match(regExp)){
       $("#email_check").append("not email pattern ").css("color","red");
       $("#email_check").removeClass("vali_success");
     }else{
       $("#email_check").addClass("vali_success");
     }
   });

   $("input[name='email']").focusin(function(){
     $("#email_check").empty();
   });

 }
