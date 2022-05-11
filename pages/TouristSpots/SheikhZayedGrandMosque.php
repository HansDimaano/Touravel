
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Tourist Spot Pages CSS -->
    <link rel="stylesheet" href="../../css/TouristSpotPages.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_touristspots ?>

    <!-- entitle the page to Touravel - Sheikh Zayed Grand Mosque -->
    <title>Touravel - Sheikh Zayed Grand Mosque</title>

</head>
<body>

    <!-- GRAND MOSQUE TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/grandmosque_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>SHEIKH ZAYED GRAND MOSQUE</h1>

        <!-- Tourist Spot Description -->
        <p>
            The Sheikh Zayed Grand Mosque is an ode to stunning Islamic architecture. Believed to be one of the largest mosques in the world, the Sheikh Zayed Mosque
            blends the UAE's rich history and the values of Islamic traditions with grandeur and magnificence. This beautiful mosque is a sight to behold, no matter
            what time of the day you choose to visit.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.szgmc.gov.ae/en/" target="_blank">Visit Website</a>
    </div>


    <!-- OPENING HOURS CONTAINER -->
    <div class="opening_hours">

        <!-- Opening Hours Heading -->
        <h1 class="reveal up">OPENING HOURS</h1>

        <!-- Opening Hours Content Box -->
        <div class="opening_content">

            <!-- Opening Hours Details -->
            <div class="opening_details">

                <!-- Days Text -->
                <h3 class="day">
                    TUESDAY<br />
                    WEDNESDAY<br />
                    THURSDAY<br />
                    FRIDAY<br />
                    <br />
                    SATURDAY<br />
                    SUNDAY<br />
                    MONDAY<br />
                </h3>

                <!-- Time Text -->
                <h3 class="time">
                    9AM-10PM<br />
                    9AM-10PM<br />
                    9AM-10PM<br />
                    9AM-12PM,<br />
                    3PM-10PM<br />
                    9AM-10PM<br />
                    9AM-10PM<br />
                    9AM-10PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/grandmosque_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3529.0201088792946!2d54.4727867!3d24.4128334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e4273e8dafe49%3A0x248fbbcbefe2afc7!2sSheikh%20Zayed%20Grand%20Mosque!5e1!3m2!1sen!2sae!4v1652179339249!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">sweet greens restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            We are serving the most tasteful, freshest, and healthiest food!
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14115.9905484872!2d54.445722739550774!3d24.413637200000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e43ba9f96aa81%3A0x5d00d2e56306d4e4!2sSweet%20Greens%20Restaurant!5e1!3m2!1sen!2sae!4v1652181307223!5m2!1sen!2sae" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/sweetgreens_restaurant.jpg" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/grandmosque_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Walking tours.
                    <br /><br />
                    Convey historic
                    consequence and to
                    embody the Islamic
                    message of peace,
                    tolerance and
                    diversity.
                </h3>
            </div>
        </div>
    </div>

    <!-- (from codes.php) include the footer code for tourist spots -->
    <?php echo $footer_touristspots ?>

    <!-- Link the Reveal Animations Script  -->
    <script src="../../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>