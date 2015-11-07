
function loginValidation(){

  $("input[name='userid']").focusin(function(){
      $("#login_check").empty();
      $("#login_check").removeClass("vali_success");
  });

  $("input[name='userid']").focusout(function(){
      $("#login_check").removeClass("vali_success");
      check();
  });

  $("input[name='password']").focusin(function(){
      $("#login_check").empty();
      $("#login_check").removeClass("vali_success");
  });

  $("input[name='password']").focusout(function(){
    $("#login_check").removeClass("vali_success");
    check();
      // $("#login_check").empty();

  });
}


  function check(){

          $.ajax({
              url:'http://192.168.0.29:8080/test/logincheck.php',
              type: 'POST' ,
              dataType:'json' ,
              data :{'userid':$("input[name='userid']").val() ,
                      'password':$("input[name='password']").val()
                      },
              success:function(result){
                if(result['result']== true){ // 로그인성공
                    $("#login_check").html(result['msg']).css("color","blue");
                    $("#login_check").addClass("vali_success");
                    // $("#userid_check").addClass("vali_success");
                }else{ //로그인 실패
                  $("#login_check").html(result['msg']).css("color","red");
                  // $("#userid_check").removeClass("vali_success");
                }
              }
          });

  }
