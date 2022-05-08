
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

    <!-- entitle the page to Touravel - Abu Dhabi -->
    <title>Touravel - Abu Dhabi</title>

</head>
<body>
    <?php echo $header_general ?>

    <!-- ABU DHABI TITLE CONTAINER (each emirate title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), url('../images/abudhabi_bg.jpg');">

        <!-- Emirate Description Container -->
        <div class="aboutEmirate">
            <h1>ABU DHABI</h1>
            <p>
                Abu Dhabi includes 80 percent of the United Arab Emirates, stretching from the Arabian Gulf coast to the cultural center
                of Al Ain and the spectacular desert environment of the Al Dhafra Region. The emirate has something for every tourist, with
                its natural islands and luxurious resorts, changing sand dunes and calm oasis.
            </p>
        </div>

        <!-- Emirate Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465132.6089620595!2d54.278427132644296!3d24.386572908702746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e440f723ef2b9%3A0xc7cc2e9341971108!2sAbu%20Dhabi!5e0!3m2!1sen!2sae!4v1651572241663!5m2!1sen!2sae" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                His Highness Sheikh Khalifa bin Zayed Al Nahyan is the second President of the United Arab Emirates (UAE) and the 16th Ruler of the Emirate of Abu Dhabi,
                the largest of the seven Emirates which comprise the UAE.
            </p>
        </div>

        <!-- Sheikh Container -->
        <div class="sheikh">

            <!-- Sheikh Image -->
            <img src="../images/sheikh_alnahyan.png" class="reveal up" />

            <!-- Sheikh Image Container -->
            <div class="sheikh_desc reveal right">

                <!-- Sheikh Name -->
                <h1>Sheikh Khalifa bin Zayed Al Nahyan</h1>

                <!-- Sheikh Quote -->
                <p>
                    " Thanks to the competence, love of God, our country's security and stability, endowed wealth, integrated infrastructure and quality services,
                    the U.A.E. turned into the world's renowned destination for tourism, investment and business management: the interface of choice for hosting
                    major cultural events, artistic and sports, in the world. "
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
                <p>TOURIST SPOTS IN ABU DHABI</p>
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
            <img src="../images/auh_one.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    The Sheikh Zayed Grand Mosque is an ode to stunning Islamic architecture. Believed to be one of the largest mosques in the world,
                    the Sheikh Zayed Mosque blends the UAE's rich history and the values of Islamic traditions with grandeur and magnificence.
                    This beautiful mosque is a sight to behold, no matter what time of the day you choose to visit.
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
            <img src="../images/auh_two.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc left">

                <!-- Tourist Spot Description -->
                <p>
                    If you love the thrill of intense speed, this is the place to be. Ferrari World Abu Dhabi offers spine-chilling and adrenaline-pumping
                    rides and experiences for all ages. The latest editions to the epic list of attractions at this world-class theme park include the chance
                    to walk on the destination's iconic red roof .. or take a zipline across it!
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
            <img src="../images/auh_three.png" />

            <!-- Tourist Spot Description Container -->
            <div class="tourist_spot_desc right">

                <!-- Tourist Spot Description -->
                <p>
                    One of the distinguishing features of Abu Dhabi is its thriving mangrove population. Whether you head out to the Eastern Mangroves or set out
                    to explore the Jubail Mangrove Park - you can witness firsthand the lush vegetation and the prolific ecosystem it supports. Kayaking in the
                    mangroves is also a popular sport in the capital.
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
            <h3>AUH'S TOP</h3>
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
                        <img src="../images/ritz_carlton.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                The Ritz-Carlton Abu Dhabi, Grand Canal is a grandiose, glistening example of Middle Eastern opulence. 
                                Case in point: the Ritz-Carlton Suite, which clocks in at 1,356 square feet, has a stylish four-poster bed, 
                                spacious powder room, full marble bathroom with a soaking tub, a color therapy shower, separate living and dining 
                                areas, a kitchen, and two terraces overlooking the Grand Canal.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.expedia.com/Abu-Dhabi-Hotels-The-Ritz-Carlton-Abu-Dhabi.h5484178.Hotel-Information?clickref=1011liWA5vzj&affcid=US.DIRECT.PHG.1100l20065.0&ref_id=1011liWA5vzj&my_ad=AFF.US.DIRECT.PHG.1100l20065.0&afflid=1011liWA5vzj" target="_blank">
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
                        <img src="../images/st_regis.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                This St. Regis Resort, a palatial beachfront property, looks like it belongs in Florida or the Caribbean. Yet it's on 
                                the pristine white-sand beaches of Saadiyat Island, skirting the Persian Gulf. Everything about the property feels thought-through, 
                                from the expanses of terraced manicured grass, to the palm trees lining the walkways. Guest rooms are a blend of the Mediterranean 
                                and the Middle East.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://skylark.com/destinations/middle-east/united-arab-emirates/abu-dhabi/hotels/the-st-regis-saadiyat-island-resort?utm_medium=partner&utm_source=cnt&utm_campaign=Cnt_mar2018&utm_content=St.RegisSaadiyatIslandResort,AbuDhabi" target="_blank">
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
                        <img src="../images/jumeirah_etihad.png" />

                        <!-- Hotel Description Container -->
                        <div class="hotel_desc">

                            <!-- Hotel Description Text -->
                            <p>
                                Jumeirah At Etihad Towers is a glistening example of the best Abu Dhabi has to offer. Located on the western end of the Corniche, 
                                opposite Emirates Palace, the luxurious hotel provides a jaw-dropping welcome thanks to sparkling Swarovski chandeliers and 
                                amethyst-encrusted elevators. Generous Grand Deluxe rooms have a comfortable king bed, a daybed, a good-sized desk, and a beautiful 
                                bathroom.
                            </p>

                            <!-- Book Now Button -->
                            <a href="https://www.expedia.com/Abu-Dhabi-Hotels-Conrad-Abu-Dhabi-Etihad-Towers.h4399777.Hotel-Information?chkin=11%2F23%2F2019&chkout=11%2F24%2F2019&regionId=453&destination=Abu%20Dhabi%2C%20Abu%20Dhabi%2C%20United%20Arab%20Emirates&swpToggleOn=true&mctc=10&selected=4399777&rm1=a2&x_pwa=1&sort=recommended&GCLID=AA80Osw43u9QnPw4B7ot1Mwi8g991ezea388AVeT4T2CPq-EAGqFswndyqJx5kvBhlBeuesWeAc3It6evEYlV50h5Wgame8pFtGQRQ&MDPDTL=HTL.4399777.20191123.20191124.DDT.29.CID.345455446.AUDID.&MDPCID=US.META.HPA.HOTEL-CORESEARCH-desktop.HOTEL&top_dp=208&top_cur=USD&rfrr=HSR&pwa_ts=1572022367952&businessModelFilter=EC&clickref=1100liVXLRgr&affcid=US.DIRECT.PHG.1100l20065.0&ref_id=1100liVXLRgr&my_ad=AFF.US.DIRECT.PHG.1100l20065.0&afflid=1100liVXLRgr" target="_blank">
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