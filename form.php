<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
      
    <div class="container">
<h3>Contact Form</h3>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <lable for="name">Your Name</lable>
        <input type="text" name="name" >
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
</div>
</form>
</body>
</html>