<?php include('database/server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DonateKart</title>
        <link
            rel="shortcut icon"
            href="images/united.png"
            type="image/x-icon"
        />
        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <style type="text/css">
    
     form, .content {
  width: 90%;
  margin: 0px auto;
  padding: 20px;
 
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark top-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">DonateKart</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarNav"
                >
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-black"
                                aria-current="page"
                                href="index.html"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="ngo.html"
                                >NGOs</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="EVENTS.html"
                                >Events</a
                            >
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="issuealert.html"
                                >Register an issue</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                            Would you like to be a part of this greater cause?
                        </h3>
                        <figure class="mt-4">
                            <blockquote class="blockquote">
                                
                            </blockquote>
                            
                        </figure>
                        <form method="post" action="register.php">
    <?php include('database/errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
                    </div>
                    
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img
                            src="images/signup.png"
                            
                            class="u-width-100per"
                        />
                    </div>
                </div>
            </div>
        </section>


       

        

        <script src="js/indexapp.js"></script>
    </body>
</html>
