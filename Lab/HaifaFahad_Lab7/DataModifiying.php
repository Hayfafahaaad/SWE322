<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Data Modification</title>
</head>
<body>
    <?php
    //Calling the connection function made in previous file
    include 'TestingConnection.php';
    $conn = OpenCon();
    $sql = "UPDATE Lab_06 SET L_name ='Sultan' WHERE S_id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
CloseCon($conn);


    ?>
</body>
</html>

