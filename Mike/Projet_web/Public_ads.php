<?php 
session_start();
$users=$_SESSION['usrname'];
      echo $users;
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="pw_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <style>
              div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
              }

              div.gallery:hover {
                border: 1px solid #777;
              }

              div.gallery img {
                width: 100%;
                height: auto;
              }

              div.desc {
                padding: 15px;
                text-align: center;
              }

              div.content{
                display: flex;
                justify-content: center;
              }
      </style>
  
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
          <form method="POST">
          <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a class="nav-link " href="uconnected.php">Public ads </a></li> 
           <li class="nav-item"><a class="nav-link " href="">My ads </a></li>
           <li class="nav-item"><a class="nav-link " name='add' href="Publish_ads.php">Publish ads</a></li>
           <li class="nav-item"><a class="nav-link " href="sign_out.php">Sign out</a></li>  
          </ul>
          </form>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <br/><br/>
    <h2 id=w > Available Ads </h2> <br/><br/>

    <div class="content">
      <?php
      $sql="SELECT * from Ad ";
      $resultat=mysqli_query($conn,$sql);
      if ($resultat) {
        while($ligne=mysqli_fetch_assoc($resultat)){ 
          ?>
      <div class="gallery">
        <a target="_blank" href="<?php echo $ligne['image']?>">
          <img src="<?php echo $ligne['image']?>" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc"><?php echo $ligne['surface']?></div>
      </div>
     <?php } }?>
    </div>
          
    
      
     


   </body>
 </html>