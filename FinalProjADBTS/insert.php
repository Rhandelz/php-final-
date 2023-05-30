<?php

include './config.php';

$title = $_POST["title"];
$content = $_POST["content"];

$query = "INSERT INTO `note`(`id`, `title`, `content`) VALUES (' ','".$title."','".$content."')";
    
if (mysqli_query($conn, $query)) {
    echo "<h1>New record created successfully</h1>";
    header('Location:note.php');
  } else {
    header('Location:create.php');
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } 

?>