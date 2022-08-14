<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Login Register Project with Verifiation</title>
    
   <link rel="stylesheet" href="css/style.css">
    <style>
       
 
    </style>
  </head>
  <body onload="myFunction()">

  <div id="site-loader">
     
  </div>

  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto text-center p-5">
              <?php 
               session_start();
                if(isset($_SESSION['empty']) && $_SESSION['empty'] !=''){
                  echo '<h6 class="text-center empty_message">'. $_SESSION['empty'].'</h6>';
                  unset($_SESSION['empty']);
                  
                }
               ?>
               
                <h3>Create An Account</h3>
                 
            
                <form action="student_action.php" method="post" enctype="multipart/form-data">
                  <div class="register-form">
                      
                      <div class="form-group">

                      <input type="email" class='form-control' name='user_email' placeholder='Email Address' require>
                      </div>       
                      <div class="form-group">               
                        <input type="password" class='form-control' name='user_password' placeholder='Password' require>
                      </div>
                      <div class="submit-regiter text-center">
                        <button type='submit' name='register_user' id='register-btn' class="btn btn-primary">Login</button>
                      </div> 
                    </div>
                </form>
                <hr>
               <div class="info text-center">
                  <p>Dont Have An Account? <a href='index.php' class="btn btn-success">Register Now</a></p>
               </div>
               

               </div>
               
               </div>
             </div>
             </div>

     <script>

        var preloader = document.getElementById("site-loader");
        function myFunction(){
          preloader.style.display = "none";
        }
 
      </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 
  </body>
</html>
