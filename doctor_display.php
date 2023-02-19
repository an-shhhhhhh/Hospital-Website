<?php
    include("db.php");

    session_start();

    // SQL query to select data from database of doctors
    $sql = " SELECT * FROM users WHERE usertype!= 'admin' AND usertype!= 'doctor'";

    // $sql1 = " SELECT * FROM users WHERE usertype!= 'doctor' ";
    $result = $con->query($sql);

    $con->close();
?>

<!-- HTML code to display data in tabular format -->
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

        <div class="input-group mb-3">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Doctor Display</title>

        <link rel="stylesheet" href="doctor_display.css">
        
    </head>
    
    <body>
        <div class="boxes">

            <div class="button" style="float: right;">

                <a href="logout.php"><input type="button" id="button" value="LOGOUT"></a>
                
                <hr><br><br><br><br>

            <h1 style="color: white;">Details of Patients</h1>

            <!-- TABLE CONSTRUCTION -->
            <table class="table1">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Blood Group</th>
                    <th>UID Number</th>
                    <th>Email</th>
                </tr>

                <!-- PHP CODE TO FETCH DATA FROM ROWS -->

                <?php
                    // LOOP TILL END OF DATA
                    while($rows=$result->fetch_assoc())
                    {
                ?>

                <tr>
                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['name']??''; ?></td>
                    <td><?php echo $rows['address']??''; ?></td>
                    <td><?php echo $rows['phone']??''; ?></td> 
                    <td><?php echo $rows['gender']??''; ?></td>
                    <td><?php echo $rows['dob']??''; ?></td>
                    <td><?php echo $rows['blood_group']??''; ?></td>
                    <td><?php echo $rows['uid']??''; ?></td>  
                    <td><?php echo $rows['email']??''; ?></td>
                </tr>

                <?php
                    }
                ?>

            </table>

        </div>

        <div class="container">

            <div class="right">

                <h1 class="register-title">Registration</h1>
                
                <br>
                <br>

                <div class="form">

                    <!-- Registration form -->
                    <form role="form" id="signup" class="was-validated" action="admin_display.php" method="post" data-toggle="validator">

                        <table>

                            <tr>

                                <td>

                                    <div class="form-group">

                                        <label for="name"> Name:<br></label>

                                            <input type="text" class="login-input form-control" id="name" name="name" placeholder="Enter Name" data-error="You must have a name." required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Enter your name please!
                                            </div>

                                            <div class="help-block with-errors"></div>
                                    
                                    </div>

                                </td>

                            <tr>

                            </tr>

                            <tr>

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

                                    <div class="form-group">
                                        <label for="phone">Phone Number:<br></label>
                                        <input type="tel" class="login-input form-control" id="phone" name="phone" placeholder="Enter Phone Number" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                            Enter your valid phone number starting with digit 6,7,8 or 9.
                                        </div>
                                    </div>

                                </td>

                            </tr>

                            <tr>

                                <td>

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

                                    <div class="form-group">
                                        <label for="dob">Date Of Birth:<br></label>
                                        <input type="date" class="login-input form-control" id="dob" name="dob" placeholder="Select Your DOB" required>

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                            Select your Date Of Birth.  
                                        </div>
                                    </div>

                                </td>

                            </tr>

                            <tr>

                                <td>

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

                                    <div class="form-group">
                                        <label for="uid">UID:<BR></label>
                                        <input type="tel" class="login-input form-control" id="uid" name="uid" placeholder="Enter UID Number" maxlength="12" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" oninput="numOnly(this.uid);" required>
                                            
                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                            Enter your 12 digit UID Number.
                                        </div>
                                    </div>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="form-group">
                                        <label for="email">Email :<br></label>
                                        <input type="text" class="login-input form-control" id="email" name="email" placeholder="Enter EmailID" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required> 
                                        
                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                            Enter your EmailID.
                                        </div>
                                    </div>

                                <td>

                            </tr>

                            <tr>

                                <td>
                
                                            
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" name="password" data-minlength="8" class="form-control" id="inputPassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                                            data-error=" Password must have atleast 8 characters that includes at least 1 lowercase character,1 uppercase character, and 1 special character in (!@#$$%^&*)" placeholder="Password" required />
                                                    
                                            <!-- validation message -->
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </td>

                            </tr>

                            <tr>

                                <td>
                
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

                                    <div class="form-group">
                                        <input type="submit" value="Register" class="register_button ">
                                    </div>

                                </td>
                            
                            </tr>

                        </table>
                                
                    </form>

                </div>

            </div>

        </div>


        <script src="js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
                
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

            //for date
            $(document).ready(function(){

                $('#dob').datepicker({

                    format: "dd-mm-yyyy",
                    startDate: new Date('1-1-1980'),
                    endDate:  new Date('1-1-3000')

                });   

            });
            
        </script>

    </body>
     
 </html>