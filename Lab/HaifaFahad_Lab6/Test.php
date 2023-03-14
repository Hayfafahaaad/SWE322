<?php
include 'TestingConnection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>