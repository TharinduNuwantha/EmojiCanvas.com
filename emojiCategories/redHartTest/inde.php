<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmojiCanvas.com</title>
    <!-- In index2.html, navigate up two levels to the root folder and then down to style.css -->
<link rel="stylesheet" type="text/css" href="../../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
           <div class="navBar"> 
            <div class="logo">
                 <img src="../../img/main/emojiFase.png" alt="hart" width="35 px"> <a href="/EmojiCanvas.com/" style="text-decoration: none;">EmojiCanvas.com</a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.html" class="navLink-active">Home</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#" >All Templates</a></li>
                </ul>
            </div>
            <div class="menubars hide">
                <img src="../../img/main/menu-bold.png" width="30px" id="bars" alt="bars">
            </div>
          </div> 
        </nav>

        <!-- ================= Mobile Nav Start =================== -->     
        <div class="mobileNav" id="mobileNav">
            <div class="mbNavItm">
                <ul>
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#" >All Templates</a></li>
                    <li><a href="#" >New Templates</a></li>
                    <li><a href="#" >Popular Templates</a></li>
                    <li><a href="#" >Business Templates</a></li>
                </ul>

                <div class="mb-logo">
                EmojiCanvas.com
                </div>
            </div>
        </div>
        <!-- ================= Mobile Nav END ===================== -->

    <?php include '../../searchBox.php';?>

<div class="flipbar"></div>


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

        

    <div class="mainWapper">
        
        <div class="mainContainer">
        <br>    
        <div class="line"></div>
        <br><br>
            <div class="imojiBox">
                <div class="imojiMdBox">
                    <div class="mainImoj">
                        
                        <span class="imjSpan">👨‍👧‍👧</span>
                    </div>
                    <div class="buttonROw"><button id="btnCpp">copy</button></div>
                </div>
                
            </div>
            <p class="copiedMsg hide" id="copiedMsg">Emoji successfully copied! 🎉</p>
            <div class="description">
            <p>
  <h1>😦 Frowning Face with Open Mouth</h1>
  <h2>A Symbol of Shock, Surprise, and Disbelief</h2>

  <p>
  The 😦 emoji depicts a face with its mouth hanging wide open. This emoji often conveys various emotions, such as shock, surprise, disbelief, and astonishment.
  </p>

  <h2>Diverse Usage:</h2>

  <ul>
    <li><b>Shock and Surprise:</b> Expressing sudden astonishment or surprise at unexpected news or events.</li>
    <li><b>Disbelief and Skepticism:</b> Indicating skepticism or disbelief towards a statement or situation.</li>
    <li><b>Embarrassment:</b> Showing feelings of embarrassment, shame, or awkwardness.</li>
    <li><b>Awe and Wonder:</b> Conveying feelings of awe and wonder, especially when witnessing extraordinary or beautiful things.</li>
  </ul>

  <h2>A Narrative:</h2>
  <p>
  In a bustling city, Sarah strolls through a vibrant park. Suddenly, she stumbles upon a magnificent display of cherry blossoms in full bloom. The breathtaking sight leaves her in awe, and she lets out an audible gasp. She captures the moment with her camera, adding a caption with the 😦 emoji to express her wonder and amazement.
  </p>
</p>

</div><br>
<div class="line"></div>
        </div>
    </div>    
     
    <div class="seconRow">
        <div class="secondRowCon">
            <a href="#"><div class="senBox">👨‍👧‍👧</div></a>
            <a href="#"><div class="senBox">👨‍👧‍👧</div></a>
            <a href="#"><div class="senBox">👨‍👧‍👧</div></a>
            <a href="#"><div class="senBox">👨‍👧‍👧</div></a>
            <a href="#"><div class="senBox">👨‍👧‍👧</div></a>
        </div>
    </div>
    <br><br><br>

    <div class="dtlTable">
        <div class="tblCanves">
            
            <dl>
                <dt>Emoji</dt>
                <dd>😳</dd>
            </dl>
            <dl>
                <dt>Description</dt>
                <dd>flushed face</dd>
            </dl>
            <dl>
                <dt>Category</dt>
                <dd>Smileys & Emotion</dd>
            </dl>
            <dl>
                <dt>Subcategory</dt>
                <dd>pleading_face</dd>
            </dl>
            <dl>
                <dt>Unicode Version</dt>
                <dd>6.0</dd>
            </dl>
            <dl>
                <dt>IOS Version</dt>
                <dd>6.0</dd>
            </dl>
        </div>
    </div>
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
        <script src="../../index.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.getElementById("currntYear").innerText = new Date().getFullYear();
            

                
            

        </script>



</body>
</html>




