
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

    <!-- entitle the page to Touravel - Fujairah -->
    <title>Touravel - Fujairah</title>

</head>
<body>
    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <!-- FUJAIRAH TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/fujairah_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>FUJAIRAH</h1>
            <p>
                The Emirate of Fujairah encompasses a large portion of the UAE's eastern coast as well as the Hajar Mountain region. Its primary hub is Fujairah City, a 
                modern industrial town with few tourist attractions of its own. Fujairah has enough to offer outside of Fujairah's grid pattern of high-rise office 
                complexes.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57788.24164702009!2d56.29187393525586!3d25.143631133665377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef4562899269769%3A0xba0627e5f8ea86e5!2sFujairah!5e0!3m2!1sen!2sae!4v1652091293184!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                His Highness Sheikh Hamad bin Mohammed Al Sharqi, is the Ruler of the emirate Fujairah and a member of the Supreme Council since 1974. In 1971, after the 
                proclamation of the UAE Federation, he was named as Minister of Agriculture and Fishery.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_alsharqi.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Hamad bin Mohammed Al Sharqi</h1>

                <!-- Sheikh Quote -->
                <p>
                    " Thanks to the competence, love of God, our country's security and stability, endowed wealth, integrated infrastructure and quality services, 
                    the U.A.E. turned into the world's renowned destination for tourism, investment and business management: the interface of choice for hosting major 
                    cultural events, artistic and sports, in the world. "
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
                <p>TOURIST SPOTS IN FUJAIRAH</p>
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
            <img src="../images/fuj_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Considered as the oldest fort in UAE, Fujairah Fort once served as a defensive structure, as well as the residence of the ruling family. It was the 
                    only stone building along the Fujairah coast for many centuries. Established in the year 1670, Fujairah Fort reflects the profound past of the region. 
                    It is a mud-brick building comprising of three main sections, one square tower and two round towers.
                </p>
                <a href="TouristSpots/FujairahFort.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/fuj_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    Snoopy Island has become a coveted spot for various watersports, activities and music festivals. Snoopy island gets its name from the interestingly 
                    shaped rock that looks like the cartoon character Snoopy lying on its back. The popular water activities here are snorkelling and diving. The area is 
                    surrounded by beautiful reefs teeming with shoals of marine life where you can occasionally spot turtles and small sharks. 
                </p>
                <a href="TouristSpots/SnoopyIsland.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/fuj_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    The Sheikh Zayed Mosque in Fujairah is the second-largest mosque in the United Arab Emirates after Abu Dhabi. Although not open for non-prayer visits, 
                    the mosque can be viewed from only the outside. Adorned with six hundred metre high minarets and sixty-four domes; this granite and marble religious 
                    structure can comfortably seat 28000 worshippers.
                </p>
                <a href="TouristSpots/SheikhZayedMosque.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <h3>FUJ'S TOP</h3>
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
                        <img src="../images/intercontinental_fuj.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The InterContinental Fujairah Resort is situated on the beautiful Al Aqah Beach, with the Hajjar Mountains providing a stunning backdrop. 
                                The resort's 190 contemporary guest rooms and suites are spread across 69 acres of land and have spacious balconies with unobstructed views
                                of the ocean.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/intercontinental-fujairah-resort.en-gb.html" target="_blank">
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
                        <img src="../images/royalm_fuj.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Located in Fujairah, Royal M Hotel Fujairah offers elegant and modern accommodations with views of the mountains. The hotel adjoins the 
                                iconic Fujairah Mall, home to over 80 luxury and premium outlets. It offers a fitness center, an outdoor pool and a spa center. Sharjah 
                                International Airport is 83 km away.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/millennium-fujairah.en-gb.html?aid=356980;label=gog235jc-1DCAsoAkITbWlsbGVubml1bS1mdWphaXJhaEgzWANoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gCotO9kQbAAgHSAiQ5YzAxMzBhYS1mNzBlLTQ3ZjUtOTE5ZC1hY2M5M2Y3YzhkMGHYAgTgAgE;sid=6e960709da516d05765b0353c0c5e92b;dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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
                        <img src="../images/concorde_fuj.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The Concorde Fujairah Hotel is situated 3 km from the beach and offers luxurious rooms with either mountain or ocean views. The rooftop 
                                pool overlooks the Hajaar Mountains. All of the spacious guest rooms of the Fujairah Concorde Hotel come with a flat-screen TV, minibar 
                                and bathrobe with slippers. There is a 24-hour room service.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/iberotel-concorde-fujairah.en-gb.html?aid=356980;label=gog235jc-1DCAsoAkIaaWJlcm90ZWwtY29uY29yZGUtZnVqYWlyYWhIM1gDaAKIAQGYAQm4ARfIAQzYAQPoAQGIAgGoAgO4AuvTvZEGwAIB0gIkNDI4NGQ1OTktYmQxOS00MGFmLWFkOTItMjA4NjBjZTI0ODky2AIE4AIB;sid=6e960709da516d05765b0353c0c5e92b;dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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
