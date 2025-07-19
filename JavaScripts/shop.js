function moreprograms(){
  var name="<div class='workouts'><table class='programtb'>";
      name += "<tr> <td class='programcol'>";
      name += "<h2 class='prohead' > Split</h2>";
 
     name += "<ul type='circle' class='progrmdesc'>";
     name += "<li>Designed to build muscles</li>";
     name +=  "<li>Designed for next level strength gains</li>";
     name += "<li>Includes abs and mobility training</li>";
     name += "</ul><br>";
     name += "<a href='payment1.html'><button type='button' class='programbtn'> Purchase </button></a>";
     name += "</td>";

     name += "<td><img src='Images/Shop/Programs/progrm3.jpg' alt='progrm3' class='progrmimg'>";
     name += "</td></tr></table></div>";

  name += " <div class='workouts'><table class='programtb'>";
    name += "<tr><td><img src='Images/Shop/Programs/progrm4.jpg' alt='progrm4' class='progrmimg'></td>";
     name += "<td class='programcol'><h2 class='prohead'>Trimester</h2>";
    name += "<ul type='circle' class='progrmdesc'>";
    name +=  "<li>Designed to improve your stamina and endurance</li>";
    name +=  "<li>Designed to strength lower back and reduce strength</li>";
    name +=  "<li>Workouts with streching ,cardio and core excercises</li>";
    name += "</ul><br>";
    name += "<a href='payment1.html'><button type='button' class='programbtn'> Purchase </button></a></td></tr></table></div>";


  name += "<div class='workouts'><table class='programtb'>";
  name += "<tr><td class='programcol'><h2 class='prohead' > Whiz</h2>";
  name += "<ul type='circle' class='progrmdesc'>";
  name += "<li>Focused to split up chest, back and legs </li>";
  name += "<li>Designed to build muscles, lose fat and gain strength</li>";
  name += "<li>Aim is to get a lean, defined physique</li>";
  name += "</ul><br>";
  name +=  "<a href='payment1.html'><button type='button' class='programbtn'> Purchase </button></a></td>";
  name += "<td><img src='Images/Shop/Programs/progrm5.jpg' alt='progrm5' class='progrmimg'></td></tr></table></div>";

  name += "<p style='color:white;font-size:18px;text-align:center;'>Or</p>  <div ><a id='anchor' href='Inquiry.php'>Customized</a></div>";

   document.getElementById("moreprogrm").innerHTML = name;
}