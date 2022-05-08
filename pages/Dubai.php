
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

    <!-- entitle the page to Touravel - Dubai -->
    <title>Touravel - Dubai</title>

</head>
<body>
    <?php echo $header_general ?>

    <!-- DUBAI TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/dubai_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>DUBAI</h1>
            <p>
                Dubai has quickly become one of the world's most popular tourist destinations, owing to its international reputation as a thriving center 
                of international trade and innovation. Only in Dubai can you see and climb the world's tallest freestanding construction (the Burj Khalifa), 
                shop in luxury designer malls and historic trading souks, and eat feasts inspired by global flavors while sleeping in a seven-star hotel!
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462562.6509604375!2d54.947294892116!3d25.075759453120334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai!5e0!3m2!1sen!2sae!4v1651767230627!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                Sheikh Mohammed is a poet and an equestrian. He learned hunting and falconry when he was very young. He held the positions of
                Minister of Defence before becoming the Vice-President and Prime Minister of the UAE.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_almaktoum.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Mohammed bin Rashid Al Maktoum</h1>

                <!-- Sheikh Quote -->
                <p>
                    " Dubai will never settle for anything less than first place. "
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
                <p>TOURIST SPOTS IN DUBAI</p>
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
            <img src="../images/dxb_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Soaring high at 555 meters, At the Top Burj Khalifa SKY is fittingly one of Dubai's most iconic destination. Your journey begins 
                    when you step into the At the Top, Burj Khalifa SKY lounge, from where you will be personally escorted to a dedicated elevator. 
                    Get ready to enjoy exclusive access to the redefined, highest outdoor observatory in the world, spread across levels 148, 125 
                    and 124 of Burj Khalifa. 
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
            <img src="../images/dxb_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    Burj Al Arab Jumeirah is undoubtably one of the most famous landmarks and tourist attractions in Dubai, and is renowned for its 'seven-star status'. 
                    The luxury all-suite hotel includes a range of fine-dining restaurants, incredible beaches and the expansive Burj Al Arab Terrace. The Burj Al Arab 
                    has played host to a covetable guest list of VIPs and celebrities from all over the world, helping put Dubai on the global luxury tourism map. 
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
            <img src="../images/dxb_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Dubbed the hottest hotel on Palm Jumeirah, FIVE Palm Jumeirah is a dare-to-be-different hotel that captures the glamour and vibe of Dubai. 
                    Set against a breathtaking backdrop of the beach and Dubai Marina skyline, this lifestyle hotel boasts 470 luxurious rooms and suites with 
                    ocean or city views. The resort is a party and culinary hot spot with a range of restaurants, bars, and a nightclub, inviting to a new experience 
                    every day.
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
            <h3>DXB'S TOP</h3>
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
                        <img src="../images/burj_alarab.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Burj Al Arab takes hotel design to a new level of modern luxury, and has also redefined the meaning of exceptional hospitality, 
                                both in Dubai and around the world. Redefine your reality and your expectations at Jumeirah's flagship luxury hotel. From unrivalled 
                                amenities to world-class service, Burj Al Arab awaits your arrival.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/burj-al-arab.en-gb.html?aid=1250365;label=huno.1;sid=272cd8c8ea26423e59521261c475f0a3;all_sr_blocks=7305201_91461415_2_33_0;checkin=2022-03-19;checkout=2022-03-20;dest_id=-782831;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=7305201_91461415_2_33_0;hpos=1;matching_block_id=7305201_91461415_2_33_0;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=7305201_91461415_2_33_0__680000;srepoch=1647071166;srpvid=5edc369dfe100195;type=total;ucfs=1&#hotelTmpl" target="_blank">
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
                        <img src="../images/one&only.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Located on the western portion of The Palm, this boutique hotel is ideal for those who value sheer beauty and charm, but also peace and 
                                quietude. You can travel down to main Dubai via taxi, which takes about 30 minutes. However, the locational inconvenience is worth it when 
                                you take into consideration the unhindered view of Dubai Marina and the Jumeirah Beach Residence waterfront. 
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/one-only-royal-mirage.en-gb.html?aid=1250365;label=huno.1;sid=272cd8c8ea26423e59521261c475f0a3;checkin=2022-03-19;checkout=2022-03-20;dest_id=-782831;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;soh=1;sr_order=popularity;srepoch=1647071335;srpvid=529936f25d7101ae;type=total;ucfs=1&#no_availability_msg" target="_blank">
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
                        <img src="../images/jumeirah_beach.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                This luxury five star hotel is located quite close to Burj Al Arab, on the beach across from it. The location is quite fortunate because 
                                you're within 10 minutes of walking distance from Madinat Jumeirah, which is one of the most famous and extravagant shopping centers in 
                                all of Dubai. This 26 storey resort was created back in 1997, and it has been designed in the shape of breaking waves.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/al-qasr-madinat-jumeirah.en-gb.html?aid=1250365;label=huno.1;sid=272cd8c8ea26423e59521261c475f0a3;all_sr_blocks=7305616_88788873_2_2_0;checkin=2022-03-19;checkout=2022-03-20;dest_id=-782831;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=7305616_88788873_2_2_0;hpos=1;matching_block_id=7305616_88788873_2_2_0;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=7305616_88788873_2_2_0__416500;srepoch=1647071585;srpvid=24bd376f0831017b;type=total;ucfs=1&#hotelTmpl" target="_blank">
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