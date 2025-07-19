
 <?php
 
 echo"  <table id='Mtb1' width='100%'>
     <tr>
      <th width='20%'>
      <!----------Logo -------->
       <a href='Home.php'><img src='Images/logo.jpg' alt='Logo' id='img1'></a>
      </th>
   
    <th id='navwidth'>
      <!----------Navigation Bar -------->  
     <ul class='nav1'>";
  if(isset($_SESSION['login'])){

     echo " <li class='nav_1'><a href='logout.php' class='nav_1a'>Logout</a></li>";
  }else{

    echo "  <li class='nav_1'><a href='login.html' class='nav_1a'>Login</a></li>";
  }
  echo " <li class='nav_1'><a href='contactUs.php' class='nav_1a'>       Contact Us </a></li>
         <li class='nav_1'><a href='Blog.php' class='nav_1a'>       Blog</a></li>
          <li class='nav_1'><a href='Shop.php' class='nav_1a'>Shop</a></li>
          <li class='nav_1'><a href='AboutUs.php' class='nav_1a'>        About Us</a></li>
          <li class='nav_1'><a href='Home.php' class='nav_1a'>Home</a></li>
        </ul>
       </th>
      </tr>
     </table>";

?>