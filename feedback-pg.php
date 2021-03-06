
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>
 
    <style>
 
        /* Styling the Body element i.e. Color,
        Font, Alignment */
        body {
            background-image:linear-gradient(rgb(155, 241, 114), white);
            font-family: Verdana;
            text-align: center;
        }
 
        /* Styling the Form (Color, Padding, Shadow) */
        form {
            background-image:linear-gradient(rgb(196, 138, 214), white);
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 
        /* Styling form-control Class */
        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }
 
        /* Styling form-control Label */
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
 
        /* Styling form-control input,
        select, textarea */
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        /* Styling form-control Radio
        button and Checkbox */
        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
 
        /* Styling Button */
        button {
            background-image: ;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
  
<body>
    <h1>PG feedback form</h1>
  
    <!-- Create Form -->
    <form action="insert.php" method="post">
        <h1>Enter your feedback</h1>
        <!-- Details -->
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>
 
            <!-- Input Type Text -->
            <input type="text"
					name="name"
                   id="name"
                   placeholder="Enter your name" />
        </div>
  
        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>
 
            <!-- Input Type Email-->
            <input type="email"
					name="email"
                   id="email"
                   placeholder="Enter your email" />
        </div>

  
        <div class="form-control">
            <label>
             <h3>  Would you recommed Our Guesting-Resting
                to a friend? </h3> 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       id="recommed-1"
                       name="recommed">Yes</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="recommed">No</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       id="recommed-3"
                       name="recommed">Maybe</input>
            </label>
        </div>
        <div class="form-control">
            <label>
            <h4>    Rate our facilities (out of 10) </h4> 
        <div class="field-row">
            <label class="form-label" for="Cleanliness">Cleanliness :</label>
            <input type="text" name="Cleanliness" id="Cleanliness" class="field text-field cleanliness-field" required>
            <span class="message"></span>
         </div>
         <br>
         <div class="field-row">
            <label class="form-label cf" for="comfort">Comfort :</label>
            <input type="text" name="comfort" id="comfort" class="field text-field comfort-field" required>
            <span class="message"></span>
         </div>
         <br>
         <div class="field-row">
            <label class="form-label" for="initials">Location :</label>
            <input type="text" name="Location"id="Location" class="field text-field Location-field">
         </div>
         <br>
         <div class="field-row">
            <label class="form-label" for="Room-facilities">Room-facilities :</label>
            <input type="text"name="Room-facilities" id="Room-facilities" class="field Room-facilities-field" required>
            <span class="message"></span>
         </div>
         <br>
         <div class="field-row">
            <label class="form-label" for="Staff">Staff :</label>
            <input type="tel" name="Staff"id="Staff" class="field text-field Staff-field" required>
            <span class="message"></span>
         </div>
         <br>
         <div class="field-row">
            <label class="form-label" for="hs">Value for money :</label>
            <input type="text" name="hs" id="hs" class="field text-field hs-field" required>
            <span class="message"></span>
         </div>
         <br>
         <div class="field-row">
            <label class="form-label" for="tel">Free wifi :</label>
            <input type="tel" name="tel" id="tel" class="field text-field wifi-field" required>
            <span class="message"></span>
         </div>
         <br>
  
        <div class="form-control">
            <label for="comment">
               <h4> Any comments or suggestions :</h4>
            </label>
 
            <!-- multi-line text input control -->
            <textarea name="comment" id="comment"
                placeholder="Enter your comment here">
            </textarea>
        </div>
        <!-- Multi-line Text Input Control -->
        <button type="submit" value="submit">
            Submit
        </button>
	
    </form>
</body>
  
</html>