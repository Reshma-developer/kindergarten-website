<?php
include 'config.php';
$con = mysqli_connect('localhost', 'root', '', 'kiddo');
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }


// $row = [];

if (isset($_GET['eid'])) {
    $UID = $_GET['eid'];
    $sql = "SELECT * FROM form WHERE id=$UID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "POST Data: Name = $name, Email = $email, Subject = $subject, Message = $message<br>";

    if ($UID) {
        $sql1 = "UPDATE form SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$UID'";
        $result1 = mysqli_query($con, $sql1);
        if ($result1) {
            echo "Value updated";
            echo '<script>
            setTimeout(function(){
            window.location.assign("connection.php");
        },0);
            </script>';
        } else {
            echo "Failed to update: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method='post'>
<div class="container">
<h3>Contact Form</h3>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <label for="name">Your Name</label>
        <input type="text" name="name" value="<?php echo($row['name']);?>">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <label for="email">Your Email</label><br>
        <input type="text" name="email" value="<?php echo($row['email']); ?>">
    </div>
</div>
<div class="row p-2">
    <label for="subject">Subject</label>
    <input type="text" name="subject" value="<?php echo htmlspecialchars($row['subject']); ?>">
</div>

<div class="row p-2">
    <label for="message">Message</label>
    <textarea id="text" name="message" rows="4" cols="50"><?php echo htmlspecialchars($row['message']); ?></textarea>
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

<?php
include 'config.php';
$con = mysqli_connect('localhost', 'root', '', 'kiddo');

if (isset($_GET['uid'])) {
    $UID = $_GET['uid'];

    $sql = mysqli_query($con, "DELETE FROM form WHERE id='$UID'");

    if ($sql) {
        echo "Value Deleted";
        echo '<script>
        setTimeout(function(){
            window.location.assign("connection.php");
        }, 0);
        </script>';
    } else {
        echo "Failed to delete: " . mysqli_error($con);
    }
}
?>