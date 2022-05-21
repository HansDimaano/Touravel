
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

    <!-- entitle the page to Touravel - Sheikh Zayed Mosque -->
    <title>Touravel - Sheikh Zayed Mosque</title>

</head>
<body>

    <!-- SHEIK ZAYED MOSQUE TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/sheikhzayedmosque_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/7 FJH/FJH 3 Sheikh Zayed Mosque.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>SHEIKH ZAYED MOSQUE</h1>

        <!-- Tourist Spot Description -->
        <p>
            The Sheikh Zayed Mosque in Fujairah is the second-largest mosque in the United Arab Emirates after Abu Dhabi. Although not open for non-prayer visits, 
            the mosque can be viewed from only the outside. Adorned with six hundred metre high minarets and sixty-four domes; this granite and marble religious 
            structure can comfortably seat 28000 worshippers. In short, the structure covers well over 39000 square metres, equivalent to three football pitches.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.bayut.com/mybayut/sheikh-zayed-mosque-fujairah/" target="_blank">Visit Website</a>
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
                    SATURDAY<br />
                    SUNDAY<br />
                    MONDAY<br />
                </h3>

                <!-- Time Text -->
                <h3 class="time">
                    8AM-8PM<br />
                    8AM-8PM<br />
                    8AM-8PM<br />
                    2PM-8PM<br />
                    8AM-8PM<br />
                    CLOSED<br />
                    8AM-8PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/sheikhzayedmosque_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13433.162982387588!2d56.3278276!3d25.1262526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa008fe4ace62fec8!2sGrand%20Sheikh%20Zayed%20Masjid%20%2C%20Fujairah!5e1!3m2!1sen!2sae!4v1653034339275!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">the orangery</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            The Orangery is shaped to reminisce the authentic British mastery, history and its culinary culture of flavours with touch of quality local produce.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13433.703491563063!2d56.3339123!3d25.1213365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8df024462995a8e8!2sThe%20Orangery!5e1!3m2!1sen!2sae!4v1653034372749!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/the_orangery.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/sheikhzayedmosque_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Sightseeing
                    <br /><br />
                    Photography
                    <br /><br />
                    Convey historic
                    consequence and to
                    embody the Islamic
                    message of peace,
                    tolerance and diversity.
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