<?php 

$servername="localhost:3306";
$username ="root";
$password ="root";
$dbname="iletisim";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn == true)
{
    echo "Bağlanti Olmadi";
}

  $query = "SELECT * FROM mesajlar";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()){
      echo "<p>" . $row['email'] . "</p>";
  }
