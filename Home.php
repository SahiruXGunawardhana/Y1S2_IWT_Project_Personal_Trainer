<?php
 session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <script src="JavaScripts/Home.js"></script>

 </head>
 <body>


 <?php
  include'homeheader.php';
 ?>
    
    <hr id="hr1">

   <!----------Begining of the content-------->    
    <div id="homebg">

   <!----------Cover Image----->   
    <div class="homecover">
      <img src="Images/cover.jpg" class="cover">


   <!----------Results header--------> 
    <center><h2 class="Head2">Results </h2></center>

   <!----------Content Related to the results--------> 
    <table width="100%">
       <tr>
        <td>
         <button id="Rleftb" class="move" onclick="resultmove('L')">< </button>
        </td>
        <td align="center">
          <img src="Images/Results/fit.jpg" id="R1" class="resultimg">
        </td>
        <td align="center">
          <img src="Images/Results/gain.jpg" id="R2" class="resultimg">
        </td>
        <td align="center">
          <img src="Images/Results/lose.jpg" id="R3" class="resultimg">
        </td>
        <td>
         <button id="Rrightb" class="move" onclick="resultmove('R')"> > </button>
        </td>
       </tr>
    </table>

   <!----------Testimonials Header--------> 
  <center><h2 id="testi">Testimonials </h2></center>

   <!----------Content related to the Testimonials--------> 
    <table width="100%">
       <tr>
        <td>
         <button id="Tleftb" class="move" onclick="Testimonialmove('L')">< </button>
        </td>
        <td align="center">
          <img src="Images/Testimonials/T1.jpg" id="Aaron" class="Testimg">
          <p class="Tdesc"><div id="TN1" class="Tdesc">-Aaron Swift-</div><br>
             <div id="TP1" class="Tdesc">"This Site make my body fit and healthy"</div></P>
        </td>
        <td align="center">
          <img src="Images/Testimonials/T2.jpeg" id="Jordan" class="Testimg">
      <p id="Tp2" class="Tdesc"><div id="TN2" class="Tdesc">-Jordan Maroon-</div><br>
             <div id="TP2" class="Tdesc">"I have followed this site for  years and it lot of beneficial to my sporty life"</div></P>
        </td>
        <td align="center">
          <img src="Images/Testimonials/T3.jpg" id="Lisa" class="Testimg">
      <p id="Tp3" class="Tdesc"><div id="TN3" class="Tdesc">-Lisa Alexi-</div><br>
             <div id="TP3" class="Tdesc">"This is the best fitness site I've ever experienced.I love the workout programs and coaches are well professionalized"</div></P>
        </td>
        <td>
         <button id="Trightb" class="move" onclick="Testimonialmove('R')"> > </button>
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