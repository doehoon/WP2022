<?php
define( 'DB_NAME', 'dkim144' );
define( 'DB_USER', 'dkim144' );
define( 'DB_PASSWORD', 'dkim144' );
define( 'DB_HOST', 'localhost' );
 
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
function DeleteNameEntry($id) {
    global $conn;
     
    $del = "DELETE FROM people WHERE id = '$id' ";
    $result = $conn->query($del);
}
 
function InsertFirstName($FirstName) {
    global $conn;
     
    $insert = "INSERT INTO people SET FisrtName = '$FirstName' ";
    $result = $conn->query($insert);
     
}
 
 
function ShowNames() {
    global $conn;
     
    $sql = "SELECT id, FirstName FROM people";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $delurl = "[<a href='' onclick=return(deleteNames('$id'))>delete</a>]";
        echo "id: " . $row["id"]. " - FirstName: " . $row["FirstName"]. " $delurl<br>";
      }
    } else {
      echo "0 results";
    }
 
}
 
$cmd = $_GET['cmd'];
 
if($cmd == 'create') {
    InsertFirstName($_GET['peopleInfo']);
} else if($cmd == 'delete') {
    $id = $_GET['id'];
    DeleteNameEntry($id);
}
 
ShowNames();
 
mysqli_close($conn);
 
?>