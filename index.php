 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

     <link rel="stylesheet" href="assets/css/style.css">

     <title>Login</title>
 </head>

 <body>
     <div class="container">

         <div class="header">
             <h1 class="title">Gente que Faz</h1>
             <img class="imgEmploye" src="assets/img/funcionarioMes.png" alt="">
             <!-- <img src="assets/img/searaLogo.png" alt=""> -->
         </div>

         <form action="app/controllers/controllerLogin.php" method="POST">
             <div class="main">
                 <div class="inputName">
                     <label for="user">Usuário:</label>
                     <div class="input-group">
                         <input type="text" class="form-control" name="user" required id="user">
                     </div>
                 </div>

                 <div class="inputPassword">
                     <label for="password">Senha:</label>
                     <div class="input-group">
                         <input type="password" class="form-control" name="passw" required id="password">
                     </div>
                 </div>
                 <button class="btn btn-danger">Entrar</button>
             </div> <!-- main -->
         </form>



         <!-- <img class="imgSeara" src="assets/img/searaLogo.png" alt=""> -->
         <!-- <img class="imgEmployeMoth" src="assets/img/funcionarioMes.png" alt=""> -->
     </div> <!-- container -->





     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 </body>

 </html>