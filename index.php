<?php

    include "database.php";

?>

<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="REGISTRATION FORM">
        <meta name="keywords" content="REGISTRATION FORM,html,css,php">
        <meta name="author" content="Nastaran Saberi">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="Images/icon_2020q4v2_128.png">
        <link rel="stylesheet" href="css/mds.bs.datetimepicker.style.css">
        <title>REGISTRATION FORM</title>

    </head>

    <body>

        <div>
            <?php 
            if(isset($_POST["create"])){

                echo "wdwddwe" ;
            }
            ?>
        </div>
     
        <div class="container">
            <div class="row justify-content-center mt-5" >
                <div class="col-lg-5 col-sm align-self-center">
                    <div class="card">
                        <div class=" text-center fs-2 fw-semibold mt-2 header__center">
                            Register
                        </div>
                        <div class="card-body ">
                            <form method="post" action="add_process.php">
                                <div class="mb-3 text-start">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="first_name" placeholder="First name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="last_name" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 text-start">
                                    <input type="email" class="form-control"  name="email" placeholder="Email address">
                                </div>
                                <div class="mb-3 text-start">
                                    <input type="text" class="form-control"  name="password" placeholder="Password">
                                </div>
                                <div class="mb-3 text-start">
                                    <input type="text" class="form-control"  name="confirm_password" placeholder="Confrim password">
                                </div>
                                <div class="mb-3 text-start">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text cursor-pointer" id="dtp1">📅</span>
                                        <input type="text" class="form-control" placeholder="Date" data-name="dtp1-text">
                                    </div>   
                                </div>
                                <div class="mb-3 text-start">
                                    <label for="exampleInputEmail1" class="form-label" style="display:block;">Gender</label>
                                    <input type="radio" name="gender" value="M" >Male
                                    <input type="radio" name="gender" value="F" >Female
                                    <input type="radio" name="gender" value="O" >other
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="create" class="btn  mt-3 " style="width:270px;height:40px;background-color:#04aa6d;color:white;" >submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
        
    <script>

        const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
            targetTextSelector: '[data-name="dtp1-text"]',
            targetDateSelector: '[data-name="dtp1-date"]',
        });
        
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/mds.bs.datetimepicker.js"></script>
</html>