<?php
include '../inc/connection.php';

$data = json_decode(file_get_contents("php://input"));
$shArray = array();

// Access the data
if ($data) {

    $Search_result = mysqli_real_escape_string($conn, $data->searchResult);

    $sql = "SELECT * FROM emojidb WHERE keywords LIKE '%$Search_result%' OR description LIKE '%$Search_result%' OR category LIKE '%$Search_result%' LIMIT 15";
    $result_set = mysqli_query($conn, $sql);

    if ($result_set) {
        if (mysqli_num_rows($result_set) > 0) {
            while ($row = mysqli_fetch_assoc($result_set)) {
                $shArray[] = array('emoji' => $row['emoji'], 'name' => $row['description'],'id' => $row['id']);
            }
        }
    } else {
        // Handle database query error
        $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode(array("error" => $error_message));
        exit(); // Stop script execution
    }
    mysqli_close($conn);
}
echo json_encode($shArray);
?>
