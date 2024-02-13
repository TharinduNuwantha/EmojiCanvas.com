
<?php
include '../inc/connection.php';
$sessionOne = '';   
$sessionTwo = '';
$sessionThre = '';
$sessionThree = '';
$row ='';
$rowCount = 0;
$addsByGoogle ='';

$_GET['emojiID']="32";if (isset($_GET['searchResult']) OR isset($_GET['emojiID'])) {

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
                    <div class="imojiBox" title="face with open eyes and hand over mouth emoji" description = "face with open eyes and hand over mouth emoji copy and paste">
                        <div class="imojiMdBox">
                            <div class="mainImoj">
                                <span class="imjSpan" title="face with open eyes and hand over mouth emoji">🫢</span>
                            </div>
                            <div class="buttonROw"><button id="btnCpp">copy</button></div>
                        </div>
                    </div>
                    <p class="copiedMsg hide" id="copiedMsg">Emoji successfully copied! 🎉</p>
                    <div class="description">
                        <p title="description about face with open eyes and hand over mouth emoji">';

        $sessionTwo = $row['description_long'];
        $addsByGoogle = '<br><br><div class="googleAdds">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
            crossorigin="anonymous"></script>
        <!-- emojimy.com -->
        <ins class="adsbygoogle"
            style="display:block"   
            data-ad-client="ca-pub-8740792732131678"
            data-ad-slot="1167187911"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
            crossorigin="anonymous"></script>
        <!-- emojimy.com -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-8740792732131678"
            data-ad-slot="1167187911"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
</div>';    
        $sessionThree = '<br><br><br>
        <div class="line"></div><br><br>
                        </p>
                        <div class="dtlTable">
                            <div class="tblCanves" title="face with open eyes and hand over mouth emoji full details table">
                                <dl>
                                    <dt>Emoji</dt>
                                    <dd>🫢</dd>
                                </dl>
                                <dl>
                                    <dt>Description</dt>
                                    <dd>face with open eyes and hand over mouth</dd>
                                </dl>
                                <dl>
                                    <dt>Category</dt>
                                    <dd>Smileys & Emotion</dd>
                                </dl>
                                <dl>
                                    <dt>Subcategory</dt>
                                    <dd>face_with_open_eyes_and_hand_over_mouth</dd>
                                </dl>
                                <dl>
                                    <dt>Unicode Version</dt>
                                    <dd>14.0</dd>
                                </dl>
                                <dl>
                                    <dt>IOS Version</dt>
                                    <dd>15.4</dd>
                                </dl>
                            </div>
                        </div>
                    <br><br>
                </div>
            </div>
            
            ';
            
            $metaTgTitle = $row['description']. ' emoji';

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
    <title>Copy and Paste Emojis - emojimy.com ❤️💜 💖 💚 💛</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../MasterStyle/style.css">
    <link rel="stylesheet" href="../emojiCategories/redHartTest/style.css">
    <meta name="description" content="emoji copy and paste ❤️ 😂 😭 🙏 😘 🥰 😍 🎉 🔥 🤗 🙄 🎂 😎 💜 💖 👀 💯 💗 💙 🙈 ❣️ 💔 💓 💚 😛 🎁 🖤 😆 😋 ✨ 😢 🤩 🙃 😒 😱 😈 😇 ✅ 🌈 💛 👊 🤬 ⚡ 💦 🌷 🌙 ⭐"> 
    <meta name="keywords" content="emoji,emoji meanings,emoji copy and paste,heart emoji,thumbs up emoji,laughing emoji,nerd emoji,skull emoji,eyes emoji,shrug emoji,thinking emoji,sad emoji,fire emoji,eye emoji,poop emoji,emoji kitchen,star emoji,smile emoji,cursed emoji,shocked emoji,laugh emoji,blush emoji,blue emoji,angry emoji,salute emoji,heart eyes emoji,smiling emoji,happy emoji,check mark emoji,discord emoji,wink emoji,middle finger emoji,sparkle emoji,lip bite emoji,eye roll emoji,clown emoji,b emoji,side eye emoji,snapchat emoji meanings,sad face emoji,kiss emoji,blushing emoji,purple heart emoji,think emoji,surprised emoji,emoji symbols,devil emoji,emoji keyboard,sweat emoji,smiley face emoji,smirk emoji,laughing crying emoji,rolling eyes emoji,flower emoji,hug emoji,100 emoji,confused emoji,blue heart emoji,cool emoji,current phase of the moon emoji,sunglasses emoji,scared emoji,crying laughing emoji,checkmark emoji,chefs kiss emoji,blue emoji meme,eggplant emoji,hand emoji,cross emoji,prayer emoji,emo emoji,prayer hands emoji,pink heart emoji,white heart emoji,clap emoji,sun emoji,emoji faces,biting lip emoji,cry emoji,cat emoji,mad emoji,high five emoji,black heart emoji,money emoji,monkey emoji,skull emoji copy and paste,love emoji,fingers crossed emoji,emoji png,twitter emoji,crown emoji,wave emoji,sob emoji,clapping emoji,heart eyes emoji">
    <meta name="robots" content="index, follow">  
    <meta name="author" content="joson brion">
    <meta name="google-adsense-account" content="ca-pub-8740792732131678" />

    <meta property="og:site_name" content="emojimy.com" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="emojimy.com" />
    <meta property="og:title" content="Copy and Paste Emojis - emojimy.com ❤️💜 💖 💚 💛" />
    <meta property="og:description" content="emoji copy and paste ❤️ 😂 😭 🙏 😘 🥰 😍 🎉 🔥 🤗 🙄 🎂 😎 💜 💖 👀 💯 💗 💙 🙈 ❣️ 💔 💓 💚 😛 🎁 🖤 😆 😋 ✨ 😢 🤩 🙃 😒 😱 😈 😇 ✅ 🌈 💛 👊 🤬 ⚡ 💦 🌷 🌙 ⭐" />
    <meta property="og:image" content="./img/main/ee.png" />
    <meta property="og:locale" content="en_US" />
</head>
<body>
<?php include('../topBar.php');?>

        <?php include '../searchBox.php';?>

<div class="flipbar"></div>
<div class="googleAdds">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
            crossorigin="anonymous"></script>
        <!-- emojimy.com -->
        <ins class="adsbygoogle"
            style="display:block"   
            data-ad-client="ca-pub-8740792732131678"
            data-ad-slot="1167187911"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
            crossorigin="anonymous"></script>
        <!-- emojimy.com -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-8740792732131678"
            data-ad-slot="1167187911"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
</div>
<?php
    if (isset($_GET['searchResult']) OR isset($_GET['emojiID'])) {
        
    

    echo $sessionOne;
    echo $sessionTwo;
    echo $addsByGoogle;
    echo $sessionThree;

    $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
    $lastParts2 = '';
    $lastParts3 = '</div></div>';


    
    $sql = "SELECT * FROM emojidb WHERE description LIKE '%{$Search_result}%' OR category LIKE '%{$Search_result}%' OR keywords LIKE '%{$Search_result}%' LIMIT 100";
    $result_set = mysqli_query($conn, $sql);
    
    if ($result_set) {
        while ($row = mysqli_fetch_assoc($result_set)) {
            $lastParts2 .= '<a href="../searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span>' . $row['emoji'] . '</span></div></a>';
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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
     crossorigin="anonymous"></script>
<!-- emojimy.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8740792732131678"
     data-ad-slot="1167187911"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8740792732131678"
     crossorigin="anonymous"></script>
<!-- emojimy.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8740792732131678"
     data-ad-slot="1167187911"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br>

<?php include('../footer.php');?>
        <script src="../index.js"></script>
        <script src="../MasterStyle/index.js"></script>
        <script src="../MasterStyle/search.js"></script>
        <script src="../emoji.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.getElementById("currntYear").innerText = new Date().getFullYear();
            
           
        </script>


<!-- EmojiPAkaya6454@2024 -->
</body>
</html>


