<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

<link rel="stylesheet" href="css/style1.css">

    </head>
   
<body>
<br>
<div class="container">
 <center> <h2>Partner Recommender</h2></center> 
  <b>Kindly fill out the form to know your preferences for a room partner:</b>
  <form action="form1.php" method="post">
    <table>
        <tr>
            <th class="first-col"></th>
            <th>Bad</th> 
            <th>Very Bad</th>
            <th>Good</th>
            <th>Very Good</th>
          </tr>
          <tr>
            <td class="first-col">Communication Skills</td>
            <td><input type="radio" value="Bad" name=" Communication" required/></td>
            <td><input type="radio" value="Very Bad" name=" Communication" required/></td>
            <td><input type="radio" value="Good" name=" Communication" required/></td>
            <td><input type="radio" value="Very Good" name=" Communication" required/></td>
          </tr>
          <tr>
            <td class="first-col">Cleanliness</td>
            <td><input type="radio" value="Bad" name="Cleanliness" /></td>
            <td><input type="radio" value="Very Bad" name="Cleanliness" /></td>
            <td><input type="radio" value="Good" name="Cleanliness" /></td>
            <td><input type="radio" value="Very Good" name="Cleanliness" /></td>
          </tr>
          <tr>
            <td class="first-col">Tolerance</td>
            <td><input type="radio" value="Bad" name="Tolerance" /></td>
            <td><input type="radio" value="Very Bad" name="Tolerance" /></td> 
            <td><input type="radio" value="Good" name="Tolerance" /></td>
            <td><input type="radio" value="Very Good" name="Tolerance" /></td>
          </tr>
        </table>

      </table>
     <div class="container1"> 
     
          <b>Select your Top 3 interests:</b>
        <br>
            <br>
            
          <select name="interest[]"   multiple=multiple>
            <option> ---Select your interests--- </option>
            <option value="Reading and Writing">Reading and Writing</option>
            <option value="Sports">Sports</option>
            <option value="Art">Art</option>
            <option value="Travelling">Travelling</option>
            <option value="Music and Singing">Music and Singing</option>
            <option value="Cooking">Cooking</option>
            <option value="Collecting Things">Collecting Things </option>
            <option value="Gaming">Gaming</option>
            <option value="Blogging">Blogging</option>
            <option value="COmmunity/Volunteer Work">Community/Volunteer Work</option>
          </select>
          <p class="question">Please add any other interests of yours:</p>
          <textarea rows="3"></textarea>
        </div>
    
<div class="container1">
<b>Select your Top 3 Qualities:</b>
<br>
    <br>
<select name="qua[]"  multiple=multiple>
    <br>
 <option value="Communicative">Communicative</option>
  <option value="Self-Confident">Self-Confident</option>
  <option value="Creative">Creative</option>
  <option value="Honest">Honest</option>
  <option value="Loyal and Trustworthy">Loyal and Trustworthy</option>
  <option value="Cooking">Cooking</option>
  <option value="Intelligent">Intelligent</option>
  <option value="Friendly and frank">Friendly and frank</option>
  <option value="Hygenic">Hygenic</option>
  <option value="Punctual">Punctual</option>
</select>
<p class="question">Please add any other qualities(if any):</p>
<textarea rows="3"></textarea>
</div>
<div class="container1">
<br>
<b>Select  Top 3 Qualities you need in your roommate:</b>
<br>
    <br>
<select name="qua2[]"  multiple=multiple>
    <br>
  <option value="Communicative">Communicative</option>
  <option value="Self-Confident">Self-Confident</option>
  <option value="Creative">Creative</option>
  <option value="Honest">Honest</option>
  <option value="Loyal and Trustworthy">Loyal and Trustworthy</option>
  <option value="Cooking">Cooking</option>
  <option value="Intelligent">Intelligent</option>
  <option value="Friendly and frank">Friendly and frank</option>
  <option value="Hygenic">Hygenic</option>
  <option value="Punctual">Punctual</option>
</select>

<p class="question">Please add any other qualities(if any):</p>
<textarea rows="3"></textarea>
</div>
  <div class="pure-button-group" role="group" aria-label="...">
    <center><button class="pure-button" type="submit" name="submit">FIND ME A ROOMMATE</button></center>
    </div>
  
<script  src="js/index.js"></script>
  </form>
    


</body>
</html>
