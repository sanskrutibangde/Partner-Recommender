<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cleaning Service Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="servicedb.php" enctype="multipart/form-data">
                <div>
                    <h2>Cleaning Service Registration</h2>
                    <h3>Personal info</h3>
                    <fieldset>
                        <h2>Service information</h2>
                        <p class="desc">Please enter your information and proceed to next step</p>
                        <div class="fieldset-content">
                            <div class="form-row">
                                <label class="form-label">Name of Owner</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" required />
                                        <span class="text-input">First</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" />
                                        <span class="text-input">Last</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" required />
                                <span class="text-input">Example  :<span>  Jeff@gmail.com</span></span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" required />
                            </div>
                            
                                        
                           
                        </div>
                    </fieldset>

                    <h3>Service Details</h3>
                    <fieldset>
                        <h2>Room information</h2>
                        <p class="desc">Please enter your information and proceed to next step</p>
                        <div class="fieldset-content">
                            
                            
                            <div class="form-group">
                                <label for="addr" class="form-label">Address</label>
                                <input type="text" name="addr" id="addr" required />
                                
                            </div>
                            
                               
                           
                        </div>
                    </fieldset>
                    <!-- <h3>Register food</h3>
                    <fieldset>
                        <h2>Food available</h2>
                        <p class="desc">Provide details about FOOD</p>
                        <p class="desc">You can register maximum 4 types.</p>
                            <div class="form-row">
                                <label class="form-label">Type1</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="type1" id="type1" />
                                        <span class="text-input">Enter food</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="rate1" id="rate1" />
                                        <span class="text-input">Enter rate in RS.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">Type2</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="type2" id="type2" />
                                        <span class="text-input">Enter food</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="rate2" id="rate2" />
                                        <span class="text-input">Enter rate in RS.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">Type3</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="type3" id="type3" />
                                        <span class="text-input">Enter food</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="rate3" id="rate3" />
                                        <span class="text-input">Enter rate in RS.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">Type4</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="type4" id="type4" />
                                        <span class="text-input">Enter food</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="rate4" id="rate4" />
                                        <span class="text-input">Enter rate in RS.</span>
                                    </div>
                                </div>
                            </div>
                            
                    </fieldset> -->

                    <h3>Verification</h3>
                    <fieldset>
                        <h2>PhotoId Verification</h2>
                        <p class="desc">Enter Original Aadhar file</p> 
                        <input type="file" name="img" id="img" required />
                        
                        <br>
                        <div class="form-row">
                                <label class="form-label">Password</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="password" name="pass" id="pass" onkeyup="check();" required />
                                        <span class="text-input">Enter password</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass1" id="pass1" onkeyup="check();" required />
                                        <span class="text-input">Re-enter password</span>
                                    </div>
                                    
                                </div>
                                <br>
                                <span class="desc" id="message"></span>
                        </div>
                        <input type="submit" value="SUBMIT" class="submit" name="submit">
                        <br>
                        <span class="form-icon"><i class="zmdi zmdi-search"></i></span>
                    </fieldset>
                    <h3>Registered</h3>
                    <fieldset>
                          
                        <h2 class="desc">Registered Successfully!!</h2>
                      
                    </fieldset>
                    
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript">
        var check = function(){
        if (document.getElementById('pass').value ==
            document.getElementById('pass1').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        }else{
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
    }
    </script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

