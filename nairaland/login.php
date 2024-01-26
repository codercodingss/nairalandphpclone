<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
include("commons/header.php");
include("server/connect.php");

if (isset($_POST['btnsub'])) {
    $myuname = $_POST["UserName"];
$mypassword = $_POST["password"];

$q = mysqli_query($con, "SELECT * FROM user WHERE username='$myuname' AND password='$mypassword' ");


if (mysqli_num_rows($q) > 0) {
    session_start();
    while ($row = mysqli_fetch_assoc($q)) {
        $_SESSION['username'] = $row["username"];
    }
    header("location: dashboard.php");
}

}
?>


&nbsp;

<div class="confirm_email">
<h1>Login To Nairaland</h1>
<table class="rounded_box_email">
    <tr>
        <td><b>Login With Password:</b></td>
    </tr> 

    <tr>
        <td>

        <form action="" method="post">
        <div class="search2">
            
       <label for="UserName">User Name:</label>
       <input type="text" name="UserName" id="UserName">

       <label for="password">Password:</label>
       <input type="password" name="password" id="password">

       <button name="btnsub">Login</button>

    </div>
    </form>

        </td>
    </tr> 

</table>

&nbsp; &nbsp; &nbsp; &nbsp; 

<table class="rounded_box_email">
    <tr>
        <td><b>Reset Your Password:</b></td>
    </tr> 

    <tr>
        <td>
            <p>Please enter your email address and a link allowing you to reset your password will be emailed to you.</p>

        <div class="search">
       <label for="email">Email:</label>
       
       <input type="email" name="email" id="email" class="mysearchbar">
        <button>Submit</button>
    </div>

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