<?php
date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';
include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtube remake</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

 <?php
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];


    echo "<form method='POST' action='".editcomments($conn)."'> 
    <input type='hidden' name='cid' value='".$cid."'>
    <input type='hidden' name='uid' value='".$uid = $_POST['uid']."'>
    <input type='hidden' name='date' value='".$date = $_POST['date']."'>
    <textarea name='message'>".$message."</textarea>
    <br>
    <button type='submit' name='commentSubmit'>Edit</button>
    <br>
    </form>";
            
 ?>
</body>
</html>