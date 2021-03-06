
<?php

define("__CONFIG__",true);
require_once("conf/config.php");
forceDashboard();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login Page</title>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
                integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
                crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
              integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>

        <script src="assets/js/main.js">           
        </script>

        <script type="text/javascript">

            $(document).ready(function(){

                $(window).resize(function(){
                    $("#displayWidth").text(window.innerWidth);
                });
            });
        </script>


        <style type="text/css">


            *
            {
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                box-sizing:border-box;
                box-sizing:border-box;
            }

            body {
                background-image: url(images/background.jpg);
            }



            .custom
            {
                height:400px;
                border-color:azure;
                border-width:thin;
                background-color: whitesmoke;
                position:relative;
                top:100px;
                box-shadow:1px 1px 1px azure;
                width:43%;
                

            }

            div.card-footer
            {


                position:relative;
                top:60px
            }

            .form-control-label
            {
                font-weight:bold;
                font-style: oblique;
                font-size:1.15em;
                line-height: 40px;
                color:slategrey

            }


            div.card-block
            {
                margin-top:30px    
            }

            a[name='reg']
            {
                margin-left:10px;


            }


            @media only screen and (min-width:671px) and (max-width:1194px){
                .custom
                {  
                   top:50px;
                    width:70%;
                }
            }
            
            
              @media only screen and (min-width:240px) and (max-width:670px){
                .custom
                {
                    height:500px;
                    left:0;
                    margin:0 auto;
                    top:40px;
                    width:90%;
                }
                  
             
            }
        </style>

    </head>
    <body>

        <div id="displayWidth"></div>


        <div class="card custom container-fluid" id="mainCard">

            <div class="card-header">
                <img src="images/logo.jpg" style="width:auto;height:40px" class="img-fluid card-img-top"/>
            </div>
            <div class="card-block">

                <form id="loginForm" role="form" >



                    <div class="input-group row">
                        <label for="user-email" class="form-control-label col-xs-3 col-sm-3 col-md-3 col-lg-3">E-mail:</label>
                        <input class="form-control col-xs-9 col-sm-9 col-md-9 col-lg-9" id="user-email" name="user-email" type="email" placeholder="your email..."  required="required"/>
                        <i class="input-group-addon">@</i>
                    </div>

                    <br/>
                    <div class="input-group row">
                        <label for="pass" class="form-control-label col-xs-3 col-sm-3 col-md-3 col-lg-3">Password:</label>
                        <input class="form-control col-xs-9 col-sm-9 col-md-9 col-lg-9"  id="pass" name="pass" type="password" placeholder="password here..." required="required"/>
                        <i class="input-group-addon fa fa-key"></i>
                    </div>

                    <br/>
                    <a name="reg" style="font-style:oblique;font-weight:450" href="register-form.php">Create New Account...</a>

                    <div id="errorOut" class="alert alert-danger" style="display:none;position:relative;top:10px;margin-bottom:-20px" ></div>
                    <div class="card-footer">

                        <input id="submitLog" class="btn btn-secondary" type="button" value="Login"/>
                        <input class="btn btn-secondary" type="reset" value="Clear"/>
                    </div>
                </form>

            </div>

        </div>


    </body>


</html>



