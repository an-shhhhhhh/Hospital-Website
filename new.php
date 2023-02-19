<?php
    session_start();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous"
        />

        <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
        ></script>

        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
        ></script>

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"
        ></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Hospital Website</title>

        <link rel="stylesheet" href="new.css">
    </head>

    <body>

        <!-- to display error or success messages -->
        <div class="message">

            <?php

                //message to be displayed when the same user tries to register again.
                if(isset($_SESSION['message1']))
                {
                    echo $_SESSION['message1'];
                    unset($_SESSION['message1']);
                }
            ?>

            <?php

                //message to be displayed when the user registers successfully!
                if(isset($_SESSION['status']))
                {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
            ?>

            <?php

                //message to be displayed when user enters wrong email id or password.
                if(isset($_SESSION['message2']))
                {
                    echo $_SESSION['message2'];
                    unset($_SESSION['message2']);
                }
            ?>

        </div>

        <br>

        <header>
            
        </header>

        <div class="container">
            

            <div class="boxes">
            
                <div class="left">

                    <!-- login form -->
                    <form role="form" class="form-left was-validated" action="validation.php" method="post" name="login" id="signin" data-toggle="validator">

                        <h1 class="login-title">WELCOME</h1>
                            
                        <!-- Usertype -->
                        <div class="form-group">
                            <label for="usertype">Usertype:</label>
                            <select name="usertype" id="usertype" class="form-select" required>
                                <option selected value="" style="display: none;">Select</option>
                                <option value="admin">Admin</option>
                                <option value="doctor">Doctor</option>
                                <option value="patient">Patient</option>
                            </select>

                            <!-- validation message -->
                            <div class="invalid-feedback">
                                Select Usertype.
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email :<br></label>
                            <input type="text" class="login-input form-control" id="email" name="email" placeholder="Enter EmailID" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required> 

                            <!-- validation message -->
                            <div class="invalid-feedback">
                                Enter your EmailID.
                            </div>
                        </div>

                        <!-- password -->
                        <div class="form-group">
                            <label for="password">Password:<br></label>
                            <input type="password" class="login-input form-control form-control-sm"  id="password" name="password" placeholder="Enter password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required> 

                            <!-- validation message -->
                            <div class="invalid-feedback">
                            Password must have atleast 8 characters that includes at least 1 lowercase character,1 uppercase character, 1 number, and 1 special character in (!@#$$%^&*)
                            </div>
                        </div>
                        
                        <br>
                        
                        <br>

                        <!-- login button -->
                        <div class="login">
                            <input type="submit" value="Login" name="login" class="login-button"/>
                        </div>

                    </form>

                </div>
                    
                <div class="center"></div>

                <div class="right">

                    <h1 class="register-title">Register As a Patient</h1>
                    
                    <br>
                    
                    <br>
                        
                    <div class="form">
                        
                        <!-- registration form for patients -->
                        <form role="form" id="signup" class="was-validated" action="registration.php" method="post" data-toggle="validator">

                            <table>

                                <tr>
                                
                                    <td>

                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="name"> Name:<br></label>
                                            <input type="text" class="login-input form-control" id="name" name="name" placeholder="Enter Name" data-error="You must have a name." required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Enter your name please!
                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <label for="address">Address:<br></label>
                                            <input type="text" class="login-input form-control" id="address" name="address" placeholder="Enter Address" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Address can't be empty
                                            </div>
                                        </div>

                                    </td>

                                </tr>

                                <tr>
                                    
                                    <td>

                                        <!-- phone number -->
                                        <div class="form-group">
                                            <label for="phone">Phone Number:<br></label>
                                            <input type="tel" class="login-input form-control" id="phone" name="phone" placeholder="Enter Phone Number" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Enter your valid phone number starting with digit 6,7,8 or 9.
                                            </div>
                                        </div>

                                    </td>

                                    <td>

                                        <!-- gender -->
                                        <div class="form-group">
                                            <label for="gender">Gender:</label>
                                            <select name="gender" id="gender" class="form-select" required>
                                                <option selected value="" style="display: none;">Select</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                                <option value="other">Other</option>
                                            </select>

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Select your gender.
                                            </div>
                                        </div>

                                    </td>

                                </tr>

                                <tr>
                            
                                    <td>

                                        <!-- Date of Birth -->
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth:<br></label>
                                            <input type="date" class="login-input form-control" id="dob" name="dob" placeholder="Select Your DOB" required>

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Select your Date Of Birth.  
                                            </div>
                                        </div>

                                    </td>

                                    <td>

                                        <!-- Blood Group -->
                                        <div class="form-group">
                                            <label for="blood_group">Blood Group:</label>
                                            <select name="blood_group" id="blood_group" class="form-select" required>
                                                <option selected value="" style="display: none;">Select</option>
                                                <option value="a+">A+</option>
                                                <option value="a-">A-</option>
                                                <option value="b+">B+</option>
                                                <option value="b-">B-</option>
                                                <option value="o+">O+</option>
                                                <option value="o-">O-</option>
                                                <option value="ab+">AB+</option>
                                                <option value="ab-">AB-</option>
                                            </select>

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please select your Blood Group.
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            
                                <tr>

                                    <td>

                                        <!-- UID -->
                                        <div class="form-group">
                                            <label for="uid">UID:<BR></label>
                                            <input type="tel" class="login-input form-control" id="uid" name="uid" placeholder="Enter UID Number" maxlength="12" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" oninput="numOnly(this.uid);" required>
                                        
                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Enter your 12 digit UID Number.
                                            </div>
                                        </div>

                                    </td>

                                    <td>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">Email :<br></label>
                                            <input type="text" class="login-input form-control" id="email" name="email" placeholder="Enter EmailID" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required> 
                                            <div class="invalid-feedback">
                                                Enter your EmailID.
                                            </div>
                                            <div class="valid-feedback">
                                            
                                            </div>
                                        </div>
                                    <td>
                                </tr>

                                <tr>

                                    <td>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="form-group">
                                                <input type="password" name="password" data-minlength="8" class="form-control" id="inputPassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                                                    data-error=" Password must have atleast 8 characters that includes at least 1 lowercase character,1 uppercase character,  and 1 special character in (!@#$$%^&*)" placeholder="Password" required />

                                                <!-- Error -->
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </td>

                                    <td>
            
                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="inputConfirmPassword"
                                                    data-match="#inputPassword" data-match-error="Password don't match"
                                                    placeholder="Confirm" required />

                                                <!-- Error -->
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                    <td>

                                        <!-- Submit Button -->
                                        <div class="form-group">
                                            <input type="submit" value="Register" class="register_button "/>
                                        </div>

                                    </td>

                                </tr>

                            </table>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            
            //form validation-bootstrap
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()

            //validation for Date of Birth
            $(document).ready(function(){

                $('#dob').datepicker({

                    format: "dd-mm-yyyy",
                    startDate: new Date('1-1-1980'),
                    endDate:  new Date('1-1-3000')

                });   

            });
            
            //confirm password validation 
            $(document).ready(function () {
                $("#password, #confirm_password").on("keyup", function () {
                // store the `password` and `confirm_password` in two variables
                var passwordValue = $("#password").val();
                var confirm_passwordValue = $("#confirm_password").val();
            
                if (passwordValue.length > 0 && confirm_passwordValue.length > 0) {
                    if (confirm_passwordValue !== passwordValue) {
                    $("#password-does-not-match-text").removeAttr("hidden");
                    $("#submitBtn").attr("disabled", true);
                    }
                    if (confirm_passwordValue === passwordValue) {
                    $("#submitBtn").removeAttr("disabled");
                    $("#password-does-not-match-text").attr("hidden", true);
                    }
                }
                });
            });

        </script>
    </body>
</html>