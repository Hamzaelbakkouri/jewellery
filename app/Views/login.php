<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../app/Views/images/hh.png" type="image/x-icon">
    <title>jewellery_app</title>
    <meta name="Description" content="Jewellery store for selling Jewellery like rings and necklaces">
    <meta name="Keyword" content="Jewellery store,rings,necklaces">
    <meta name="author" content="Jewellery store">
    <link rel="stylesheet" type="text/css" href="../app/Views/css/bootstrap.css" />
    <link href="../app/Views/css/style.css" rel="stylesheet" />
    <link href="../app/Views/css/responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="../app/Views/js/jquery-3.4.1.min.js" defer></script>
    <script type="text/javascript" src="../app/Views/js/bootstrap.js" defer></script>
    <script type="text/javascript" src="../app/Views/js/custom.js" defer></script>
</head>
<body>
  <section class="vh-100" style="background-color: #111;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            
          <form method="post">
          
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">login</h3> 

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="user_email" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="user_password" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" name="admin" />
              <label class="form-check-label" for="form1Example3"> admin </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>

            <hr class="my-4">
            <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a style="margin-left: 10px; " href="signuppage" class="btn btn-outline-primary">Create new</a>
                  </div>

                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>