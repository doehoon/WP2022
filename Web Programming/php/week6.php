<?php

define( 'DB_NAME', 'dkim144' );
define( 'DB_USER', 'dkim144' );
define( 'DB_PASSWORD', 'dkim144' );
define( 'DB_HOST', 'localhost' );

function DeleteUser($id) {
 
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
     
    $del = "DELETE FROM user WHERE id = '$id' ";
     
    $result = $conn->query($del);
     
    mysqli_close($conn);
}

function Insertusername($username) {

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
	$insert = "INSERT INTO user SET username = '$username' ";
	$result = $conn->query($insert);
	mysqli_close($conn);
}

function ShowNames() {

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username, password FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
	$delurl = "[<a href='https://codd.cs.gsu.edu/~dkim144/week5.php?cmd=delete&id={$row['id']}'>delete</a>]";
	echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. " $delurl<br>";
}
} else {
  echo "0 results";
}
mysqli_close($conn);
}

?>

<form method="post">
  user Info: <input type="text" name="userInfo"><br>
  <input type="submit" value="Submit">
</form>

<?php
if($_POST['userInfo'] != '') {
	Insertusername($_POST['peopleInfo']);
}

if($_POST['cmd'] == 'delete') {
    $id = $_POST['id'];
    DeleteUser($id);
}

ShowNames();
?>
