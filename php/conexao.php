<?php

$conn = new MySQli('localhost', 'root', '', 'projetosenac');

if($conn->connect_error){
    die("Connection failed: " . $conn ->connect_error);
}

?>