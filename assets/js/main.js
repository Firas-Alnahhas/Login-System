//including jquery library...
var jq=document.createElement("script");
jq.src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js";
document.head.appendChild(jq);

$(document).ready(function(){


    //getting the register form informaton
    $("#submitReg").click(function(event){


        var regForm=$("#registerForm");

        var data={
            email:$("input[type='email']",regForm).val(),
            password:$("input[type='password']",regForm).val(),
            firstName:$("input[name='firstName']",regForm).val(),
            lastName:$("input[name='lastName']",regForm).val()
        };


        //some validation

        if(data.email.length<6){
            $("#errorOut",regForm).show().text("please enter a valid email address!");
            return false;
        }
        else if(data.password.length<8){
            $("#errorOut",regForm).show().text("please enter a password with at least 8 characters!");
            return false;
        }
        else if(data.firstName.length<3){
            $("#errorOut",regForm).show().text("please enter a valid first name!");
            return false;
        }
        else if(data.lastName.length<3){
            $("#errorOut",regForm).show().text("please enter a valid last name!");
            return false;
        }

        //hide the alert if the user make it to here
        $("#errorOut",regForm).hide();


        //make ajax call to the server

        //alert(window.location.pathname);

        $.ajax({url : "ajax/register.php",
                data:data,
                type:"POST",
                dataType:"json",    
                async:true,
                success:function(returnedData){
                    //if the server wants to redirect the user
                    if(returnedData.redirect!== undefined){
                        window.location=returnedData.redirect;
                    }
                    else if(returnedData.error!== undefined){
                        $("#errorOut",regForm).show().text(returnedData.error);
                    }
                    else{
                        alert(returnedData.message);
                    }
                },
                error:function(xhr,status,error){
                    alert("error in ajax call!");
                }});



    });


    //getting the login form informaton
    $("#submitLog").click(function(event){


        var logForm=$("#loginForm");

        var data={
            email:$("input[type='email']",logForm).val(),
            password:$("input[type='password']",logForm).val(),
        };


        //some validation

        if(data.email.length<6){
            $("#errorOut",logForm).show().text("please enter a valid email address!");
            return false;
        }
        else if(data.password.length<8){
            $("#errorOut",logForm).show().text("please enter a password with at least 8 characters!");
            return false;
        }

        //hide the alert if the user make it to here
        $("#errorOut",logForm).hide();


        //make ajax call to the server

        //alert(window.location.pathname);

        $.ajax({url : "ajax/login.php",
                data:data,
                type:"POST",
                dataType:"json",    
                async:true,
                success:function(returnedData){
                    //if the server wants to redirect the user
                    if(returnedData.redirect!== undefined){
                        window.location=returnedData.redirect;
                    }
                    else if(returnedData.error!== undefined){
                        $("#errorOut",logForm).show().text(returnedData.error);
                    }
                    else{
                        alert(returnedData.message);
                    }
                },
                error:function(xhr,status,error){
                    alert("error in ajax call!");
                }});








    });










});
