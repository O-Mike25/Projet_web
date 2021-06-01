<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <li class="nav-item"><a class="nav-link " href="projet_web.php">Home</a></li>
            <li class="nav-item"><a class="nav-link " href="pw_sign_in.php">Sign in</a></li>
            <li class="nav-item"><a class="nav-link " href="pw_sign_up.php">Sign up</a></li>
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
             <form action="sign_up_treatment.php"  method="POST">
               <fieldset>
                 <legend></legend>
                 
                 <div class="form-group">
                   <label for="name">name</label>
                   <input type="text" class="form-control" id="name" name="post_name" required="required" >
                 </div>

                 <div class="form-group">
                   <label for="fname">First_name</label>
                   <input type="text" class="form-control" id="fname" name="post_first_name" required="required" >
                 </div>
                 
                 <div class="form-group">
                   <label for="Uname">Username</label>
                   <input type="text" class="form-control" id="Uname" name="post_uname" required="required" >
                 </div>


                 
                 <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" id="email" name="post_email" required="required" >
                 </div>

                 <div class="form-group">
                   <label for="psw">Password</label>
                   <input type="text" class="form-control" id="psw" name="post_psw" required="required" >
                 </div>
                 
                 <button class="btn btn-primary" type="submit">Sign Up</button>
     </form>
   </body>
 </html>