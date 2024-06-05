<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morano_finals";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare statements
$insertStmt = mysqli_stmt_init($conn);
$updateStmt = mysqli_stmt_init($conn);
$deleteStmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($insertStmt, "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `gender`) VALUES (?, ?, ?, ?)");
mysqli_stmt_prepare($updateStmt, "UPDATE `crud` SET `first_name`=?,`last_name`=?,`email`=?,`gender`=? WHERE id = ?");
mysqli_stmt_prepare($deleteStmt, "DELETE FROM `crud` WHERE id = ?");
?>