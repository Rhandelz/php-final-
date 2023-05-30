<?php
include './config.php';

$id =  $_GET["id"];

$res = "DELETE FROM `note` WHERE `id`=$id";

$resI = $conn->query($res);

header("Location:note.php");

?>