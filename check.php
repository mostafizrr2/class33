<?php

// $username = "admin";
// $password = "admin1234";

// if(isset($_POST['submit'])){
   
//    $user = $_POST['email'];
//    $pass = $_POST['pass'];
   
//     if($username != $user && $password != $pass){
//         header('location: index.php');
 
//     }

//     header('location: profile.php');


// }
// else 
// {
//    header('location: index.php');
// }


if(isset($_POST['submit'])){
   $title = $_POST['title'];
   $description = $_POST['desc'];

//    $final = htmlspecialchars($description);

   echo "<h1>".  $title . "</h1>";
   echo $description ;
   
   
}
