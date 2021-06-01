 
  <?php
    // Initialiser la session
    session_start();
    session_unset();
    // Détruire la session.
    session_destroy();
    // Redirection vers la page de connexion
    header("Location: projet_web.php");
 ?>
   