$(document).ready(function() {

   $('#demo').dcalendarpicker({

  // default: mm/dd/yyyy
  format: 'yyyy-mm-dd'
  
});

   jQuery('#basic,#basic1,#basic2').keypress(function (event) {
      var keycode = event.which;
      if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
          event.preventDefault();
      }
  });
   $('#based,#based1').keydown(function (e) {
if (e.shiftKey || e.ctrlKey || e.altKey) {
e.preventDefault();
} else {
var key = e.keyCode;

if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
e.preventDefault();
}
}
});
    

        $("#forgot_form").validate({
        rules: {
            email: {
                    required: true,
                    email: true
                }
            
        },
        messages:{
            email: "Please enter a valid email address."
            
        }
                
    });
        $("#signup_form").validate({
        rules: {
            email: {
                    required: true,
                    email: true
                },
            password: {
                    required: true,
                    minlength: 5
                },
            confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                }
        },
        messages:{
            email: "Please enter a valid email address.",
            password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
            confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                }
        }
                
    });

    $("#reset_form").validate({
        rules: {
            
            newpassword: {
                    required: true,
                    minlength: 5
                },
            confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#newpassword"
                }
        },
        messages:{
            
            newpassword: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
            confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                }
        }
                
    });
    $("#login_form").validate({
        rules: {
            username: {
                    required: true
                    
                },
            password: {
                    required: true,
                    minlength: 5
                }
                
        },
        messages:{
            username: "Please enter a valid user name.",
            password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                }
            
        }
                
    });
    $("#news_form").validate({
    rules: {
            empno: {
                    required: true
                    
                },
        },
        messages:{
            empno: "Please select a title name.",
        
    }
  });
});

