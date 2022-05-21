
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

    <!-- entitle the page to Touravel - Dhow Yard -->
    <title>Touravel - Dhow Yard</title>

</head>
<body>

    <!-- DHOW YARD TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/dhowyard_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/4 AJM/AJM 3 Dhow Yard.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>DHOW YARD</h1>

        <!-- Tourist Spot Description -->
        <p>
            For centuries, wooden dhows have played a significant role in trade and commerce across the Arab world. Before the seas were full of the modern merchant 
            ships we encounter today, dhows were the primary modes of transport and trading in the region. In this post, we will talk about the Ajman Dhow 
            Building Yard and glance at the rich history and significance of the vessel in UAE.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://ajman.travel/en/destinations/ajman-city/dhow-yard/" target="_blank">Visit Website</a>
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
                    6AM-6PM<br />
                    6AM-6PM<br />
                    6AM-6PM<br />
                    6AM-6PM<br />
                    6AM-6PM<br />
                    6AM-6PM<br />
                    6AM-6PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/dhowyard_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13402.99437047144!2d55.4603362!3d25.3992349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54dbaf873ed257f2!2sAjman%20Dhow%20Yard!5e1!3m2!1sen!2sae!4v1652993028257!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">spice ship restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            the Category of Spice Ship Restaurant Ajman is listed as Pakistani Restaurant

        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13403.640266255115!2d55.4584745!3d25.3934192!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfde352e3cf6f976b!2sSpice%20Ship%20Restaurant!5e1!3m2!1sen!2sae!4v1652993091398!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/spiceship_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/dhowyard_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Sightseeing
                    <br /><br />
                    Photography
                    <br /><br />
                    Tour
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