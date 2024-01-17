<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmojiCanvas.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
           <div class="navBar"> 
            <div class="logo">
                 <img src="img/main/emojiFase.png" alt="hart" width="35 px"> <a href="index.html" style="text-decoration: none;">EmojiCanvas.com</a>
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
                <img src="img/main/menu-bold.png" width="30px" id="bars" alt="bars">
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

        <div class="searchArea">
            <div class="boxSerch" id="boxSerch">
                <div class="shBoxText">
                    <p class="title1" id="i">EmojiCanvas.com</p>
                    
                    <!-- <p class="title2">Explore CapCut's Vast Template Library, Thousands of Free Trending Templates Await You! Easily Create Stunning Videos and Images</p> -->
                </div>
                <div class="searchBox">
                    <form id="sharchForm" action="searchResult.php"></form>
                    <input type="text" id="searchBox" class="searchBox" placeholder="Search templates...">
                    <button id="mainSearchBox">Search</button>
                </div>
                <div class="spase1"></div>
                <div class="sh_reslt_cover">
                <div class="search_reslult_box">
                    <ul id='shList'>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
<div class="flipbar"></div>


<div class="wpapper">
            <div class="disCover">
                <div class="display1" id="display1">
                    <div class="displyBoder">
                    <div class="cppMsg"><p id="copiedMsg">Text copied to clipboard:</p></div>
                        <div class="display">
                            <button id="rightSlider" onClick="hideCppBar()"><img src="img/main/right-arrow-100.png" alt="hideBar" width="30px"></button>
                            <input type="text" id="cppBox">
                            <button onclick="copyToClipboard()" id="cppBtn">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="conBody">
        <div class="topCatBar">
                <div class="topCatBarCover">

                    <div onClick="topDisBtn(1)" title="Smiley Face Emojis"><div class="topCatItm">
                        <p data-meaning="Slightly smiling face" data-unicode="U+1F642">🙂<span>17</span></p>
                    </div></div>

                    <div onClick="topDisBtn(2)" title="Emotional Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Smiling face with hearts" data-unicode="U+1F970">🥰<span>09</span></p>
                    </div></div>

                    <div onClick="topDisBtn(3)" title="Faces with Tongue Emojis"><div class="topCatItm">
                        <p data-meaning="Yummy face" data-unicode="U+1F60B">😋<span>06</span></p>
                    </div></div>

                    <div onClick="topDisBtn(4)" title="Faces with Hands Emojis"><div class="topCatItm">
                        <p data-meaning="Hugs" data-unicode="U+1F917">🤗<span>04</span></p>
                    </div></div>                

                    <div onClick="topDisBtn(5)" title="Neutral Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Neutral face" data-unicode="U+1F610">😐<span>10</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(6)" title="Sleepy Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Sleepy face" data-unicode="U+1F62A">😪<span>05</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(7)" title="Sick Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Face with mask" data-unicode="U+1F637">😷<span>11</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(8)" title="Concerned Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Confused face" data-unicode="U+1F615">😕<span>24</span></p>
                    </div></div>

                    <div onClick="topDisBtn(9)" title="Negative Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Face with steam" data-unicode="U+1F624">😤 <span>08</span></p>
                    </div></div>

                    <div onClick="topDisBtn(10)" title="Costume Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Pile of poo" data-unicode="U+1F4A9">💩<span>08</span></p>
                    </div></div>

                    <div onClick="topDisBtn(11)" title="Faces that require more than one unicode character"><div class="topCatItm">
                        <p data-meaning="Face in clouds" data-unicode="U+1F636 U+200D U+1F32B U+FE0F">😶‍🌫️<span>22</span></p>
                    </div></div>

                    <div onClick="topDisBtn(12)" title="Cat Faces Emojis"><div class="topCatItm">
                        <p data-meaning="Grinnig cat" data-unicode="U+1F63A">😺<span>09</span></p>
                    </div></div>

                    <div onClick="topDisBtn(13)" title="Monkey Faces Emojis"><div class="topCatItm">
                        <p data-meaning="See no evil monkey" data-unicode="U+1F648">🙈<span>03</span></p>
                    </div></div>

                    <div onClick="topDisBtn(14)" title="Emotion Emojis"><div class="topCatItm">
                        <p data-meaning="Kiss" data-unicode="U+1F48B">💋<span>37</span></p>
                    </div></div>

                    <div onClick="topDisBtn(15)" title="heart"><div class="topCatItm">
                        <p data-meaning="Orange heart" data-unicode="U+1F9E1">🧡<span>21</span></p>
                    </div></div>

                    <div onClick="topDisBtn(16)" title="Hands and other Body Parts Emojis"><div class="topCatItm">
                        <p data-meaning="Waving hand" data-unicode="U+1F44B">👋<span>53</span></p>
                    </div></div>

                    <div onClick="topDisBtn(17)" title="Person Emojis"><div class="topCatItm">
                        <p data-meaning="Person" data-unicode="U+1F9D1">🧑<span>209</span></p>
                    </div></div>

                    <div onClick="topDisBtn(18)" title="Family Emojis"><div class="topCatItm">
                        <p data-meaning="Family" data-unicode="U+1F46A">👪<span>41</span></p>
                    </div></div>

                    <div onClick="topDisBtn(19)" title="Animals and Nature Emojis"><div class="topCatItm">
                        <p data-meaning="Monkey face" data-unicode="U+1F435">🐵<span>143</span></p>
                    </div></div>

                    <div onClick="topDisBtn(20)" title="Food and Drinks Emojis"><div class="topCatItm">
                        <p data-meaning="Grapes" data-unicode="U+1F347">🍇<span>131</span></p>
                  </div></div>
                   <div onClick="topDisBtn(21)" title="Travel and Places Emojis"><div class="topCatItm">
                        <p data-meaning="Globe showing Africa and Europe" data-unicode="U+1F30D">🌍<span>64</span></p>
                    </div></div>

                    <div onClick="topDisBtn(22)" title="Transport Emojis"><div class="topCatItm">
                        <p data-meaning="Delivery truck" data-unicode="U+1F69A">🚚<span>34</span></p>
                    </div></div>

                    <div onClick="topDisBtn(23)" title="Time Emojis"><div class="topCatItm">
                        <p data-meaning="Four O\'clock" data-unicode="U+1F553">🕓<span>31</span></p>
                    </div></div>

                    <div onClick="topDisBtn(24)" title="Sky and Weather Emojis"><div class="topCatItm">
                        <p data-meaning="Waning gibbous moon" data-unicode="U+1F316">🌖<span>47</span></p>
                    </div></div>

                    <div onClick="topDisBtn(25)" title="Activity Emojis"><div class="topCatItm">
                        <p data-meaning="Jack-o-lantern" data-unicode="U+1F383">🎃<span>20</span></p>
                    </div></div>


                    <div onClick="topDisBtn(26)" title="Award Medals Emojis"><div class="topCatItm">
                        <p data-meaning="Trophy" data-unicode="U+1F3C6">🏆<span>06</span></p>
                    </div></div>

                    <div onClick="topDisBtn(27)" title="Sport Emojis"><div class="topCatItm">
                        <p data-meaning="Soccer ball" data-unicode="U+26BD">⚽<span>27</span></p>
                    </div></div>

                    <div onClick="topDisBtn(28)" title="Games Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Bullseye" data-unicode="U+1F3AF">🎯<span>23</span></p>
                    </div></div>

                    <div onClick="topDisBtn(29)" title="Arts and Crafts Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Artist palette" data-unicode="U+1F3A8">🎨<span>07</span></p>
                    </div></div>

                    <div onClick="topDisBtn(30)" title="Clothing Objects Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="T-shirt" data-unicode="U+1F455">👕<span>45</span></p>
                    </div></div>

                    <div onClick="topDisBtn(31)" title="Sound Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Muted speaker" data-unicode="U+1F507">🔇<span>18</span></p>
                    </div></div>

                    <div onClick="topDisBtn(32)" title="Musical Instrument Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Trumpet" data-unicode="U+1F3BA">🎺<span>45</span></p>
                    </div></div>

                    <div onClick="topDisBtn(33)" title="Phone Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Telephone receiver" data-unicode="U+1F4DE">📞<span>6</span></p>
                    </div></div>

                    <div onClick="topDisBtn(34)" title="Computer Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Laptop" data-unicode="U+1F4BB">💻<span>6</span></p>
                    </div></div>

                    <div onClick="topDisBtn(35)" title="Light and Video Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Clapper board" data-unicode="U+1F3AC">🎬<span>14</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(36)" title="Book and Paper Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Orange books" data-unicode="U+1F4DA">📚<span>27</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(37)" title="Mail Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="E-mail" data-unicode="U+1F4E7">📧<span>12</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(38)" title="Writing Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Memo" data-unicode="U+1F4DD">📝<span>7</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(39)" title="Office Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Briefcase" data-unicode="U+1F4BC">💼<span>21</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(40)" title="Lock Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Locked" data-unicode="U+1F512">🔒<span>06</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(41)" title="Tools Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Hammer" data-unicode="U+1F528">🔨<span>25</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(42)" title="Science Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Microscope" data-unicode="U+1F52C">🔬<span>07</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(43)" title="Medical Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Pill" data-unicode="U+1F48A">💊<span>07</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(44)" title="Household Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Toilet" data-unicode="U+1F6BD">🚽<span>25</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(45)" title="Other Objects Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Cigarette" data-unicode="U+1F6AC">🚬<span>25</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(46)" title="Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Litter in bin" data-unicode="U+1F6AE">🚮<span>13</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(47)" title="Warning Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="No littering" data-unicode="U+1F6AF">🚯<span>13</span></p>
                    </div></div> 
                    
                    <div onClick="topDisBtn(48)" title="Arrow Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Right arrow" data-unicode="U+27A1">➡<span>21</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(49)" title="Religion" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Place of worship" data-unicode="U+1F6D0">🛐<span>12</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(50)" title="Zodiac" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Aries" data-unicode="U+2648">♈<span>13</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(51)" title="AV Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Fast-forward" data-unicode="U+23E9">⏩<span>24</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(52)"  title="Gender" class="mblHideTop"><div class="topCatItm">
                        
                        <p data-meaning="Male" data-unicode="U+2642">♂<span>03</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(53)" title="Math Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Divide" data-unicode="U+2797">➗<span>06</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(54)" title="Punctuation Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Red question mark" data-unicode="U+2753">❓<span>07</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(55)" title="Currency" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Heavy green dollar sign" data-unicode="U+1F4B2">💲<span>02</span></p>
                    </div></div> 

                    <div onClick="topDisBtn(56)" title="Other Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Japanese symbol for beginner" data-unicode="U+1F530">🔰<span>21</span></p>
                    </div></div>

                    <div onClick="topDisBtn(57)" title="Keycap" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="10 Keycap" data-unicode="U+1F51F">🔟<span>13</span></p>
                    </div></div>

                    <div onClick="topDisBtn(58)" title="Alphanumeric Symbols" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="CL button" data-unicode="U+1F191">🆑<span>13</span></p>
                    </div></div>

                    <div onClick="topDisBtn(59)" title="Japanese Buttons" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning='Japanese "discount" button' data-unicode="U+1F239">🈹<span>22</span></p>
                    </div></div>

                    <div onClick="topDisBtn(60)" title="Geometric Emojis" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Orange square" data-unicode="U+1F7E5">🟧<span>28</span></p>
                    </div></div>

                    <div onClick="topDisBtn(61)" title="Flags" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="Triangular flag" data-unicode="U+1F6A9">🚩<span>08</span></p>
                    </div></div>

                    <div onClick="topDisBtn(62)" title="Country Flags" class="mblHideTop"><div class="topCatItm">
                        <p data-meaning="United States flag" data-unicode="U+1F1FA U+1F1F8">🇬🇧<span>195</span></p>
                    </div></div>                     
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="lodMOreCover flex"><div class="loardMor"><button id="topSeeMor">see more</button></div></div>
        <div class="mainCatSlt">
            <div class="mnSltBttn">
                <div class="mainBtnCover flex">
                    <button onClick="seondBTN(1)" class="sendBarBtns active2"><p data-meaning="Smiling face" data-unicode="U+U+1F600">😀</p></button>
                    <button onClick="seondBTN(2)" class="sendBarBtns"><p data-meaning="Lion" data-unicode="U+1F981">🦁</p></button>
                    <button onClick="seondBTN(3)" class="sendBarBtns"><p data-meaning="Smiling face" data-unicode="U+1F9C1">🧁</p></button>
                    <button onClick="seondBTN(4)" class="sendBarBtns"><p data-meaning="Soccer ball" data-unicode="U+26BD">⚽</p></button>
                    <button onClick="seondBTN(5)" class="sendBarBtns"><p data-meaning="Delivery truck" data-unicode="U+1F69A">🚚</p></button>
                    <button onClick="seondBTN(6)" class="sendBarBtns"><p data-meaning="Clapper board" data-unicode="U+1F3AC">🎬</p></button>
                    <button onClick="seondBTN(7)" class="sendBarBtns"><p data-meaning="Input Latin uppercas" data-unicode="U+1F520U+1F520">🔠</p></button>
                    <button onClick="seondBTN(8)" class="sendBarBtns"><p data-meaning="Triangular flag" data-unicode="U+1F6A9">🚩</p></button>
                </div>
            </div>
        </div>
    <div class="wapper2">
    <div class="keyBordCover">
             <!-- <h3>happy face</h3> -->
             <h3 id="keybdHed">Smysl sdd sdkla</h3>
                <div class="keboard" id="keboard"> 
                </div>
        </div>
    </div>

    <div class="bannerAddCover">
        <div class="bannerBox">
            <div class="banner"><p>responsive ads</p></div>
        </div>
    </div>

    <div class="linkBoxCover">

        <div class="linkBackCover flex">
            <div class="linkBox">
                <div class="lnBox">
                    <span><img class="lazy" src="img/main/1.png" alt="Emoji meaning" width="150px" loading="lazy" /></span>
                    <a href="#"> <button>Emoji meanings</button></a>
                </div>
            </div>

            <div class="linkBox">
                <div class="lnBox">
                <span><img class="lazy" src="img/main/2.png" alt="Emoji meaning" width="150px"></span>
                    <a href="#"> <button>Emoji PNG</button></a>
                </div>
            </div>

            <div class="linkBox">
                <div class="lnBox">
                <span><img class="lazy" src="img/main/3.png" alt="Emoji meaning" width="150px"></span>
                    <a href="E"> <button>All emojis</button></a>
                </div>
            </div>
        </div>

    </div>

    <div class="article">
       <div class="articleCover"> 
        <div class="articleBox">
            <p class="atlhddn">Introduction to Emojis</p>
            <p>In the digital age, emojis have become an integral part of online communication. These small pictorial symbols, originally limited to simple smileys, have evolved into a diverse set of expressive icons that convey a wide range of emotions and concepts.</p>

        </div>

        <div class="articleBox">
            <p class="atlhddn">The Evolution of Emojis</p>
            <p>From their humble beginnings as basic smileys, emojis have undergone a remarkable transformation. Today, users have access to an extensive library of symbols, including animals, food, and various objects, allowing for more nuanced expression in digital conversations.</p>
    
        </div>

        <div class="articleBox">
            <p class="atlhddn">Cultural Impact of Emojis</p>
            <p>Emojis have transcended language barriers, becoming a universal language in themselves. The interpretation of emojis varies across cultures, adding a layer of complexity to their usage. Understanding the global impact of emojis is essential for effective communication.</p>

    
        </div>

        <div class="articleBox">
            <p class="atlhddn">The Science Behind Emojis</p>
            <p>Research indicates that emojis play a significant role in conveying emotions in written communication. The visual nature of emojis taps into the emotional and psychological aspects of human interaction, making texts more relatable and engaging.</p>

        </div>

        <div class="articleBox">
            <p class="atlhddn">Emoji Trends in Social Media</p>
            <p>Different social media platforms have distinct trends when it comes to emoji usage. Analyzing these trends can provide insights into the preferences of users on platforms like Twitter, Instagram, and Facebook.</p>
            
        </div>
       </div> 
    </div>

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
        <script src="emoji.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.getElementById("currntYear").innerText = new Date().getFullYear();
            
            const topDisVar = [Smiley_Face_Emojis,Emotional_Faces_Emojis,Faces_with_Tongue_Emojis,Faces_with_Hands_Emojis,Neutral_Faces_Emojis,Sleepy_Faces_Emojis,Sick_Faces_Emojis,Concerned_Faces_Emojis,Negative_Faces_Emojis,Costume_Faces_Emojis,Complex_Faces_Emojis,Cat_Faces_Emojis,Monkey_Faces_Emojis,Emotion_Emojis,harts_emojis,Body_Parts_Emojis,Person_Emojis,Family_Emojis,Animals_and_Nature_Emojis,Food_and_Drinks_Emojis,Travel_and_Places_Emojis,Transport_Emojis,Time_Emojis,Sky_and_Weather_Emojis,Activity_Emojis,Award_Medals_Emojis,Sport_Emojis,Games_Emojis,Arts_and_Crafts_Emojis,Clothing_Objects_Emojis,Sound_Emojis,Musical_Instrument_Emojis,Phone_Emojis,Computer_Emojis,Light_and_Video_Emojis,Book_and_Paper_Emojis,Mail_Emojis,Writing_Emojis,Office_Emojis,Lock_Emojis,Tools_Emojis,Science_Emojis,Medical_Emojis,Household_Emojis,Other_Objects_Emojis,Symbols_Emojis,Warning_Emojis,Arrow_Emojis,Religion_Emojis,Zodiac_Emojis,AV_Symbols_Emojis,Gender_Emojis,Math_Symbols_Emojis,Punctuation_Symbols_Emojis,Currency_Emojis,Other_Symbols_Emojis,Keycap_Emojis,Alphanumeric_Symbols_Emojis,Japanese_Buttons_Emojis,Geometric_Emojis,Flags_Emojis,CountryFlags_Emojis];
            const topDisVarStr = ["Smiley Face Emojis","Emotional Faces Emojis","Faces with Tongue Emojis","Faces with Hands Emojis","Neutral Faces Emojis","Sleepy Faces Emojis","Sick Faces Emojis","Concerned Faces Emojis","Negative Faces Emojis","Costume Faces Emojis","Complex Faces Emojis","Cat Faces Emojis","Monkey Faces Emojis","Emotion Emojis","harts emojis","Body Parts Emojis","Person Emojis","Family Emojis","Animals and Nature Emojis","Food and Drinks Emojis","Travel and Places Emojis","Transport Emojis","Time Emojis","Sky and Weather Emojis","Activity Emojis","Award Medals Emojis","Sport Emojis","Games Emojis","Arts and Crafts Emojis","Clothing Objects Emojis","Sound Emojis","Musical Instrument Emojis","Phone Emojis","Computer Emojis","Light and Video Emojis","Book and Paper Emojis","Mail Emojis","Writing Emojis","Office Emojis","Lock Emojis","Tools Emojis","Science Emojis","Medical Emojis","Household Emojis","Other Objects Emojis","Symbols Emojis","Warning Emojis","Arrow Emojis","Religion Emojis","Zodiac Emojis","AV Symbols Emojis","Gender Emojis","Math Symbols Emojis","Punctuation Symbols Emojis","Currency Emojis","Other Symbols Emojis","Keycap Emojis","Alphanumeric Symbols Emojis","Japanese Buttons Emojis","Geometric Emojis","Flags Emojis","CountryFlags Emojis"];


            // fist user screeen
                
            

            function topDisBtn(val){
                // if seconbar is on active class ths is for remov it
                    var sdbtn = document.getElementsByClassName("sendBarBtns");
                    var sdbtnArr =Array.from(sdbtn);
                    sdbtnArr.forEach(btn => {
                        if(btn.classList.contains("active2")){
                            btn.classList.remove("active2");
                        }
                    });
                
                const keybdHed = document.getElementById("keybdHed");
                keybdHed.innerHTML = topDisVarStr[val-1];
                //  document.getElementById("keboard").innerHTML = Smiley_Face_Emojis[];
                var allCategoryItems = document.querySelectorAll('.topCatItm');
                btnConForActv =1;
                allCategoryItems.forEach(function(itm) {
                        try{

                            itm.classList.remove("active");
                            if(btnConForActv === val){
                                itm.classList.add("active");
                            } 
                            btnConForActv++;

                            
                        }catch (error) {

                            console.error("An error occurred:", error.message);
                        }
                      
                });
                // console.log(topDisVar[val]);
                const keboard =  document.getElementById("keboard");
                    keboard.innerText = '';
                for(let a =0;a<topDisVar[val-1].length;a++){
                // console.log(Smiley_Face_Emojis[0].emoji); 
                    // document.getElementById("keboard").innerHTML += '<p data-meaning="Slightly smiling face" data-unicode="U+1F642" onClick="addToCpx(this)">'+topDisVar[val-1][a].emoji+'</p>';

                    var p =document.createElement('p');
                    p.setAttribute('data-meaning',topDisVar[val-1][a].description);
                    p.setAttribute('data-unicode',topDisVar[val-1][a].unicode);
                    p.setAttribute('onClick', 'addToCpx(this)');
                    p.textContent = topDisVar[val-1][a].emoji;
                    keboard.appendChild(p);
                }

                // this is for auto screll

                const duration = 800;
                const offset = 20; // Adjust as needed

                const section3 = document.getElementById('keboard');
                const section3Position = section3.offsetTop - offset;

                window.scrollTo({
                    top: section3Position,
                    behavior: 'smooth'
                });
                
            }

            for(let i =0;i<topDisVar.length;i++){
                // console.log(i);
            }


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

            //this is for coppy bar hide
            function hideCppBar(){
                var chBx =document.querySelector(".wpapper");
                if(chBx.classList.contains("barShow")){
                    chBx.classList.remove("barShow");
                    document.getElementById("cppBox").value = '';

                }
            }

            // =============  send Filter ====================
               
            var secondbtns = {
                btn1:{
                    title:"Smileys & people",
                    listNames:[Smiley_Face_Emojis,Emotional_Faces_Emojis,Faces_with_Tongue_Emojis,Faces_with_Hands_Emojis,Neutral_Faces_Emojis,Sleepy_Faces_Emojis,Sick_Faces_Emojis,Concerned_Faces_Emojis,Negative_Faces_Emojis,Costume_Faces_Emojis,Complex_Faces_Emojis,Cat_Faces_Emojis,Monkey_Faces_Emojis,Body_Parts_Emojis,Person_Emojis,Family_Emojis,Clothing_Objects_Emojis]
                },
                btn2:{
                    title:"Animals & nature",
                    listNames:[Animals_and_Nature_Emojis,Sky_and_Weather_Emojis]
                },
                btn3:{
                    title:"Food & drink",
                    listNames:[Food_and_Drinks_Emojis,]
                },
                btn4:{
                    title:"Activity",
                    listNames:[Sport_Emojis,Games_Emojis,Musical_Instrument_Emojis,Award_Medals_Emojis,Arts_and_Crafts_Emojis,Activity_Emojis]
                },
                btn5:{
                    title:"Travel & places",
                    listNames:[Transport_Emojis,Travel_and_Places_Emojis,Activity_Emojis]
                },
                btn6:{
                    title:"Objects",
                    listNames:[Phone_Emojis,Computer_Emojis,Light_and_Video_Emojis,Book_and_Paper_Emojis,Mail_Emojis,Writing_Emojis,Office_Emojis,Tools_Emojis,Science_Emojis,Medical_Emojis,Household_Emojis,Other_Objects_Emojis,Lock_Emojis]

                },
                
                btn7:{
                    title:"Symbols",
                    listNames:[Emotion_Emojis,Symbols_Emojis,Warning_Emojis,Arrow_Emojis,Religion_Emojis,Zodiac_Emojis,AV_Symbols_Emojis,Gender_Emojis,Math_Symbols_Emojis,Punctuation_Symbols_Emojis,Currency_Emojis,Other_Symbols_Emojis,Keycap_Emojis,Alphanumeric_Symbols_Emojis,Japanese_Buttons_Emojis,Geometric_Emojis,Sound_Emojis,Time_Emojis]

                },
                btn8:{
                    title:"flags",
                    listNames:[CountryFlags_Emojis,Flags_Emojis]
                }
                
                
            };
            seondBTN(1);
            function seondBTN(val) {
                // alert(secondbtns.btn1.listNames.length);
                var topButtons =document.getElementsByClassName("topCatItm");
                var topButtonsArray = Array.from(topButtons);
                topButtonsArray.forEach(button => {
                    if(button.classList.contains('active')){
                        button.classList.remove('active');
                    }
                });
                //remove activeclass second bar tooo
                var secondButtons =document.getElementsByClassName("topCatItm");
                var secondButtonsArray = Array.from(secondButtons);
                secondButtonsArray.forEach(button => {
                    if(button.classList.contains('active')){
                        button.classList.remove('active');
                    }
                });


                const keboard =  document.getElementById("keboard");
                keboard.innerText = '';
                switch (val) {
                    case 1:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn1.title;
                        //  console.log(secondbtns.btn1.listNames[0]);
                        for(let z =0;z<secondbtns.btn1.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn1.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning', (secondbtns.btn1.listNames[z][i].meaning === undefined) ? secondbtns.btn1.listNames[z][i].description : secondbtns.btn1.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn1.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn1.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }
                        break;
                    case 2:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn2.title;  
                        for(let z =0;z<secondbtns.btn2.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn2.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn2.listNames[z][i].meaning === undefined) ? secondbtns.btn2.listNames[z][i].description : secondbtns.btn2.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn2.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn2.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;
                    case 3:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn3.title;
                        for(let z =0;z<secondbtns.btn3.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn3.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn3.listNames[z][i].meaning === undefined) ? secondbtns.btn3.listNames[z][i].description : secondbtns.btn3.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn3.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn3.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;     
                    case 4:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn4.title;
                        for(let z =0;z<secondbtns.btn4.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn4.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn4.listNames[z][i].meaning === undefined) ? secondbtns.btn4.listNames[z][i].description : secondbtns.btn4.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn4.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn4.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;
                    case 5:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn5.title;
                        for(let z =0;z<secondbtns.btn5.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn5.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn5.listNames[z][i].meaning === undefined) ? secondbtns.btn5.listNames[z][i].description : secondbtns.btn5.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn5.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn5.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;
                    case 6:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn6.title;
                        for(let z =0;z<secondbtns.btn6.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn6.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn6.listNames[z][i].meaning === undefined) ? secondbtns.btn6.listNames[z][i].description : secondbtns.btn6.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn6.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn6.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;
                    case 7:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn7.title;
                        for(let z =0;z<secondbtns.btn7.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn7.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn7.listNames[z][i].meaning === undefined) ? secondbtns.btn7.listNames[z][i].description : secondbtns.btn7.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn7.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn7.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;
                    case 8:
                        activeSendBar(val);
                        keybdHed.innerText = secondbtns.btn8.title; 
                        for(let z =0;z<secondbtns.btn8.listNames.length;z++){

                            for(let i = 0; i <secondbtns.btn8.listNames[z].length;i++){
                                // console.log(secondbtns.btn1.listNames[0][0].emoji);    
                                var p =document.createElement('p');
                                p.setAttribute('data-meaning',(secondbtns.btn8.listNames[z][i].meaning === undefined) ? secondbtns.btn8.listNames[z][i].description : secondbtns.btn8.listNames[z][i].meaning);
                                p.setAttribute('data-unicode',secondbtns.btn8.listNames[z][i].unicode);
                                p.setAttribute('onClick', 'addToCpx(this)');
                                p.textContent = secondbtns.btn8.listNames[z][i].emoji;
                                keboard.appendChild(p);
                            }
                        }  
                        break;                     
                    default:
                        // Handle the default case or leave it empty if not needed
                        break;
                }


                
                // switch (val) {
                //     case 1:
                //         keybdHed.innerText = secondbtns.btn1.title;
                //         break;
                        

                // }
            }

            // top catagory seemore buton process
            
            const topSeeMor = document.getElementById("topSeeMor");
            let bt = false;

            topSeeMor.addEventListener("click", function () {
                if (bt === false) {
                    var elements = document.querySelectorAll(".mblHideTop");
                    elements.forEach(function (element) {
                        element.style.display = 'block';
                        topSeeMor.innerHTML = 'see less';
                    });
                    bt = true;
                } else {
                    var elements = document.querySelectorAll(".mblHideTop");
                    elements.forEach(function (element) {
                        element.style.display = 'none';
                        topSeeMor.innerHTML = 'see more';
                    });
                    bt = false
                }
            });
            function scrollToSection() {
        // Adjust the duration (in milliseconds) and offset as needed
        const duration = 800;
        const offset = 20; // Adjust as needed

        const section3 = document.getElementById('section3');
        const section3Position = section3.offsetTop - offset;

        window.scrollTo({
            top: section3Position,
            behavior: 'smooth'
        });
    }


    // second class active bar process

    function activeSendBar(val){
        var sdbtn = document.getElementsByClassName("sendBarBtns");
        var sdbtnArr =Array.from(sdbtn);
        sdbtnArr.forEach(btn => {
            if(btn.classList.contains("active2")){
                btn.classList.remove("active2");
            }
        });
        sdbtn[val-1].classList.add("active2");
    }
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
        </script>


<!-- EmojiPAkaya6454@2024 -->
</body>
</html>




