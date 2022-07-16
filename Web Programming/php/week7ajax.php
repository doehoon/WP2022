<?php
define( 'DB_NAME', 'dkim144' );
define( 'DB_USER', 'dkim144' );
define( 'DB_PASSWORD', 'dkim144' );
define( 'DB_HOST', 'localhost' );

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

function DeletePeopleEntry($id) {

global $conn;

	$del = "DELETE FROM people WHERE id = '$id' ";
	$result = $conn->query($del);
ShowNames();
}

function InsertPerson ($FirstName, $LastName, $Telephone) {
  global $conn;
  
    $insert = "INSERT INTO people (FirstName, LastName, Telephone) values ('$FirstName', '$LastName', '$Telephone')";
    $result = $conn->query($insert);
ShowNames();

}

function ShowNames() {

global $conn;

$sql = "SELECT id, FirstName, LastName, Telephone FROM people";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
	$id = $row["id"];
	$delurl = "[<a href='' onclick=return(deleteNames('$id'))>delete</a>]";
echo "id: " . $row["id"]. "  FirstName: " . $row["FirstName"]. "  LastName: " . $row["LastName"]. " Telephone: " . $row["Telephone"]. " $delurl<br>";
}
} else {

  echo "0 results";
}

}

$cmd = $_GET['cmd'];
	if($cmd=='show') { 
		echo("whatever");
		ShowNames();
}

if($cmd == 'create') {
    InsertPerson($_GET['FirstName'], $_GET['LastName'], $_GET['Telephone']);
} else if($cmd == 'delete') {
    echo("text");
    DeletePeopleEntry($_GET['id']);
}

mysqli_close($conn);

?>
