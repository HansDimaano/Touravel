
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Emirates Information Pages CSS -->
    <link rel="stylesheet" href="../css/EmiratesInformationPages.css" />

    <!-- link the swiper CSS from swiperjs.com (for swiper) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Ajman -->
    <title>Touravel - Ajman</title>

</head>
<body>
    <?php echo $header_general ?>

    <!-- AJMAN TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/ajman_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>AJMAN</h1>
            <p>
                Ajman is the smallest of the seven emirates, but it is noted for its picturesque beauty and wonderful beaches. It is also a developing economy with a 
                diverse range of tourist attractions including museums, beaches, forts, and retail malls.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115329.73436307593!2d55.45591238440039!3d25.402996310906616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5764dd8fbe79%3A0xcda090de6445a819!2sAjman!5e0!3m2!1sen!2sae!4v1652025621422!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- 

        NOTE: 

        - For every section, it has a slanted bg div for aesthetics.

        - Used inline styling for rotating elements and z-index.
    
    -->


    <!-- SHEIKH SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg dark" style="transform: rotate(-3.75deg); z-index: 2;">

            <!-- Sheikh Biography -->
            <p class="sheikh_bio">
                His Highness Sheikh Humaid bin Rashid Al Nuaimi (born in 1931) is the Ruler of the Emirate of Ajman and a member of the UAE Supreme Council. He is the 
                10th Ruler of Ajman.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_alnuaimi.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Humaid bin Rashid Al Nuaimi III</h1>

                <!-- Sheikh Quote -->
                <p>
                    " The Emirate of Ajman is witnessing continuous developments in all economic and social aspects, and we continue planning to drive in and motivate 
                    investments and make further progress in every field. "
                </p>
            </div>
        </div>
    </section>



    <!-- TOP 3 TOURIST SPOTS SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg light" style="transform: rotate(6.87deg); z-index: 4;">

            <!-- Top 3 Tourist Spots Container -->
            <div class="top3_touristspots">

                <!-- Top 3 Tourist Spots text -->
                <h3>TOP</h3>
                <h1>3</h1>
                <p>TOURIST SPOTS IN AJMAN</p>
            </div>
        </div>
        <div style="height: 750px; background-color: #428C74; "></div>
    </section>



    <!-- TOURIST SPOT NO.1 SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg dark" style="transform: rotate(6.87deg); z-index: 6;"></div>

        <!-- Tourist Spot Container -->
        <div class="tourist_spot reveal left" style=" z-index: 7;">

            <!-- Tourist Spot Image -->
            <img src="../images/ajm_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Al Zorah natural reserve Ajman is located in the coastal suburb of Ajman. It's a beautiful and vibrant ecosystem spread across one million square 
                    meters of lively Al Zorah mangrove, sandy lagoons, beaches, and tidal creeks.
                </p>
                <a>CHECK OUT</a> <!-- Check Out Button -->
            </div>
        </div>
    </section>



    <!-- TOURIST SPOT NO.2 SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg light" style="transform: rotate(-6.03deg); z-index: 8;"></div>

        <!-- Tourist Spot Container -->
        <div class="tourist_spot reveal right" style=" z-index: 9;">

            <!-- Tourist Spot Image -->
            <img src="../images/ajm_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    The 18th-century fortress that was once Ajman's first line of defense now houses the emirate's museum. The ethnographical exhibit gallery here focus 
                    on the traditional local lifestyle, with dioramas of typical day-to-day Emirati life before the oil boom.
                </p>
                <a>CHECK OUT</a> <!-- Check Out Button -->
            </div>
        </div>
    </section>



    <!-- TOURIST SPOT NO.3 SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg dark" style="transform: rotate(6.87deg); z-index: 10;"></div>

        <!-- Tourist Spot Container -->
        <div class="tourist_spot reveal left" style=" z-index: 11;">

            <!-- Tourist Spot Image -->
            <img src="../images/ajm_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    For centuries, wooden dhows have played a significant role in trade and commerce across the Arab world. Before the seas were full of the modern 
                    merchant ships we encounter today, dhows were the primary modes of transport and trading in the region. In this post, we will talk about the Ajman 
                    Dhow Building Yard and glance at the rich history and significance of the vessel in UAE.
                </p>
                <a>CHECK OUT</a> <!-- Check Out Button -->
            </div>
        </div>
    </section>



    <!-- EMIRATE'S TOP 3 HOTELS TEXT SECTION -->
    <section>

        <!-- Slanted BG -->
        <div class="slanted_bg light" style="transform: rotate(6.87deg); z-index: 12;"></div>

        <!-- Emirate's Top 3 Hotels Container -->
        <div class="top3_hotels">

            <!-- Emirate's Top 3 Hotels text -->
            <h3>AJM'S TOP</h3>
            <h1>3</h1>
            <h3>HOTELS</h3>
        </div>
    </section>



    <!--
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


        NOTES: 

        I used the swiperjs.com for the swiping animation 
        of div's  

        Visit it on: https://swiperjs.com/get-started


    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    -->



    <!-- TOP 3 HOTELS SWIPER SECTION -->
    <section class="hotels_swiper">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Emirate's Top 1 Hotel -->
                <div class="swiper-slide">

                    <!-- "ONE" text -->
                    <h1>ONE</h1>

                    <!-- Hotel Container -->
                    <div class="hotel">

                        <!-- Hotel Image -->
                        <img src="../images/fairmount_ajman.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Overlooking the Arabian Gulf, this family-friendly resort is Ajman's most luxurious hotel, with beautifully designed rooms, a small sandy 
                                beach, inviting infinity pool and a trio of great restaurants. There's an 18-hole golf course nearby and Dubai's airport and malls are all
                                within easy reach.
                            </p>

                            <!-- Book Now Button -->
                            <a href="http://www.booking.com/Share-nIGatdR" target="_blank">
                            BOOK NOW
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Emirate's Top 2 Hotel -->
                <div class="swiper-slide">

                    <!-- "TWO" text -->
                    <h1>TWO</h1>

                    <!-- Hotel Container -->
                    <div class="hotel">

                        <!-- Hotel Image -->
                        <img src="../images/oberoi_ajman.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Oberoi's first ultra-modern beach resort features Scandi-style interiors, glass-fronted villas and an 85-metre infinity pool. It's ideal 
                                for those looking for a peaceful sun-and-sea break, yet Dubai airport is just a 30-minute drive away.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/the-oberoi-beach-resort.html?aid=839822;label=booking-68ee6b033e5544e19b00ec9067498d87" target="_blank">
                            BOOK NOW
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Emirate's Top 3 Hotel -->
                <div class="swiper-slide">

                    <!-- "THREE" text -->
                    <h1>THREE</h1>

                    <!-- Hotel Container -->
                    <div class="hotel">

                        <!-- Hotel Image -->
                        <img src="../images/soray_ajman.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Soft white sand slopes from the pool terrace into the crystal waters of the Persian Gulf on the private beach of this five-star hotel. 
                                It's in the smallest of the United Arab Emirates, just 40km from Dubai but more peaceful and more affordable than its more famous neighbour. 
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/ajman-saray-a-luxury-collection-resort.html?aid=839822;label=booking-68ee6b033e5544e19b00ec9067498d87" target="_blank">
                            BOOK NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- Link the Swiper javascript from swiperjs.com -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Change some settings in the Swiper -->
    <script>

        var swiper = new Swiper('.swiper-container', { // modify the swiper container

            effect: 'coverflow', // make the effect coverflow
            grabCursor: true, // make the swiper grabbable with mouse
            loop: true, // make the swiper loop 
            centeredSlides: true, // make the slides be centered
            slidesPerView: 'auto', // make the slides per view auto

            // coverflow effect settings
            coverflowEffect: {
                rotate: 50, // rotate for 50 degrees
                stretch: 0, // don't stretch
                depth: 100, // make the depth to full 100
                modifier: 1, // modify to 1
                slideShadows: false, // disable slide shadows
            },

            // pagination settings
            pagination: {
                el: '.swiper-pagination', // assign the .swiper-pagination as the main pagination
                clickable: true, // make it clickable to navigate
            },
        });
    </script>

    <!-- (from codes.php) include the footer code -->
    <?php echo $footer_general ?>

    <!-- Link the Reveal Animations Script  -->
    <script src="../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>
