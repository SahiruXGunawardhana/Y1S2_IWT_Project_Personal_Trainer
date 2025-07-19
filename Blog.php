<?php
 session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <script src="JavaScripts/Home.js"></script>
  <link rel="stylesheet" href="Styles/Blog.css">
 </head>
 <body>

 <?php
 include'homeheader.php';
 ?>
    
      <hr id="hr1">
   <div id="homebg">
    
    
    <h1 class="Ratitle"> Blog</h1>
    <hr>
    <table width="100%">
       <tr>
              <th class="blogth"><img src="Images/Results/fit.jpg" width="250px" height="250px"><br>
                     Fitness <br>
                     <ul>
                            <li class="Raword"><details> 
                                  <summary> more </summary>
                                  <ul>
                                   <li>Free and fun ways to improve your fitness</li>
                                   <li>Yoga poses to try at home for beginners</li>
                                   <li>How to find the right sport for you</li>
                                   <li>How to stay motivated for your fitness</li>
                                  </ul>

                            </details>
                            </li>
                     </ul>
              
              </th>
              <th class="blogth"><img src="Images/Results/weight-lose.jpg" width="250px" height="250px"> <br>
                     Weight loss<br>
                     <ul>
                            <li class="Raword"><details>
                                   <summary>more</summary>
                                   <ul>
                                          <li>How your hormones really affect weight loss and fat storage</li>
                                          <li>How to lose body fat and preserve muscle mass</li>
                                          <li>Best foods to eat to stay full while dieting</li>
                                          <li>Why the scale weight isn't the only measurement you need</li>
                                          

                                   </ul>
                            </details>

                            </li>
                     </ul>
              </th>
              <th class="blogth"><img src="Images/Results/fitness-mortivation.jpg" width="250px" height="250px"><br>
                      Mortivation <br>
                     <ul>
                            <li class="Raword"><details>
                                   <summary>more</summary>
                                   <ul>
                                          <li>Establishing clear goals for clients</li>
                                          <li>By engaging with clients on an individual</li>
                                          <li>Communication my experties</li>
                                          <li>Spur the right attitude, behavior, maximizing mortivation</li>
                                          <li>Encourage a helthy lifestyle</li>
                                   </ul>
                            </details></li>
                     </ul></th>
       </tr>
       <tr>
              <th class="blogth"><img src="Images/Results/fitness-technology.jpg" width="250px" height="250px"><br>
                      Fitness Technology<br>
                     <ul>
                            <li class="Raword"><details>
                                   <summary>more</summary>
                                   <ul>
                                          <li>Professional online presence</li>
                                          <li>Developing structured online programs</li>
                                          <li>Educate clients on various aspects of nutrition and wellness</li>
                                          <li>Provide client feedback</li>
                                   </ul>
                            </details></li>
                     </ul>
              </th>
              <th class="blogth"><img src="Images/Results/healthy-recipes.jpg" width="250px" height="250px"><br>
                     Healthy Recipes<br>
              <ul>
                     <li class="Raword"><details>
                            <summary>more</summary>
                            <ul>
                                   <li>Roasted vegetables eith feta cheese</li>
                                   <li>Protein porridge with banana</li>
                                   <li>Salad with chicken breast or tofu</li>
                                   <li>Corn salad with sweet potato</li>
                                   <li>Whole grain bagel with salmon</li>
                            </ul>
                     </details></li>             
              </ul></th>
       </tr>
    </table>
    </div>


 <?php
 include'homefooter.php';
 ?>
 



 </body>
</html>