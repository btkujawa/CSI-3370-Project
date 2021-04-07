<?php
include_once 'databaseconnect.php';
$sql = "SELECT path_string FROM saved_work_paths;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['path_string'];
        $imageData = base64_encode(file_get_contents($image));
        $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
        $r['image'][] = $src;
        
    }
    echo json_encode($r);
}