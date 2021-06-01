<?php session_start();
      $users=$_SESSION['usrname'];
      echo $users;
?>
<!DOCTYPE html>
<html>
  <head>
    <title> </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"   >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 </head>
  
 <body>
    <div class="container-fluid">
     <h1>Immob Benin</h1>
     <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a class="nav-link " href="uconnected.php">My page</a></li> 
           <li class="nav-item"><a class="nav-link " href="sign_out.php">Sign out</a></li>  
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
     </div>

    <div class="container">
     <h1></h1>
             <form   method="POST" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                   <label for="s_address">Sender adress</label>
                   <input type="text" class="form-control" name="n_address" id="s_address" required="require" >
                 </div>
                <div class="form-group">
                   <label for="location">Location</label>
                   <input type="text" class="form-control" name="n_location" id="location" required="require" >
                </div>
                <div class="form-group">
                   <label for="price">Price</label>
                   <input type="number" class="form-control" name="n_price" id="price" required="require" >
                </div>
                <div class="form-group">
                   <label for="surface">Surface</label>
                   <input type="number" class="form-control" name="n_surface" id="surface" required="require" >
                </div>
                <div class="form-group">
                   <label for="room">Room number</label>
                   <input type="number" class="form-control" name="n_room" id="room" required="require" >
                </div>
                <div class="form-group">
                   <label for="image">image</label> &nbsp 
                   File:
                   <input type="file" name="n_image"    class="form-control-file" id="image">
                </div>

                 
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="For sale">
                    <label class="form-check-label" for="radio1">For sale</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="For rent">
                    <label class="form-check-label" for="radio2">For rent</label>
                </div>
 
              <br/><br/>
                <button class="btn btn-primary" type="submit" name="btsubmit" value="upload">submit</button> 
              </form>
        </div>

        <?php
         
          
            if (isset($_POST['btsubmit'])) {
               require_once('pw_conn.php')  ;
            session_start();
            
            $adress_exp=$_POST['n_address'] ;
            $lieux=$_POST ['n_location'] ;
            $prix=$_POST ['n_price'] ;
            $img=$_FILES ['n_image']['tmp_name'] ;
            $target="Image/".$_FILES['n_image']['name'];
            move_uploaded_file($img,$target);
            $type=$_POST['radio'];
            $surf=$_POST ['n_surface'] ;
            $num_chambre=$_POST ['n_room'] ;
            
            $requete="INSERT INTO `Ad` (`image`, `price`, `location`, `status`, `type`, `address`, `surface`, `room_number`) VALUES ('$target', '$prix', '$lieux', 'Active', '$type', '$adress_exp', '$surf', '$num_chambre') ";
            
            if (mysqli_query($conn, $requete)) {
               echo "New record created successfully";
               } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
            }
            
         ?>
        

   </body>
 </html>