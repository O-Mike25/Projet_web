<?php require_once('pw_conn.php') ; ?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="my_ads.css">
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
           <li class="nav-item"><a class="nav-link " href="uconnected.php">Public  ads </a></li> 
           <li class="nav-item"><a class="nav-link " href="my_ads.php">My ads </a></li>
           
           <li class="nav-item"><a class="nav-link " href="sign_out.php">Sign out</a></li>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

       
    <?php
        $requete="SELECT * from Ad  where id_users='0' ";
        $resultat=mysqli_query($conn,$requete);

        $nbr=mysqli_num_rows($resultat);
        echo "<p> Total <b>".$nbr."</b> annonces ...";


    ?></p>
    <p> <a href="Publish_ads.php"><img src="Image/61183.png"  width="50px" height="50px"> </a></p>
    
<table width="100%" border="1px" class="tableaustyle">
        <tr>
            <th>id</th>
            <th>image</th>
            <th>price</th>
            <th>location</th>
            <th>status</th>
            <th>type</th>
            <th>address</th>
            <th>surface</th>
            <th>number of room</th>
            
            <th>Modify</th>
            <th>Delete</th>
            
    </tr>
    <?php
    while($ligne=mysqli_fetch_assoc($resultat)){
        ?>
        <tr>
            <td><?php echo $ligne['id']?></td>
            <td><img src='<?php echo $ligne['image']?>' class="myphoto"></td>
            <td><?php echo $ligne['price']?></td>
            <td><?php echo $ligne['location']?></td>
            <td><?php echo $ligne['status']?></td>
            <td><?php echo $ligne['type']?></td>
            <td><?php echo $ligne['address']?></td>
            <td><?php echo $ligne['surface']?></td>
            <td><?php echo $ligne['room_number']?></td>
            <!--<td><a href="afficherannonce.php"> <?php echo $ligne['titre']?></a></td> -->
             
            <td><a href="Modify_ad.php?modifanon=<?php echo $ligne['id']?>"><img src='Image/pngtree-black-edit-icon-png-image_4422168.jpg'  width="50px" height="50px"></td>
            <td><a href="Delete_ad.php?suprimanno=<?php echo $ligne['id']?>"><img src='Image/téléchargement.png'  width="50px" height="50px"></td>
        </tr>
    
<?php }?>
</table>
<br>
<br>
<br>
<br>
 
     </div>

      

     

 </body>

</html>