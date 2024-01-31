<?php
include 'inc/connection.php';

// Get raw JSON data from the request body
// Get raw JSON data from the request body
$jsonData = file_get_contents("php://input");

// Decode JSON data
$data = json_decode($jsonData);
$imojiArr = array();

// Process data (for example, you can save it to a database)
$inputVal = $data->shBoxVal;
$sql = "SELECT emoji FROM emojidb WHERE keywords LIKE '%{$inputVal}%' OR description LIKE '%{$inputVal}%' OR category LIKE '%{$inputVal}%' OR subcategory LIKE '%{$inputVal}%' LIMIT 80";
$result_set = mysqli_query($conn, $sql);

if ($result_set) {
    while ($row = mysqli_fetch_array($result_set)) {
        $imojiArr[] = $row['emoji'];
    }

    $response = implode(', ', $imojiArr);
    echo json_encode($response);
} else {
    $errorResponse = array('error' => 'Error: ' . mysqli_error($conn));
    echo json_encode($errorResponse);
}

?> 
