<?php
include "database_connect.php";
$id = $_GET["id"];

// Use prepared statement to delete data
$sql = "DELETE FROM `crud` WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
$result = mysqli_stmt_execute($stmt);

if ($result)
{
    header("Location: index.php?msg=Data deleted successfully");
}
else
{
    echo "Failed: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);

session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}