<?php
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

$sql = 'SELECT * FROM users';

// Get Result
$result = $conn->query($sql);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($users);
  
?>