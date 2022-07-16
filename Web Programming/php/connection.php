<?php
 
$conn = "";
  
try {
    $servername = "localhost";
    $dbname = "dkim144";
    $username = "dkim144";
    $password = "dkim144";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=dkim144",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>