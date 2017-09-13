$(document).ready(function(){
    $("#log_in").click(function(e){
        
        var email = $("#email_login").val();
        var password = $("#password_login").val();
        
        var valid = true;
        
        
        if(email == "" || !isEmailVaild(email)){
            valid = false;
            $("#error_Email").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Enter a Valid Email and Email Cannot Be Blank.</div>");
        }else{
            $("#error_Email").html("");
        }
        
        if(password == "" || !isPasswordValid(password)){
            valid = false;
            $("#error_Password").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Password Must Be Between 7 and 15 Characters and Must Contain At Least One Lowercase Letter One Uppercase Letter and One Digit.</div>");
        }else{
            $("#error_Password").html("");
        }
        
        if(valid == true){
            var login_data = {
                email: email,
                password: password
            };
            
            $.ajax({
                url: "../scripts/login.php",
                type: "POST",
                data: login_data,
                success: function(data){
                    
                }
            });
            
        }else{
            return false;
        }
        
    });
});

function isNameValid(name){
    return /[A-Z]+/i.test(name) && /[a-z]+/.test(name) && /\S{5,15}/.test(name);
}

function isEmailVaild(emailAddress){
    var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(emailAddress);
}

function isPasswordValid(string){
    return /[A-Z]+/.test(string) && /[a-z]+/.test(string) &&
    /[\d\W]/.test(string) && /\S{7,15}/.test(string)
}