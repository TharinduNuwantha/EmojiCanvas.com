<?php
include 'inc/connection.php';
$sessionOne = '';   
$sessionTwo = '';
$sessionThre = '';
$sessionThree = '';
$row ='';
$rowCount = 0;
$addsByGoogle ='';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy and Paste Emojis - emojimy.com ❤️💜 💖 💚 💛</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./MasterStyle/style.css">
    <link rel="stylesheet" href="./emojiCategories/redHartTest/style.css">
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
<?php include('topBar.php');?>

        <?php include 'searchBox.php';?>

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Smileys & Emotion</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Smileys & Emotion'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

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

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>People & Body</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'People & Body'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

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

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Animals & Nature</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Animals & Nature'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

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

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Food & Drink</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Food & Drink'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

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

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Travel & Places</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Travel & Places'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Activities</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Activities'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>
<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Objects</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Objects'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Symbols</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Symbols'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

<div class="emojiMainBar">
    <div class="emojiBar">
        <div class="headinAllimoji">
            <h1>Flags</h1>
        </div>
            <?php
                $lastParts1 = '<div class="seconRow"><div class="secondRowCon">';
                $lastParts2 = '';
                $lastParts3 = '</div></div>';
                
                $sql = "SELECT * FROM emojidb WHERE category = 'Flags'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        $lastParts2 .= '<a href="searchEmoji.php?emojiID=' . $row['id'] . '"><div class="senBox"><span title="' . $row['description']. ' emoji'.'">' . $row['emoji'] . '</span></div></a>';
                    }
                }


                echo $lastParts1;
                echo $lastParts2;
                echo $lastParts3;
        ?>
    </div>
</div>

<br><br>

<?php include('footer.php');?>
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




