
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

    <!-- entitle the page to Touravel - Dreamland Aqua Park -->
    <title>Touravel - Dreamland Aqua Park</title>

</head>
<body>

    <!-- DREAMLAND AQUA PARK TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/dreamland_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/5 UAQ/UAQ 1 Dreamland Aquapark.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>DREAMLAND AQUA PARK</h1>

        <!-- Tourist Spot Description -->
        <p>
            With over 15 thrilling rides and sensibly priced dreamland aqua park is one of the best choices for a vacation spot, especially for families with kids. 
            But what's unique with them is the camping opportunity that is available for visitors for 2 nights. Experience Dreamland Aqua Park's ultimate overnight 
            camping for two days of fun, exciting rides, and unforgettable memories, or simply rent out their Cabana for one day.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="http://www.dreamlanduae.com/" target="_blank">Visit Website</a>
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
                    10AM-6PM<br />
                    10AM-6PM<br />
                    10AM-6PM<br />
                    10AM-6PM<br />
                    10AM-6PM<br />
                    10AM-6PM<br />
                    10AM-6PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/dreamland_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13382.007808423778!2d55.6594354!3d25.5875282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8afe5187d3b0c3b1!2sDreamland%20Aqua%20Park!5e1!3m2!1sen!2sae!4v1652993911853!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">atlantis restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            A place that combines dreamlike living spaces with infinite ocean and skyline views, extraordinary dining experiences, attractions, entertainment and nightlife.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13381.840288784237!2d55.660911!3d25.589026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1300dfdd8d67f29!2sAtlantis%20Restaurant!5e1!3m2!1sen!2sae!4v1652993940491!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/atlantis_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/dreamland_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Family Raft Ride
                    <br /><br />
                    Jacuzzi
                    <br /><br />
                    Pool Game
                    <br /><br />
                    Slam Dunk
                    <br /><br />
                    Aqua Play
                    <br /><br />
                    Rafting River
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