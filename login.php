
<!doctype html>
<html lang="en">
  
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome To Login</title>
  
 <style>
   
     body { background-image : url("img/2.jpg");
     background-attachment: fixed;
     background-size:cover

}
     
     .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        background:#ffc107;
         color:#fff;
     }

     .row h2, .row label, .row small{
        text-shadow: 1px 1px 10px rgba(0, 0,0,5);
      color: aliceblue;
     }
 </style>
  
  
  </head>
  <body>
    

<section ic="login" class="login">
  <div class="container">
     <div class="row pt-4 mb-4">
         <div class="col text-center">
             <h2>Login</h2>
         </div>
     </div>


    <div class="col-lg-6">
            <form action="proseslogin.php" method="post">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="username" class="form-control" name="username"id="username" aria-describedby="emailHelp" placeholder="Username">
                      
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value='Login'>Submit</button>
                  </form>
    </div>
</div>

</section>
      


   
   
   
   
   
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>