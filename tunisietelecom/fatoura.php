<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
// This is a vulnerable PHP script prone to directory traversal attacks

// Get the filename from the URL parameter
$filename = $_GET['file'];

// Define the directory where files are stored
$directory = $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/";

// Concatenate the directory and filename to form the full path
$full_path = $directory . $filename;

var_dump($full_path);
// Include the file based on the user input
echo file_get_contents($full_path);
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/footer.php";
die();

?>
