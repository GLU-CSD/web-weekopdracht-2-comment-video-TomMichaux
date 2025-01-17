

<?php
date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';
include 'comments.inc.php';
?>

<?php
include("config.php");
include("reactions.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtube remake</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=twI61ZGDECBr4ums" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    
     
    <div>
        <form action"index.php" method="post">
            <div class="container">

            <h1>Registration</h1>
            <h1>Log in & Comment</h1>

            <label for="email"><b>UserName</b></label>
            <label for="Password"><b>& Password</b></label>
            <br>
            <?php
echo "<form  method='POST' action='".getLogin($conn)."'>
  <input type='text' name= 'uid' required>
  <input type='password' name= 'pwd' required>
  <br>
  <br>
  <button type='submit' name='loginSubmit'>Login</button>
</form>";
?>

<?php
echo "<form  method='POST' action='".userLogout()."'>
<br>
  <button type='submit' name='logoutSubmit'>Log out</button>
</form>";

if(isset($_SESSION['id'])){
echo "You are now logged in!";
} else {
echo "You are now NOT logged in!";
}
?>  

            <br>
            <br>
            <label for="Comment"><b>Comment</b></label>
            <br>


            <?php
    if(isset($_SESSION['id'])){
        echo "<form method='POST' action='".setComments($conn)."'> 
        <input type='hidden' name='uid' value='".$_SESSION['id']."'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message' required></textarea>
        <br>
        <button type='submit' name='commentSubmit'>Comment</button>
        <br>
    </form>";
    } else {
    echo "You need to be logged in to commment!";
    
    }
    

             
            
            getComments($conn);
            ?>
            </div>
        </form>
    </div>
</body>
</html>

<?php
$con->close();
?>