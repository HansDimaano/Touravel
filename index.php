
<!-- 
    ~~~~~~ THIS IS TOURAVEL HOME PAGE ~~~~~~~
    
    This was needed to be named "index.php".

    So that if users typed "localhost/Touravel",
    this page would appear automatically!

-->



<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include 'data/codes.php'; // include the codes.php data

?>



<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Home Page CSS -->
    <link rel="stylesheet" href="css/HomePage.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_home ?>
    
    <!-- entitle the page to Touravel - Home -->
    <title>Touravel - Home</title>

</head>
<body>

    <!-- (from codes.php) include the header code for home page -->
    <?php echo $header_home ?>

    <!-- BG IMAGE PAGES -->
    <div class="page_wrapper">
        <div class="slide_container">


            <!-- ABU DHABI PAGE (active page initially) -->
            <div class="page active">

                <!-- green gloo designs -->
                <img class="topright_dsgn abudhabi" id="tr_auh" src="images/topright_design.png" />
                <img class="botleft_dsgn abudhabi" id="bl_auh" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/abu dhabi.gif" />
                </div>

                <!-- abu dhabi description -->
                <div class="text_container active">
                    <h3>Abu Dhabi</h3>
                    <p>
                        Abu Dhabi includes 80 percent of the United Arab Emirates, stretching from the Arabian Gulf coast to
                        the cultural center of Al Ain and the spectacular desert environment of the Al Dhafra Region. The emirate has
                        something for every tourist, with its natural islands and luxurious resorts, changing sand dunes and calm oasis.
                    </p>
                    <a href="pages/AbuDhabi.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!-- DUBAI PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn dubai" id="tr_dxb" src="images/topright_design.png" />
                <img class="botleft_dsgn dubai" id="bl_dxb" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/dubai.gif" />
                </div>

                <!-- dubai description -->
                <div class="text_container">
                    <h3>Dubai</h3>
                    <p>
                        Dubai has quickly become one of the world's most popular tourist destinations, owing to its international
                        reputation as a thriving center of international trade and innovation. Only in Dubai can you see and climb the
                        world's tallest freestanding construction (the Burj Khalifa), shop in luxury designer malls and historic trading
                        souks, and eat feasts inspired by global flavors while sleeping in a seven-star hotel!
                    </p>
                    <a href="pages/Dubai.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!-- SHARJAH PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn sharjah" id="tr_shj" src="images/topright_design.png" />
                <img class="botleft_dsgn sharjah" id="bl_shj" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/sharjah.gif" />
                </div>

                <!-- sharjah description -->
                <div class="text_container">
                    <h3>Sharjah</h3>
                    <p>
                        Sharjah is known for its dedication to art, culture, and historical preservation. It was named the Cultural
                        Capital of the Arab World by UNESCO in 1998. The city has risen to prominence as a major educational center.
                        It also has various museums, parks, an aquarium, and an Arabian animal center, as well as a variety of modern
                        amenities for guests.
                    </p>
                    <a href="pages/Sharjah.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!--AJMAN PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn ajman" id="tr_ajm" src="images/topright_design.png" />
                <img class="botleft_dsgn ajman" id="bl_ajm" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/ajman.gif" />
                </div>

                <!-- ajman description -->
                <div class="text_container">
                    <h3>Ajman</h3>
                    <p>
                        Ajman is the smallest of the seven emirates, but it is noted for its picturesque beauty and wonderful beaches.
                        It is also a developing economy with a diverse range of tourist attractions including museums, beaches, forts,
                        and retail malls.
                    </p>
                    <a href="pages/Ajman.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!-- UMM AL QUWAIN PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn uaq" id="tr_uaq" src="images/topright_design.png" />
                <img class="botleft_dsgn uaq" id="bl_uaq" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/umm al quwain.gif" />
                </div>

                <!-- umm al quwain description -->
                <div class="text_container">
                    <h3>Umm Al Quwain</h3>
                    <p>
                        Umm Al Quwain is the UAE's second smallest and least populous emirate. It covers an area of about 720 square
                        kilometers or about 1% of the UAE's total territory. Umm Al Quwain had a total population of 49,159 people
                        according to the December 2005 census.
                    </p>
                    <a href="pages/UmmAlQuwain.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!-- RAS AL-KHAIMAH PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn rak" id="tr_rak" src="images/topright_design.png" />
                <img class="botleft_dsgn rak" id="bl_rak" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/ras al-khaimah.gif" />
                </div>

                <!-- ras al-khaimah description -->
                <div class="text_container">
                    <h3>Ras Al-Khaimah</h3>
                    <p>
                        With over 7,000 years of fascinating history and culture, Ras Al Khaimah is the perfect getaway from everyday life.
                        Offering magnificent landscapes, breathtaking coastlines, and rich, terracotta desert planes, the emirate has firmly
                        established itself as one of the most authentic destinations in the Middle East.
                    </p>
                    <a href="pages/RasAlKhaimah.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>



            <!-- FUJAIRAH PAGE -->
            <div class="page">

                <!-- green gloo designs -->
                <img class="topright_dsgn fujairah" id="tr_fuj" src="images/topright_design.png" />
                <img class="botleft_dsgn fujairah" id="bl_fuj" src="images/bottomleft_design.png" />

                <!-- bg image -->
                <div class="bg_img_container">
                    <img src="images/fujairah.gif" />
                </div>

                <!-- fujairah description -->
                <div class="text_container">
                    <h3>Fujairah</h3>
                    <p>
                        The Emirate of Fujairah encompasses a large portion of the UAE's eastern coast as well as the Hajar Mountain region.
                        Its primary hub is Fujairah City, a modern industrial town with few tourist attractions of its own.
                        Fujairah has enough to offer outside of Fujairah's grid pattern of high-rise office complexes.
                    </p>
                    <a href="pages/Fujairah.php">Learn More</a> <!-- learn more button -->
                </div>
            </div>
        </div>
    </div>

    <!-- LEFT AND RIGHT ARROW BUTTONS FOR NAVIGATION -->
    <button class="left_arw_btn"><</button>
    <button class="right_arw_btn">></button>

    <!-- DOT NAVIGATOR (found at the bottom of screeen, with bus) -->
    <div class="navigator"></div>



    <!-- Link the Header and Footer javascript -->
    <script src="javascript/Header_and_Footer_Script.js"></script>

    <!-- Link the BG image slider javascript -->
    <script src="javascript/BG_Img_Slider.js"></script>

</body>
</html>
