<?php include('RabbitMQClient.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--CSS Links-->
  <link rel="stylesheet" href="style.css">
  <!--JavaScript-->
  <script type="text/javascript" src="scripts.js"></script>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <section  id="anime" class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src= "Images/yFoodsLogo1.png"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1"></h4> 
                      </div>
      
                      <form onsubmit="return validateLogin()" method="POST" action="index.php">
                        <p>Login to your account</p>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="username" name="username"  class="form-control"
                            placeholder="Username" />
                          <label class="form-label" for="username">Username</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="password" name="password"  class="form-control" placeholder="Password"/>
                          <label class="form-label" for="Password">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
				                <input id="submit" type="submit" name="login" value="Login"/>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <button id="createNew" onclick="createNewUsr()" type="button" class="btn btn-outline-danger" name="create_user">Create Account</button>
                        </div>
                    </div>
                  </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
