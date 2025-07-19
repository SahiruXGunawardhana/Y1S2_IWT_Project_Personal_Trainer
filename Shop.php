 <?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/shop.css">
  
  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/shop.js"></script>
  
 </head>
 <body>


 <?php
  include'homeheader.php';
 ?>
    <hr id="hr1">

   <!----------Begining of the content-------->  
    <div id="homebg">

   <!----------Programs header--------> 
     <h2 class="shophead">Programs</h2>


   <!----------Content Related to the Programs--------> 
     <div class="workouts">
      <table class="programtb">
       <tr> 

        <td class="programcol">
         <h2 class="prohead"> Foundation</h2>
         <ul type="circle" class="progrmdesc">
          <li>Designed for Beginners and those who returning from injuries</li>
          <li>Designed to optimize overall fitness</li>
          <li>Designed to maintain a healthy lifestyle</li>
         </ul><br>

         <a href="payment1.php"><button type="button" class="programbtn"> Purchase </button></a>
        </td>

        <td>
         <img src="Images/Shop/Programs/progrm1.jpg" alt="progrm1" class="progrmimg">
        </td>

       </tr>
      </table>
     </div>
     <div class="workouts">
      <table class="programtb">
       <tr> 

        <td>
         <img src="Images/Shop/Programs/progrm2.jpg" alt="progrm2" class="progrmimg">
        </td>

        <td class="programcol">
         <h2 class="prohead"> Signature</h2>
         <ul type="circle" class="progrmdesc">
          <li>Designed to improve your strength,coordination,stamina</li>
          <li>Designed to tone, define and shred your body</li>
          <li>Workouts with built in cardio</li>
         </ul><br>

         <a href="payment1.php"><button type="button" class="programbtn"> Purchase </button></a>
        </td>


       </tr>
      </table>
     </div>

    <div id="moreprogrm">
        <button class="seemore" type="button" onclick="moreprograms()" >See More</button>
    </div><br>

   <!----------Equipments header-------->
   <h2 class="shophead">Equipments</h2>

   <!----------Content Related to the Equipments--------> 
    <table id="equiptb">
     <tr>
      <td class="equipcolm"> 
       <div class="equipblck">
       <img src="Images/Shop/Equipments/equip1.jfif" alt="equip1" class="equipimg"><br>
       <p>Hand Glows pair<br> $40</p>
         <a href="payment1.php"><button type="button" class="equipbtn"> Buy now</button></a>
       
      </div>
      </td>
      <td class="equipcolm">
       <div class="equipblck">
       <img src="Images/Shop/Equipments/equip2.jpg" alt="equip2" class="equipimg">
       <p>Jump Rope<br> $80</p>
        <a href="payment1.php"> <button type="button" class="equipbtn"> Buy now</button> </a>
      </div>
      </td>

      <td class="equipcolm">
       <div class="equipblck">
       <img src="Images/Shop/Equipments/equip3.jpg" alt="equip3" class="equipimg">
       <p>HWeight Plates<br> $50-$250</p>
        <a href="payment1.php"> <button type="button" class="equipbtn"> Buy now</button> </a>
      </div>
      </td>

      <td class="equipcolm">
       <div class="equipblck">
       <img src="Images/Shop/Equipments/equip4.webp" alt="equip4" class="equipimg">
       <p>Hand Glows pair<br> $40</p>
        <a href="payment1.php"> <button type="button" class="equipbtn"> Buy now</button> </a>
      </div>
      </td>

      <td class="equipcolm">
       <div class="equipblck">
       <img src="Images/Shop/Equipments/equip5.jfif" alt="equip4" class="equipimg">
       <p>Hand Glows pair<br> $40</p>
         <a href="payment1.php"><button type="button" class="equipbtn"> Buy now</button> </a>
      </div>
      </td>
     </tr>
    </table>
 
    </div>

   <!----------Begining of the footer--------> 
 <?php
  include'homefooter.php';
 ?>
 



 </body>
</html>