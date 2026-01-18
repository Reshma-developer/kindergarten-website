

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kindergarden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top px-4 px-lg-5 py-lg-0">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html"><h1 class="m-0 text-warning"><i class="fa fa-book-reader me-3 text-warning"></i>Kiddo</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-nav mx-auto">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="classes.php">Classes</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="facility.php">School Facilities</a></li>
                      <li><a class="dropdown-item" href="teacher.php">Popular teacher</a></li>
                      <li><a class="dropdown-item" href="become.php">Become a teacher</a></li>
                      <li><a class="dropdown-item" href="appointment.php">Make a appointment</a></li>
                      <li><a class="dropdown-item" href="test.php">Testimonial</a></li>
                    </ul>
                  </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                      </li>
                   
                </ul>
              </div>
            </div>
            <a href="" class="btn1 btn-warning rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>

            </div>
          </nav>


          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slide-1.jpg" style="height: 400px;" class="d-block w-100 " alt="slide1">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-8 col-lg-8 col-12">
                        <h1 class="text2 text-white mb-4">Contact Us</h1>
                        <p class="text3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tempore odio beatae culpa nam nisi, doloribus in ipsa cum temporibus explicabo officia magni veritatis quisquam! Possimus laborum voluptatem impedit corrupti?</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div> 
    </div>

    <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 600px;">
  <h1 class="mb-3">Contact</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo distinctio quod natus. Ut id voluptatibus numquam fugiat vel tempore magni, soluta quo libero ipsum incidunt quam. Rem error consequuntur doloribus?</p>
  </div>  
    

  <div class="row align-items-center justify-content-center position-relative">
    <div class="col-sm-12 col-md-4 col-lg-4 col-12 p-5">
        <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
            <i class="fa-solid fa-location-dot fa-3x"></i>
        </div>
        <h6>Ichalkaranji</h6>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 col-12 p-5">
        <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
            <i class="fa-solid fa-phone fa-3x"></i>
        </div>
        <h6> +91 8475213694</h6>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 col-12 p-5">
        <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
            <i class="fa-solid fa-envelope fa-3x"></i>
        </div>
        <h6> abc@gmail.com</h6>
    </div>
  </div>
</div>
</div>

<div class="row p-5">
  
    
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <div class="container bg-light p-3">
          <?php
            include 'php_contact.php';
          ?>
        <form  method="post">

        <h3>Contact Form</h3>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <lable for="name">Your Name</lable>
        <input type="text" name="name">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <lable for="email">Your Email</lable><br>
        <input type="text" name="email">
    </div>
</div>
<div class="row p-2">
    <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-12"> -->
    <lable for="subject">Subject</lable>
    <input type="text" name="subject">
</div>

<div class="row p-2">
    <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-12"> -->
    <lable for="message">Messages</lable>
    <textarea id="text" name="message" rows="4" cols="50"></textarea>
</div>
<div class="row">
<div class="col-12">
    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
</div>
   
</div>
  <!-- </div> -->
</div>
</div>
</form>


<div class="col-sm-12 col-md-6 col-lg-6 col-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61143.22359308635!2d74.4640446!3d16.70431035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0e265ba450af7%3A0x671b0ba88c556c2!2sIchalkaranji%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1719913464645!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
<!-- <iframe src="https://www.google.com/maps/place/Ichalkaranji,+Maharashtra/@16.7043063,74.4228447,13z/data=!3m1!4b1!4m6!3m5!1s0x3bc0e265ba450af7:0x671b0ba88c556c2!8m2!3d16.688621!4d74.4593101!16zL20vMGY0XzF3?entry=ttu" alt=""> -->
</div>
</div>
</div>

<!-- -----------------------footer------------------------ -->
<div class="container bg-dark p-5">
    <div class="footer">
    <div class="row">
      
    <div class="col-sm-12 col-md-4 col-lg-4 col-12">
      <h3>Get In Touch</h3>
      <p><i class="fa-solid fa-location-dot text-white"></i> Ichalkaranji</p>
      <p><i class="fa-sharp fa-solid fa-phone"></i> +91 8475213694</p>
      <p><i class="fa-solid fa-envelope"></i> abc@gmail.com</p>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 col-12">
      <h3 class="section2">Quick Links</h3>
      <a class="btn btn-link text-white-50" href="">About Us</a>
      <a class="btn btn-link text-white-50" href="">Contact Us</a>
      <a class="btn btn-link text-white-50" href="">Our Services</a>
      <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
      <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
    </div>
    
    <div class="col-sm-12 col-md-4 col-lg-4 col-12">
      <h3>Photo Gallery</h3>
      <div class="row g-2 pt-2">
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/athletic.webp" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/color-management.avif" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/art1.jpg" alt="">
        </div>
      </div>
      <div class="row g-2 pt-2">
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/about1.webp" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/general.avif" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid rounded p-1" src="./images/slide-2.jpg" alt="">
        </div>
      </div>
    </div>
    </div>
    <hr>
    <h5>Designed By R.M</h5>
    </div> 
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="jquery.min.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>

</body>
</html>
  

