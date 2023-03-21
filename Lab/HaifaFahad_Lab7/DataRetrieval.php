<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Data Retrieval </title>
</head>
<body>

<?php
//Calling the connection function made in previous file
include 'TestingConnection.php';
$conn = OpenCon();
echo "Connected Successfully";
//Inserting data into table
$sql = "INSERT INTO Lab_06 (F_name, L_name, S_id, Major)
VALUES ('Haifa', 'Fahad', '201912120', 'SWE')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//Using SELECT statement to retreive data
$sql = "SELECT F_name, L_name, S_id, Major FROM Lab_06";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table> <tr><th> First name </th> <th> Last name </th> <th> ID </th> <th> Major </th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["F_name"]."</td><td>".$row["L_name"]."</td><td> ".$row["S_id"]."</td><td>".$row["Major"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
            
CloseCon($conn);


    ?>
</body>
</html>


