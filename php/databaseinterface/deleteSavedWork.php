<?php
session_start();

include_once 'databaseconnect.php';

if (array_key_exists('path_id', $_POST)) {
    $path_id = $_POST['path_id'];
    $sql = "DELETE FROM saved_work_paths WHERE path_id = '$path_id';";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}