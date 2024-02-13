<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "imojidatabse";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
    }

$sql = "SELECT * FROM emojidb";
$result_set = mysqli_query($conn, $sql);
if($result_set){
    while($row = mysqli_fetch_assoc($result_set)){
        $id = $row['id'];
        $emoji = $row['emoji'];
        $description = $row['description'];
        $category = $row['category'];
        $titleCounter = 0;

        $MetaTitle = $row['description'] . ' emoji ' . $row['emoji'] . ' copy and paste ';
        $MetaDis = $row['description'] . ' emoji ' . $row['emoji'].$row['emoji'].$row['emoji'].$row['emoji']. ' Copy and paste & Search for any emojis '.$row['emoji'].$row['emoji'].'('.$row['category'].')';
        $mtLst = '';

        $titleSq = 'SELECT emoji FROM emojidb WHERE description LIKE "%'.$category.'%" OR keywords LIKE "%'.$category.'%" OR category LIKE "%'.$category.'%" LIMIT 10';
        $result_set_title = mysqli_query($conn, $titleSq);
        if($result_set_title){
            while($row_title = mysqli_fetch_assoc($result_set_title)){
                if($titleCounter < 6){
                    $MetaTitle .= $row_title['emoji'].' ';
                }
                $titleCounter++;

                $MetaDis .= $row_title['emoji'].' ';
                
            }
        }
        $MetaDis .= '❤️🎉🔥💜✨💖👀💯💙🎈❣️💋💔💚🖤💛⭐💝🔴✅';
        // echo $MetaDis.'<br>';
        $emojiId = $row['id'];
        $insSql ="INSERT INTO metatitleanddis(emojiId,metaTitle,metaDis)VALUES('$emojiId','$MetaTitle','$MetaDis')";
        $insSqlResult = mysqli_query($conn,$insSql);
        if($insSqlResult){
            echo 'done'.$row['id'].'<br>';
        }

    }
}


?>