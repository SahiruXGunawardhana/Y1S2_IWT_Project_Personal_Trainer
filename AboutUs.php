<?php
 session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <script src="JavaScripts/Home.js"></script>
  <link rel="stylesheet" href="Styles/AboutUs.css">

 </head>
 <body>

 <?php
 include'homeheader.php';
 ?>
    
      <hr id="hr1">
     <div id="homebg">
    
    </div>
    <h1 class="Rtitle">About Us</h1>
    <hr>
    <p class="Rdouble">We geek out about progressive workout programs and 
       creat challenges with our training pros to make working out engaging and 
       rewarding for you<br>
       We also use the experience of nutrition specialists to build a meal plan
       that will get you the results you want without saceificing the pleasure of eating<br>
       We strive to make regular workout access effective and joyful<br>
       We have 8 years of experience and expertise<br>
       We provide services for anyone in the world<br>
       Started by Noah Lolesio it has come a long way<br>
       We care about your physical and mental health<br>
       Come and join us today
        <br>
       </p>
     <h2 class="Rtag"> Our Core Values</h2>
     <table>
       <tr>
              <th class="Rtable">Evidence Based Practies <br>
                     <p class="Rparagraf">Grounding coaching approach in scientific research and knowledge</p>

              </th>
              <th class="Rtable">Flexibility And Adaptability<br>
                     <P class="Rparagraf">Offfering a pause resume service and dynamic plan changes to suit individual needs</P>
              </th>
       </tr>
       <tr>
              <th class="Rtable">Supportive Communication<br>
                     <p class="Rparagraf">Fostering strong coach-client relationship through open and reliable communication</p>
       
              </th>
                      <th class="Rtable">Nourishment And Enjoyment<br>
                     <P class="Rparagraf">Providing a rich meal database for delicious and nutritious food choices</P>
              </th>

       </tr>
     </table>  

     

 <?php
 include'homefooter.php';
 ?>



 </body>
</html>