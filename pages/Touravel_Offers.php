
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Offers Page CSS -->
    <link rel="stylesheet" href="../css/OffersPage.css" />

    <!-- link the swiper CSS from swiperjs.com (for swiper) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Offers -->
    <title>Touravel - Offers</title>

</head>
<body>

    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <!-- OFFERS TITLE CONTAINER -->
    <div class="title_container">

        <!-- OFFERS TITLE -->
        <h5>Services that we offer in</h5>
        <h1>UNITED ARAB EMIRATES</h1>

        <!-- OFFERS DESCRIPTION -->
        <p>
            Check out our amazing affordable deals that will make your stay in UAE unforgettable!
        </p>
    </div>


    <!--
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


        NOTES: 

        I used the swiperjs.com for the swiping animation 
        of div's  

        Visit it on: https://swiperjs.com/get-started


    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    -->



    <!-- ABU DHABI SUBHEADING -->
    <div class="subheading">
        <h3>ABU DHABI OFFERS</h3>
    </div>

    <!-- ABU DHABI OFFERS CONTAINER -->
    <section class="auh_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Abu Dhabi Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106456682013797" target="_blank"><img src="../images/Offers_AUH-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106460752013390" target="_blank"><img src="../images/Offers_AUH-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106462775346521" target="_blank"><img src="../images/Offers_AUH-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- DUBAI SUBHEADING -->
    <div class="subheading">
        <h3>DUBAI OFFERS</h3>
    </div>

    <!-- DUBAI OFFERS CONTAINER -->
    <section class="dxb_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Dubai Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106467282012737" target="_blank"><img src="../images/Offers_DXB-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106470035345795" target="_blank"><img src="../images/Offers_DXB-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106471008679031" target="_blank"><img src="../images/Offers_DXB-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- SHARJAH SUBHEADING -->
    <div class="subheading">
        <h3>SHARJAH OFFERS</h3>
    </div>

    <!-- SHARJAH OFFERS CONTAINER -->
    <section class="shj_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Sharjah Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106472492012216" target="_blank"><img src="../images/Offers_SHJ-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106477488678383" target="_blank"><img src="../images/Offers_SHJ-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106479848678147" target="_blank"><img src="../images/Offers_SHJ-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- AJMAN SUBHEADING -->
    <div class="subheading">
        <h3>AJMAN OFFERS</h3>
    </div>

    <!-- AJMAN OFFERS CONTAINER -->
    <section class="ajm_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Ajman Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106482188677913" target="_blank"><img src="../images/Offers_AJM-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106485495344249" target="_blank"><img src="../images/Offers_AJM-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106490762010389" target="_blank"><img src="../images/Offers_AJM-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- UMM AL QUWAIN SUBHEADING -->
    <div class="subheading">
        <h3>UMM AL QUWAIN OFFERS</h3>
    </div>

    <!-- UMM AL QUWAIN OFFERS CONTAINER -->
    <section class="uaq_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Umm Al Quwain Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106548955337903" target="_blank"><img src="../images/Offers_UAQ-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106547262004739" target="_blank"><img src="../images/Offers_UAQ-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106545685338230" target="_blank"><img src="../images/Offers_UAQ-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- RAS AL-KHAIMAH SUBHEADING -->
    <div class="subheading">
        <h3>RAS AL-KHAIMAH OFFERS</h3>
    </div>

    <!-- RAS AL-KHAIMAH OFFERS CONTAINER -->
    <section class="rak_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Ras Al-Khaimah Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106554145337384" target="_blank"><img src="../images/Offers_RAK-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106552958670836" target="_blank"><img src="../images/Offers_RAK-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106551668670965" target="_blank"><img src="../images/Offers_RAK-3.png" /></a>
                </div>
            </div>

            <!-- Swiper Pagination (3 dots below) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- FUJAIRAH SUBHEADING -->
    <div class="subheading">
        <h3>FUJAIRAH OFFERS</h3>
    </div>

    <!-- FUJAIRAH OFFERS CONTAINER -->
    <section class="fuj_container">

        <!-- Swiper Container and Wrapper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Fujairah Offers linked to the corresponding Doravel links -->
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106559042003561" target="_blank"><img src="../images/Offers_FUJ-1.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106557172003748" target="_blank"><img src="../images/Offers_FUJ-2.png" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.facebook.com/Dora-The-Travel-Agent-104486695544129/photos/a.106456722013793/106555148670617" target="_blank"><img src="../images/Offers_FUJ-3.png" /></a>
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
