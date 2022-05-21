
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

    <!-- entitle the page to Touravel - Umm Al Quwain -->
    <title>Touravel - Umm Al Quwain</title>

</head>
<body>
    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <!-- UMM AL QUWAIN TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/uaq_bg.png');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>UMM AL QUWAIN</h1>
            <p>
                Umm Al Quwain is the UAE's second smallest and least populous emirate. It covers an area of about 720 square kilometers or about 1% of the UAE's total 
                territory. Umm Al Quwain had a total population of 49,159 people according to the December 2005 census.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115187.54146130066!2d55.48921298766952!3d25.551342441085442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5fea6ff2b925d%3A0x4a02589b92c58613!2sUmm%20Al%20Quwain%20-%20Umm%20Al%20Quawain!5e0!3m2!1sen!2sae!4v1652087030560!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                His Highness Sheikh Saud bin Rashid Al Mualla was born on October 1st 1952. He became Ruler of the emirate of Umm Al Quwain and a member of the Supreme 
                Council after the demise of his father Sheikh Rashid bin Ahmad Al Mualla on 2nd of January 2009.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_almualla.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Saud bin Rashid Al Mu'alla</h1>

                <!-- Sheikh Quote -->
                <p>
                    " Since the establishment of the Union, our national leadership has embodied the nation's solidarity to protect its gains, in accordance with the 
                    national values, which has today become one of the features of UAE Armed Forces members, and emphasised by the principles of pride and dignity. "
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
                <p>TOURIST SPOTS IN UAQ</p>
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
            <img src="../images/uaq_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    With over 15 thrilling rides and sensibly priced dreamland aqua park is one of the best choices for a vacation spot, especially for families with kids.
                    But what's unique with them is the camping opportunity that is available for visitors for 2 nights. Experience Dreamland Aqua Park's ultimate overnight
                    camping for two days of fun, exciting rides, and unforgettable memories, or simply rent out their Cabana for one day.
                </p>
                <a href="TouristSpots/DreamlandAquaPark.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/uaq_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    This 250-year-old landmark was previously the Royal family's residence, known as the Umm Al Quwain Fort at the time. It is now the UAE's official 
                    museum. This museum displays the history of the UAE in one spectacular castle, with visitors ranging from GCC expats to school field excursions. 
                    The museum houses a priceless collection of artifacts unearthed from adjacent sites.
                </p>
                <a href="TouristSpots/UmmAlQuwainMuseum.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <img src="../images/uaq_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    Racing lovers will probably find this place according to their desires. There are many opportunities available to have adventure in this field. The 
                    surrounding and settings for the racing are outstanding which make the environment thrilling and amazing. There are five tracks for every kind of 
                    racing. The category of racing includes quad bikes, drag cars, motocross and endurance race cars.
                </p>
                <a href="TouristSpots/EmiratesMotorplex.php">CHECK OUT</a> <!-- Check Out Button -->
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
            <h3>UAQ'S TOP</h3>
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
                        <img src="../images/vida_uaq.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                For the ultimate disconnect and recharge, head to Vida Beach Resort in Umm Al Quwain. The newly opened resort on the Arabian Gulf shore was
                                created specifically for you. It's all in the details. Vida Beach Resort Umm Al Quwain, located on the Arabian Gulf's foreshore and with 
                                wonderful beach access, is a beachside getaway suited for anyone wishing to connect, relax, recharge, or discharge while staying close to 
                                Dubai.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/vida-beach-resort-umm-al-quwain.en-gb.html?label=gen173nr-1DCAMYASgCQg51bW0tYWwtcWF5d2F5bkgzWARoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gCtcG9kQbAAgHSAiQ4YjA1YmM0ZS1iYjNkLTQ0OGQtODBjOS1kNWZmOWI1YzEzYjDYAgTgAgE;sid=6e960709da516d05765b0353c0c5e92b" target="_blank">
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
                        <img src="../images/pearl_uaq.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The hotel offers multiple dining options including Backwaters, serving authentic Kerala Indian cuisine and Das Brauhaus, a German 
                                Restaurant and Bar serving Bavarian cuisine. The Barako Grill is an authentic Filipino Restaurant and Bar and Biergarten, the beach bar, 
                                features views and an international cuisine.
                            </p>

                            <!-- Book Now Button -->
                            <a href="http://www.booking.com/Share-bfU4zo" target="_blank">
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
                        <img src="../images/flamingo_uaq.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Set in a tropical garden in Umm Al Quwain, Flamingo Beach Resort offers views of the mangrove islands, a private beach area, an outdoor 
                                pool. Umm Al Quwain Museum is a 10-minute walk away. Free WiFi is available throughout the entire property. It was great atmosphere, out 
                                door was amazing so many activities crabbing, fishing, boating, amazing experience.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.booking.com/hotel/ae/flamingo-by-bin-majid.en-gb.html?label=gen173nr-1DCAMYASgCQg51bW0tYWwtcWF5d2F5bkgzWARoAogBAZgBCbgBF8gBDNgBA-gBAYgCAagCA7gCtcG9kQbAAgHSAiQ4YjA1YmM0ZS1iYjNkLTQ0OGQtODBjOS1kNWZmOWI1YzEzYjDYAgTgAgE;sid=6e960709da516d05765b0353c0c5e92b" target="_blank">
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
