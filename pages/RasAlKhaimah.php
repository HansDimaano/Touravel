
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

    <!-- entitle the page to Touravel - Ras Al-Khaimah -->
    <title>Touravel - Ras Al-Khaimah</title>

</head>
<body>
    <?php echo $header_general ?>

    <!-- RAS AL KHAIMAH TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/rak_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>RAS AL-KHAIMAH</h1>
            <p>
                With over 7,000 years of fascinating history and culture, Ras Al Khaimah is the perfect getaway from everyday life. Offering magnificent landscapes, 
                breathtaking coastlines, and rich, terracotta desert planes, the emirate has firmly established itself as one of the most authentic destinations in the 
                Middle East. With year-long sunshine and 64 kilometres of white sandy beaches, just 45 minutes from the busy metropolis of Dubai, Ras Al Khaimah offers a 
                unique experience from its neighbouring emirates.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230038.0661960879!2d55.681170596951944!3d25.72610930446706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef676ad264b24c1%3A0x10f6affe1a9e78a3!2sRas%20Al-Khaimah%20-%20Ras%20al%20Khaimah!5e0!3m2!1sen!2sae!4v1652091135007!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                His Highness Sheikh Saud was named Supreme Council Member and Ruler of Ras Al Khaimah on October 27, 2010, following the death of his father, His Highness 
                Sheikh Saqr.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_saqr_alqasimi.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Saud bin Saqr Al Qasimi</h1>

                <!-- Sheikh Quote -->
                <p>
                    " We can be successful in our lives only when We discover ourselves and education provides us with the vital tool for self discovery. The kind of 
                    choices that you make regarding your education will have a decisive impact on your lives later on. "
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
                <p>TOURIST SPOTS IN RAK</p>
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
            <img src="../images/rak_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Jebel Jais, the highest point in the UAE, is part of the beautiful Hajar mountain range, which was constructed about 70 million years ago in the 
                    eastern part of Ras Al Khaimah, UAE, and Oman. Jebel Jais, at 1,934 meters above sea level, offers breathtaking views and exhilarating adventures to 
                    all visitors. 
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
            <img src="../images/rak_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    The Bedouin Oasis is located in the midst of Ras Al Khaimah's beautiful agricultural scenery, surrounded by towering dunes. In the emirate's most 
                    authentic camp, you may learn about the traditional Bedouin way of living in the desert. With enormous seats and luxurious Arabian rugs set around a 
                    raging campfire, traditional goat hair tents create distinctive entertaining venues.
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
            <img src="../images/rak_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Wadi Shawka is a popular hiking destination in Ras-al-Khaimah and is considered to be an exploration hike because the trail offers an all-in-one 
                    experience like off-road drives, pool dips, natural springs, greenery and the mountains. One can venture out to the Shawka trail because of its 
                    challenging route and the picturesque beauty of mountains as the backdrop.
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
            <h3>RAK'S TOP</h3>
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
                        <img src="../images/greatwall_rak.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                If you are visiting Ras Al-Khaimah, this hotel is one of the best ones to get into and here are the reasons why, The property is situated 
                                on the beach front of one of the oldest beaches in Ras Al-Khaimah, it boasts themed rooms, a rooftop restaurant with an amazing view, 
                                the most convenient location with more tourist spots closeby and the overall amazing environment around the hotel.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/great-wall.en-gb.html?aid=356980;label=gog235jc-1DCAsoAkIKZ3JlYXQtd2FsbEgzWANoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gC1sq9kQbAAgHSAiQxY2IxNTA1Yy0wMTJiLTQ2YzgtYWY0NC02OTg5MDdjNjBkOTPYAgTgAgE;sid=6e960709da516d05765b0353c0c5e92b;dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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
                        <img src="../images/waldorf_rak.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The famous Waldorf Astoria Ras Al Khaimah is naturally inspired by Arabia's majestic palaces and delivers an unforgettable retreat. The Al 
                                Hajar Mountains, wide swaths of desert, the Arabian Gulf, a championship golf course, and white-sand beaches surround the beach resort. It 
                                takes 45 minutes to go to Dubai International Airport.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/waldorf-astoria-ras-al-khaimah.en-gb.html?aid=356980;label=gog235jc-1DCAsoAkIed2FsZG9yZi1hc3RvcmlhLXJhcy1hbC1raGFpbWFoSDNYA2gCiAEBmAEJuAEXyAEM2AED6AEBiAIBqAIDuAKPy72RBsACAdICJDNlZmE0MDVlLThjOTgtNDFmZi1hNDYzLWMyNTc0YzJiMGMyYdgCBOACAQ;sid=6e960709da516d05765b0353c0c5e92b;dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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
                        <img src="../images/ritzcarlton_rak.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Located on a private stretch of white sandy beach in Al Jazirah Al Hamra, The Ritz-Carlton Ras Al Khaimah, Al Hamra Beach boasts 32 
                                private villas facing the sea, all with their own pool. Following a scenic boat arrival experience to the resort, guests can enjoy an 
                                infinity pool, a seafood restaurant overlooking the Arabian Gulf and a luxurious spa that offers holistic treatments.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/the-ritz-carlton-ras-al-khaimah-al-wadi-desert.en-gb.html?aid=356980;label=gog235jc-1DCAsoAkIudGhlLXJpdHotY2FybHRvbi1yYXMtYWwta2hhaW1haC1hbC13YWRpLWRlc2VydEgzWANoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gCvMu9kQbAAgHSAiQ5Y2ZiMjdlOS1jZDc1LTRmNGUtYjYxMi0zMGY0MGUyMzIzZjPYAgTgAgE;sid=6e960709da516d05765b0353c0c5e92b;dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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