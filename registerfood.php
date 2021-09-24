<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Your food</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="foodtable.php">
                <div>
                	
                    <h3>Food Info</h3>
                    <fieldset>
                        <h2>Food Info</h2>
                        <p class="desc">Please enter your information and proceed to next step</p>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <label for="food" class="form-label">Food</label>
                                <input type="text" name="food" id="food" required />
                                <span class="text-input">Example  :<span>  Maharaja Thali</span></span>
                            </div>
                            <div class="form-group">
                                <label for="fooddesc" class="form-label">Conetents of Food</label>
                                <input type="text" name="fooddesc" id="fooddesc" required />
                                <span class="text-input">Example  :<span>  2 chapati, rice, dal</span></span>
                            </div>
                            
                            <div class="form-date">
                                <label for="foodtype" class="form-label">FoodType</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="foodtype" name="foodtype">
                                        	<option value="VEG">	VEG</option>
                                        	<option value="NON-VEG">	NON-VEG</option>
                                        	
                                        </select>
                                    </div>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" id="price" required />
                                
                            </div> 
                            <div class="form-group">
                                
                                <input type="submit" name="foodregister" id="foodregister" class="submit" />
                                
                            </div>        
                           
                        </div>
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
