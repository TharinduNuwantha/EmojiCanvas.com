<?php
include 'inc/connection.php';
$sessionOne = '';   
$sessionTwo = '';
$sessionThre = '';
$sessionThree = '';
$row ='';
$rowCount = 0;
if (isset($_GET['searchResult']) OR isset($_GET['emojiID'])) {

    if(isset($_GET['emojiID'])){
        $sql = "SELECT * FROM emojidb WHERE id = '{$_GET['emojiID']}' LIMIT 1";    
    }else{
        $Search_result = $_GET['searchResult'];
        $sql = "SELECT * FROM emojidb WHERE description LIKE '%{$Search_result}%' OR category LIKE '%{$Search_result}%' OR keywords LIKE '%{$Search_result}%' LIMIT 1";
    }
    
    $result_set = mysqli_query($conn, $sql);

    if ($result_set) {
        $row = mysqli_fetch_array($result_set);
        $rowCount = mysqli_num_rows($result_set);
        if(mysqli_num_rows($result_set)>0){
                    $sessionOne = '
            <div class="mainWapper">
                <div class="mainContainer">
                    <br>
                    <div class="line"></div>
                    <br><br>
                    <div class="imojiBox">
                        <div class="imojiMdBox">
                            <div class="mainImoj">
                                <span class="imjSpan">' . $row['emoji'] . '</span>
                            </div>
                            <div class="buttonROw"><button id="btnCpp">copy</button></div>
                        </div>
                    </div>
                    <p class="copiedMsg hide" id="copiedMsg">Emoji successfully copied! 🎉</p>
                    <div class="description">
                        <p>';

        $sessionTwo = $row['description_long'];

        $sessionThree = '<br><br><br>
        <div class="line"></div><br><br>
                        </p>
                        <div class="dtlTable">
                            <div class="tblCanves">
                                <dl>
                                    <dt>Emoji</dt>
                                    <dd>' . $row['emoji'] . '</dd>
                                </dl>
                                <dl>
                                    <dt>Description</dt>
                                    <dd>' . $row['description'] . '</dd>
                                </dl>
                                <dl>
                                    <dt>Category</dt>
                                    <dd>' . $row['category'] . '</dd>
                                </dl>
                                <dl>
                                    <dt>Subcategory</dt>
                                    <dd>' . $row['subcategory'] . '</dd>
                                </dl>
                                <dl>
                                    <dt>Unicode Version</dt>
                                    <dd>' . $row['unicode_code'] . '</dd>
                                </dl>
                                <dl>
                                    <dt>IOS Version</dt>
                                    <dd>' . $row['ios_version'] . '</dd>
                                </dl>
                            </div>
                        </div>
                    <br><br>
                </div>
            </div>';


            //------ if ID avalbel make search Result
            if(isset($_GET['emojiID'])){
                $Search_result = $row['category'];
            }
        }

        // Continue with the rest of your code...
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmojiCanvas.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./MasterStyle/style.css">
    <link rel="stylesheet" href="./emojiCategories/redHartTest/style.css">
</head>
<body>
<?php include('topBar.php');?>

        <?php include 'searchBox.php';?>

<div class="flipbar"></div>

<?php
    if (isset($_GET['searchResult']) OR isset($_GET['emojiID'])) {
        
    

    echo $sessionOne;
    echo $sessionTwo;
    echo $sessionThree;

    $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
    $lastParts2 = '';
    $lastParts3 = '</div></div>';
    
    $sql = "SELECT * FROM emojidb WHERE description LIKE '%{$Search_result}%' OR category LIKE '%{$Search_result}%' OR keywords LIKE '%{$Search_result}%' LIMIT 100";
    $result_set = mysqli_query($conn, $sql);
    
    if ($result_set) {
        while ($row = mysqli_fetch_assoc($result_set)) {
            $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span>' . $row['emoji'] . '</span></div></a>';
        }
    }
    
    echo $lastParts1;
    echo $lastParts2;
    echo $lastParts3;
 
  

    if(!($rowCount > 0)){

        echo '<div class="noDataWapper">
    <div class="noDataROw">
        <img src="img/main/nodata.jpg" alt="No data" width="450px">
    </div>
    </div><br><br><br>';
    }
}
?>



<br><br>

    <footer>
        <div class="footerRow">
            <div class="ftlogo"><span>EmojiCanvas.com</span></div>
            <div class="ftlinks">
                <span><a href="#">About us</a></span>
                <span><a href="#">Contact us</a></span>
            </div>
        </div>
        <div class="fuuterBotem">
        &#169;<span id="currntYear"> </span>. || All Rights Reserved.
        </div>
    </footer>

        <script src="index.js"></script>
        <script src="./MasterStyle/index.js"></script>
        <script src="./MasterStyle/search.js"></script>
        <script src="emoji.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.getElementById("currntYear").innerText = new Date().getFullYear();
            
           
        </script>


<!-- EmojiPAkaya6454@2024 -->
</body>
</html>




