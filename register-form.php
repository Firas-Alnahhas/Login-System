<?php 
define("__CONFIG__",true);
require_once("conf/config.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
                integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
                crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
              integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>



        <script src="assets/js/main.js">           
        </script>


        <style type="text/css">


            *
            {
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                box-sizing:border-box;
                box-sizing:border-box;
            }



            .w3-label
            {
                font-weight:bold;
                font-style: oblique;
                font-size:1.2em;
                line-height: 40px;
                color:slategrey

            }

            h3
            {
                font-weight:bold;
                font-style: oblique;
                color:slategrey
            }


            input.w3-input
            {
                width:350px
            }


            #header
            {
                background-image:url("images/SPU.jpg");
                width:100%;
                height:200px;
                position:absolute;
                background-repeat: no-repeat;
                background-size: 100% 100%;


            }



            #register
            {
                position: relative;
                top:250px;

            }


            #myCarousel
            {
                width:70%;
                height:100%;
                margin-top:300px;
                margin-left:100px;



            }


        </style>

    </head>


    <body >


        <div id="header">
        </div>


        <table>
            <tr>
                <td style="width:50%">
                    <div id="register" >
                        <form id="registerForm">

                            <div class="w3-group">

                                <label for="firstName" class="w3-label">First Name:</label>
                                <input class="w3-input" id="firstName" name="firstName" type="text" placeholder="First Name..."  required="required"/>
                            </div>

                            <br/>

                            <div class="w3-group">

                                <label for="lastName" class="w3-label">Last Name:</label>
                                <input class="w3-input" id="lastName" name="lastName" type="text" placeholder="Last Name..."  required="required"/>
                            </div>

                            <br/>

                            <div class="w3-group">
                                <label for="email" class="w3-label">E-Mail:</label>
                                <input class="w3-input" id="email" name="email" type="email" placeholder="Email..."  required="required"/>

                            </div>

                            <br/>

                            <div class="w3-group">
                                <label for="pass" class="w3-label">Password:</label>
                                <input class="w3-input"  id="pass" name="pass" type="password" placeholder="Password here..." required="required"/>
                            </div>

                            <br/>

                            <div class="w3-conatiner">
                                <h3>Gender:</h3>

                                <br/>

                                <label for="gender" class="w3-checkbox">Male</label>

                                <input   value="M" name="gender" type="radio"/>

                                <label for="gender" class="w3-checkbox">Female</label>

                                <input value="F" name="gender" type="radio"/>
                            </div>

                            <div style="margin-top:30px">
                                <div id="errorOut" class="alert alert-danger" style="display:none" ></div>
                                <input id="submitReg" class="btn btn-secondary" value="Register" type="button" />
                                <input class="btn btn-secondary" type="reset" value="Clear"/>
                            </div>
                        </form>

                    </div>

                </td>

                <td style="width:50%">

                    <div class="carousel slide " id="myCarousel" data-ride="carousel" data-interval="2000" data-pause="hover">

                        <ol class="carousel-indicators" >
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption d-none d-md-block d-lg-block">
                                    <h4>Red ROG</h4>
                                </div>
                                <img width="100%" height="500px" src="images/hh.jpg" class="img-fluid d-block" />
                            </div>

                            <div class="carousel-item ">
                                <div class="carousel-caption d-none d-md-block d-lg-block">
                                    <h4>Red ROG</h4>
                                </div>
                                <img width="100%" height="500px" src="images/hh.jpg" class="img-fluid d-block" />
                            </div>

                        </div>




                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>


                    </div>
                </td>
            </tr>
        </table>

    </body>


</html>



