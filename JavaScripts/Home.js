function resultmove(Rname){
  if(Rname == 'L')
  {
    document.getElementById("R1").src = "Images/Results/fit.jpg";
    document.getElementById("R2").src = "Images/Results/gain.jpg";
    document.getElementById("R3").src = "Images/Results/lose.jpg";
  }  
  else if(Rname == 'R')
  {
    document.getElementById("R1").src = "Images/Results/gain.jpg";
    document.getElementById("R2").src = "Images/Results/lose.jpg";
    document.getElementById("R3").src = "Images/Results/next.jpg";
  } 
}

function Testimonialmove(name){
  if(name == 'L')
  {
    document.getElementById("Aaron").src = "Images/Testimonials/T1.jpg";
    document.getElementById("TN1").innerHTML = "-Aaron Swift-";
    document.getElementById("TP1").innerHTML = "This Site make my body fit and healthy";
   
    document.getElementById("Jordan").src = "Images/Testimonials/T2.jpeg";
    document.getElementById("TN2").innerHTML = "-Jordan Maroon-";
    document.getElementById("TP2").innerHTML = "I have followed this site for  years and it lot of beneficial to my sporty life";

    document.getElementById("Lisa").src = "Images/Testimonials/T3.jpg";
    document.getElementById("TN3").innerHTML = "-Lisa Alexi-";
    document.getElementById("TP3").innerHTML = "This is the best fitness site I've ever experienced.I love the workout programs and coaches are well professionalized";
  }  
  else if(name == 'R')
  {
    document.getElementById("Aaron").src = "Images/Testimonials/T2.jpeg";
    document.getElementById("TN1").innerHTML = "-Jordan Maroon-";
    document.getElementById("TP1").innerHTML = "I have followed this site for  years and it lot of beneficial to my sporty life";
   
    document.getElementById("Jordan").src = "Images/Testimonials/T3.jpg";
    document.getElementById("TN2").innerHTML = "-Lisa Alexi-";
    document.getElementById("TP2").innerHTML = "This is the best fitness site I've ever experienced.I love the workout programs and coaches are well professionalized";

    document.getElementById("Lisa").src = "Images/Testimonials/T4.jpg";
    document.getElementById("TN3").innerHTML = "-Staisy Clark-";
    document.getElementById("TP3").innerHTML = "This is the best site if you have a busier life.You can get workout plans as your wish";
  } 
}