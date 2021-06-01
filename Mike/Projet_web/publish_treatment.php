<?php
  require_once('pw_conn.php')  ;
   
  $adress_exp=$_POST ['n_address'] ;
  $lieux=$_POST ['n_location'] ;
  $prix=$_POST ['n_price'] ;
  $img=$_FILES ['n_image'][tmp_name] ;
  $target="Image/".$_FILES['n_image']['name'];
  move_uploaded_file($img,$target);
  $type=$_POST['radio'];
  $surf=$_POST ['n_surface'] ;
  $num_chambre=$_POST ['n_location'] ;
  
  
  $sql="INSERT INTO `Ad` ( `adress`, `location`, `price`, `surface`, `room_number`,'image','type','status') VALUES ( '$adress_exp', '$lieux', '$prix', '$surf', '$num_chambre','$img','$type','Active')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>