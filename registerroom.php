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
            <form method="POST" id="signup-form" class="signup-form" action="pgtable.php">
                <div>
                	
                    <h3>Room Info</h3>
                    <fieldset>
                        <h2>Room Info</h2>
                        <p class="desc">Please enter your information and proceed to next step</p>
                        <div class="fieldset-content">
                           
			<div class="form-group">
                                <label for="food" class="form-label">Room_Capacity</label>
                                <input type="text" name="room" id="room" required />
                                <span class="text-input">Example  :<span>  2/3/4</span></span>
				<br>
				<label for="food" class="form-label">PG Name</label>
                                <input type="text" name="pgname" id="pgname" required />
                                <span class="text-input">Example  :<span>  2/3/4</span></span>
                            </div>
                            
                            <div class="form-date">
                                <label for="foodtype" class="form-label">RoomType</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="roomtype" name="roomtype">
                                        	<option value="Sharing">Sharing</option>
                                        	<option value="NON-Sharing">NON-Sharing</option>
                                        	
                                        </select>
                                    </div>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" id="price" required />
                                
                            </div> 
                            <div class="form-group">
                                
                                <input type="submit" name="roomregister" id="roomregister" class="submit" />
                                
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
