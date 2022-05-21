
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

    <!-- entitle the page to Touravel - Bedouin Oasis Camp -->
    <title>Touravel - Bedouin Oasis Camp</title>

</head>
<body>

    <!-- BEDOUIN OASIS CAMP TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/bedouinoasis_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/6 RAK/RAK 2 Bedouin Oasis Camp.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>BEDOUIN OASIS CAMP</h1>

        <!-- Tourist Spot Description -->
        <p>
            The Bedouin Oasis is located in the midst of Ras Al Khaimah's beautiful agricultural scenery, surrounded by towering dunes. In the emirate's most 
            authentic camp, you may learn about the traditional Bedouin way of living in the desert. With enormous seats and luxurious Arabian rugs set around 
            a raging campfire, traditional goat hair tents create distinctive entertaining venues. You may eat food from a great grill and an underground oven 
            every evening. Slow-cooked entire mutton cooked in a zarb buried in sand, an ancient form of underground cooking, is one of the traditional delicacies.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://bedouinoasis.org/" target="_blank">Visit Website</a>
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
                    Check-in is from 03:00 PM, <br />
                    and check-out is until <br />
                    07:30 AM. <br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/bedouinoasis_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24596.535326997335!2d55.838098190282416!3d25.555260768942706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93169a8a3e230cf0!2sBedouin%20Oasis%20Camp!5e1!3m2!1sen!2sae!4v1652996918957!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">la buratta italian restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Authentically Italian. For us cooking is love, it's the heart of all conversations, the anchor of many memories shared with our loved ones.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.4471622086508!2d55.852665915019976!3d25.71535298365783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef6752e4fe43ff7%3A0xddbfb42866f32dc8!2sLa%20Burrata%20Italian%20restaurant!5e1!3m2!1sen!2sae!4v1652996955107!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/la_buratta.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/bedouinoasis_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    RAK DESERT SAFARI
                    <br /><br />
                    BEDOUIN COUPLE CHALET
                    <br /><br />
                    RAK MORNING SAFARI-QUAD BIKE TOUR
                    <br /><br />
                    CAMEL TREKKING
                    <br /><br />
                    DINE IN THE DESERT
                    <br /><br />
                    ROMANTIC PRIVATE SAFARI IGLOO TENT
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