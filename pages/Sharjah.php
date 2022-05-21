
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

    <!-- entitle the page to Touravel - Sharjah -->
    <title>Touravel - Sharjah</title>

</head>
<body>
    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <!-- SHARJAH TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/sharjah_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>SHARJAH</h1>
            <p>
                Sharjah is known for its dedication to art, culture, and historical preservation. It was named the Cultural Capital of the Arab World by UNESCO in 1998. 
                The city has risen to prominence as a major educational center. It also has various museums, parks, an aquarium, and an Arabian animal center, as well as 
                a variety of modern amenities for guests.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230818.64374855408!2d55.405352981620396!3d25.31961069639872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5f5fede7964b%3A0x2a830aa19c1f6d89!2sSharjah!5e0!3m2!1sen!2sae!4v1652025219273!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                His Highness Sheikh Dr. Sultan bin Muhammad bin Saqr bin Khalid bin Sultan bin Saqr bin Rashid Al Qasimi  is the sovereign ruler of the Emirate of Sharjah 
                and a member of the Federal Supreme Council of the United Arab Emirates.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_alqasimi.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Sultan bin Muhammed Al Qasimi</h1>

                <!-- Sheikh Quote -->
                <p>
                    " The leadership of the United Arab Emirates believes in the importance and merit of Education for achieving top standards of the state and citizen 
                    and to ensure the future of the nation and the people who are accustomed to be always in the forefront. "
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
                <p>TOURIST SPOTS IN SHARJAH</p>
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
            <img src="../images/shj_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Sharjah Aquarium is a place where tourists can to a wide range of marine life. The aquarium comprises of 20 large tanks housing a large variety of 
                    oceanic marine life. The main purpose of this place was to encourage the conservation of marine life.
                </p>
                <a href="TouristSpots/SharjahAquarium.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/shj_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    Situated on the eastern coast of the United Arab Emirates, the city of Khor Fakkan is an exclave of the Emirate of Sharjah and is nothing less than a 
                    paradise on Earth. With the Khor Fakkan Beach present on the banks of Gulf of Oman and the Bay of Khor Fakkan, the city is geographically surrounded 
                    by the Hajar Mountains on its western end.
                </p>
                <a href="TouristSpots/KhorFakkan.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/shj_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Located in the heart of Sharjah, the Al Noor Mosque is amongst the most beautiful mosques in the city. It dominates the city's skyline owing to its 
                    fabulous architecture. In Arabic, the word 'Noor' means light, and Al Noor, true to its meaning, stands magnificently alongside the Khalid Lagoon on 
                    Buhaira Corniche.
                </p>
                <a href="TouristSpots/AlNoorMosque.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <h3>SHJ'S TOP</h3>
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
                        <img src="../images/sheraton_sharjah.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                This sandy, rose-tinged property is a typically grand Arabian-style beach resort edged by sparkling gulf waters. There are 349 rooms and 
                                suites, a sweeping private beach and two large pools. Hop in a taxi to Al Majaz Waterfront, a cafe-dotted curve overlooking the Khaled 
                                Lagoon, home to minigolf and Sharjah's musical fountain displays. Back at the hotel, the Shine Spa offers excellent massages and deep-soak 
                                therapy baths.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/sheraton-sharjah-beach-resort-and-spa.en-gb.html?aid=356980&label=gog235jc-1DCAsoAkIlc2hlcmF0b24tc2hhcmphaC1iZWFjaC1yZXNvcnQtYW5kLXNwYUgzWANoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gC2M_fkwbAAgHSAiQzMjNlNDc1Yi01YmIzLTQ3OTgtOWE0Ni1lNDUyMzM4Y2M3ZDfYAgTgAgE&sid=6e960709da516d05765b0353c0c5e92b&dist=0&keep_landing=1&sb_price_type=total&type=total&" target="_blank">
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
                        <img src="../images/ocidental_sharjah.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Something about this hotel shouts "summer holiday". Maybe it's the palm-fringed pool and private sandy beach,
                                the light-flooded modern rooms with sea views or the hotel's sea-lapped barbecue restaurant La Bamba. Whatever it is, you'll be in a good 
                                spot to relax in the sunshine. Top local attractions, such as Sharjah Aquarium, are close by, and the fact the hotel is dry makes it ideal 
                                for family-friendly, wholesome fun.
                            </p>

                            <!-- Book Now Button -->
                            <a href="http://www.booking.com/Share-vL80io" target="_blank">
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
                        <img src="../images/act_hotel.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The rooftop pool here offers clear views over the Corniche and Al Qasba, a tranquil canal connecting two waterfront areas with a collection
                                of restaurants on either side. A boat trip along this stretch of water is a must, if only to spot the Eye of the Emirates, Sharjah's giant
                                Ferris wheel. The hotel offers five-star luxury with theatrical flair (full-size white horse lamp noted) and lashings of authentic Arabian
                                hospitality.
                            </p>

                            <!-- Book Now Button -->
                            <a href="http://www.booking.com/Share-plQj4J" target="_blank">
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
