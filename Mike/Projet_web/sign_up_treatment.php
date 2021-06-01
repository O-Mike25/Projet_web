<?php
  require_once('pw_conn.php')  ;
    
  $nom=$_POST ['post_name'] ;
  $prenom=$_POST ['post_first_name'] ;
  $util=$_POST ['post_uname'] ;
  $mail=$_POST ['post_email'] ;
   
  $mpasse=$_POST ['post_psw'] ;
 
  $sql="INSERT INTO `Users` ( `name`, `first_name`, `email`, `password`, `username`) VALUES ( '$nom', '$prenom', '$mail', '$mpasse', '$util')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>