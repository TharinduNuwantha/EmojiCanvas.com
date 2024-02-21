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
   <style>
    .seconRow .secondRowCon p{
        font-size: 33px;
        cursor: pointer;
        padding: 5px;
        /* background-color: #ffffff;   */
        margin: 5px;
        border-radius: 10px;
        border: 1px solid rgb(192, 182, 182);
}
   </style>
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

        <div class="wpapper">
            <div class="disCover">
                <div class="display1" id="display1">
                    <div class="displyBoder">
                    <div class="cppMsg"><p id="copiedMsg">Text copied to clipboard:</p></div>
                        <div class="display">
                            <button id="rightSlider" onClick="hideCppBar()"><img src="img/main/right-arrow-100.png" alt="hideBar" width="30px"></button>
                            <input type="text" id="cppBox">
                            <button id="clearSearchBox" class="clearSearchBox" onclick="clearSearchBox()">CL</button>
                            <button onclick="copyToClipboard()" id="cppBtn">Copy</button>
                        </div>
                    </div>
                </div>
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

</div>


            <div class="emojiMainBar">
            <div class="emojiBar">

            <div class="seconRow">
                <div class="secondRowCon">

                </div>
            </div>

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
            
            const secondRowCon = document.querySelector(".secondRowCon");    

            // this is imoji to text box
            var cppBox = document.getElementById("cppBox"); 
            function addToCpx(element) {
                 // clear display
                cppBox.value += element.innerText;
                var chBx =document.querySelector(".wpapper");
                if(!chBx.classList.contains("barShow")){
                    chBx.classList.add("barShow");
                }

            }

            topImojis.forEach(element => {
                var p = document.createElement('p');
                p.setAttribute('data-meaning', (element.meaning === undefined) ? element.description : element.meaning);
                p.setAttribute('data-unicode',element.unicode);
                p.setAttribute('onClick', 'addToCpx(this)');
                p.textContent = element.emoji;
               // console.log(element.emoji); // Changed from console.log(a);
                secondRowCon.appendChild(p);
            });

            const shBox = document.getElementById("display1");

function shBoxSlider() {
    var shBox = document.querySelector('.display1');

    // Move the element to the left
    shBox.style.left = "0%";

    // Scroll the page to make the element visible
    shBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

shBoxSlider();
function copyToClipboard(){
    var inputElement = document.getElementById("cppBox");
    inputElement.select();
    inputElement.setSelectionRange(0, 99999);

    document.execCommand('copy');
    // alert("Text copied to clipboard: " + inputElement.value);
    const copiedMsg = document.getElementById("copiedMsg");
    copiedMsg.style.display = 'block';

    const cppBtn =document.getElementById("cppBtn");
    cppBtn.style.background = 'rgb(0, 72, 0)';
    cppBtn.style.color = 'white';
    timeOutClipBoard();

}

function timeOutClipBoard(){
   const copiedMsg = document.getElementById("copiedMsg");
   const cppBtn =document.getElementById("cppBtn");
   setTimeout(function(){
    copiedMsg.style.display = 'none';
    
    cppBtn.style.background = 'rgb(255, 226, 39)';
    cppBtn.style.color = '#000000';

    // text box slid 

    setTimeout(function(){
        hideCppBar();
    },1000)

   },2000);
}

            //this is for coppy bar hide
            function hideCppBar(){
                var chBx =document.querySelector(".wpapper");
                if(chBx.classList.contains("barShow")){
                    chBx.classList.remove("barShow");
                    document.getElementById("cppBox").value = '';

                }
            }
        </script>


<!-- EmojiPAkaya6454@2024 --> 
</body>
</html>




