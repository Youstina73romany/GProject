<?php
include ('connection.php'); ?>
<?php 
  //if user clicked the button
  if(isset($_POST['submit']) && isset($_files['photo'])){
  $name=mysqli_real_escape_string($con, $_POST['name']);
  $type=mysqli_real_escape_string($con, $_POST['type']);
  $photo=mysqli_real_escape_string($con, $_POST['photo']);
  $email=mysqli_real_escape_string($con, $_POST['email']);
  $fullname=mysqli_real_escape_string($con, $_POST['fullname']);
  
  }?>
<!DOCTYPE html>
<html>
    <head>
        <title>Submit Recipe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling.css">
        <link rel=”stylesheet” href=”css/bootstrap.css”>
        <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="java.js"></script>
        <script src="https://kit.fontawesome.com/aa3edc3ef9.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
          </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div id="banner" class="col-sm-12">   
            </div></div>
    
            <nav class="navbar navbar-expand-lg my-0">
                <div class="container-fluid navbar-a">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="bentohome.html">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" href="recipes.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Recipes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#"></a>Lactose Free</li>
                          <li><a class="dropdown-item" href="#"></a>Gluten Free</li>
                          <li><a class="dropdown-item" href="#"></a>Egg Free</li>
                          <li><a class="dropdown-item" href="#"></a>Nuts Free</li>
                          <li><a class="dropdown-item" href="#"></a>Meat Free</li>
                          <li><a class="dropdown-item" href="#"></a>Soy Free</li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#"></a>Resources & Articles</li>
                          <li><a class="dropdown-item" href="#"></a>Motivational Stories</li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="hidden.html">Hidden Allergens</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="signup.htnl">Sign Up</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.html">Log In</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="submit.html">Submit Recipe</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                      </li>
                       
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-globe"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="row submit-recipe">
              <form class="submit-recipe-form col-sm-6 mx-auto bg-light my-5 py-5 px-5 border rounded" style="--bs-bg-opacity: .5;">
                <p class="display-4 text-center">Send us your recipes!<br><br></p>

                <div class="row">
                    <div class="col">
                        <label>Recipe name</label>
                      <input type="text" name="name"  class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label>Type</label>
                      <input type="text"  name="type" class="form-control" placeholder="e.g. dessert, dinner,..">
                    </div>
                  </div>
                <div class="form-group" method="POST" encrypt="multipart/form-data">
                  <label for="exampleFormControlTextarea1">List of ingredients</label>
                  <textarea class="form-control" name="ingredients"  id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Cooking steps</label>
                    <textarea class="form-control" name="steps"  id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Upload photos</label>
                    <input type="file"  name="photo" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Your full name</label>
                    <input type="text" class="form-control"name="fullname" id="formGroupExampleInput" placeholder="">
                  </div>
                  <button class="btn2" name="submit"  type="submit">Submit</button>
              </form>
              </div>

              <footer class="text-center text-lg-start text-white">
                <div class="container p-4 pb-0">
                  <section class="">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 vision">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                          BENTO
                        </h6>
                        <p>
                          We want to be global to help all the people struggling, regardless of anything.
                        </p>
          
                        <p>Download our mobile app</p>
                        <a class="download-app">
                          <img src="googleplay.svg" alt="Google Play">
                        </a><br><br>
                        <a class="download-app">
                          <img src="appstore.svg" alt="App Store">
                        </a>
                      </div>
            
                      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                        <p>
                          <a class="footer-links">Recipes</a>
                        </p>
                        <p>
                          <a class="footer-links">Blog</a>
                        </p>
                        <p>
                          <a class="footer-links">Shop</a>
                        </p>
                        <p>
                          <a class="footer-links">Hidden Allergens</a>
                        </p>
                      </div>
            
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home mr-3"></i> 5th Settlement, Cairo, Egypt</p>
                        <p><i class="fas fa-envelope mr-3"></i>  bento.webapp@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +20 0111 255 2668</p>
                      </div>
            
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
          
                        <a class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #3b5998; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-facebook-f"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #55acee; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-twitter"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #ac2bac; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-instagram"></i
                          ></a>
                      </div>
                    </div>
                  </section>
                </div>
                <br>
                <div class="text-center p-3">
                  © 2020 Copyright:
                  <a class="text-white footer-links" href="https://bento.com/">bento.com</a>
                </div>
              </footer>
    

    </body>
    </html>