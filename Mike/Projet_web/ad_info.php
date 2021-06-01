<?php  require_once('pw_conn.php')  ;?>
<?php
 $id=$_GET['idannonce'];

 $requete="SELECT *from Ad WHERE id='$id'";
 $resultat=mysqli_query($conn, $requete);

 ?> 
 <div id="auto" >
 <?php
while($ligne=mysqli_fetch_assoc($resultat)){
 ?>
 <!-- <p> <b><a href="afficherannonce.php?idannonce=<?php echo $ligne['id']?>"><?php echo $ligne['titre']."."?></a></b><br> -->

  <?php echo ":" .$ligne['type']?><br>
  <?php echo "LOCATION:".$ligne['location']?><br>
  <?php echo "POSTED BY :".$ligne['address']?><br>
  <?php echo "PRICE:".$ligne['price']?><br>
  <?php echo "SURFACE:".$ligne['surface']?><br>
  <?php echo "NUMBER OF ROOM:".$ligne['room_number']?><br>

  <br><br><br>
  </p>
    

<?php }



?>
