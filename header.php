

 <?php
 
 echo"<div id='adminhead'>
   
 <table id='adminheadtbl' width='100%'> 
   <tr>
   <td align='right'>
   <a href='adminportal.php' ><button class='headbtn'>Home </button></a>
   </td>
   <td>
   <a href='homehtml.php'><img src='Images/logo.jpg' alt='Logo' id='adminimg1'></a>
   </td>";

 if(isset($_SESSION['Email'])){

  echo "<td align='left'>
       <a href='adminlogout.php'><button class='headbtn'>LogOut </button></a>
       </td>";

 }else{
  echo " <td align='left'>
        <a href=''><button class='headbtn'>Login </button></a>
        </td>";
 }

 echo"  </tr>
       </table>
        </div>";

?>