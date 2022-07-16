<?php
 
if($_POST['show'] == "userid") {
    setcookie('show', 'userid', time() + (86400 * 30), "/");
    header("Location: week6.php");
} else {
    setcookie("show", "", time() - 3600, '/');
}
 
?>
 
<form method="post">
  Input Name To Access the Edit Page: <input type="text" name="show"><br>
  <input type="submit" value="Submit">
</form>

<?php
 
if($_POST['show'] == "password") {
    setcookie('show', 'password', time() + (86400 * 30), "/");
    header("Location: week6.php");
} else {
    setcookie("show", "", time() - 3600, '/');
}
 
?>

<form method="post">
  Input password To Access the Edit Page: <input type="text" name="show"><br>
  <input type="submit" value="Submit">
</form>