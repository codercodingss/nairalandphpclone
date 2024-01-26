<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
include("commons/header.php"); 
require("server/connect.php");
if (isset($_POST["submit"])) {

    $fname = " ";
    $lname = " ";
    $username = " ";
    $email = $_POST["email"];
    $phone = " ";
    $password = $_POST["password"];

    $query = "INSERT INTO user (fname, lname, username, email, phone, password) VALUES ('$fname','$lname','$username','$email','$phone','$password')";


    $result = mysqli_query($con, $query);

if (!$result) {
    die("Error: " . mysqli_error($con));
} else {
    echo "<script>alert('Data inserted successfully')</script>";
}

echo
"
<script>alert('Data inserted successfully')</script>
";

}

?>


&nbsp;

<div class="confirm_email">
<h1>Submit Your Email To Join Nairaland</h1>
<table class="rounded_box_email">
    <tr>
        <td>Before you can join Nairaland, we need to verify your email address. Please enter it below:</td>
    </tr> 

    <tr>
        <td>

        <form action="" method="post">
        <div class="search">   

        <label for="email">Email:</label>
       <input type="email" name="email" class="mysearchbar" id="email" placeholder="abc@gmail.com" require>

       <label for="password">Password:</label>
       <input type="password" name="password" class="mysearchbar" id="password" placeholder="password..." require>

        <button name="submit" type="submit">submit</button>
    </div>
    </form>

        </td>
    </tr> 

    <tr>
        <td>
            We reqire a Gmail, Yahoo, Hotmail or Outlook email address
        </td>
    </tr>

</table>
</div>

&nbsp;

<?php include_once("commons/footer.php") ?>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>