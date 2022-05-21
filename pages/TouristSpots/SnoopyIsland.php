
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

    <!-- entitle the page to Touravel - Snoopy Island -->
    <title>Touravel - Snoopy Island</title>

</head>
<body>

    <!-- SNOOPY ISLAND TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/snoopyisland_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/7 FJH/FJH 2 Snoopy Island.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>SNOOPY ISLAND</h1>

        <!-- Tourist Spot Description -->
        <p>
            Snoopy Island has become a coveted spot for various watersports, activities and music festivals. Snoopy island gets its name from the interestingly 
            haped rock that looks like the cartoon character Snoopy lying on its back. The popular water activities here are snorkelling and diving. The area is 
            surrounded by beautiful reefs teeming with shoals of marine life where you can occasionally spot turtles and small sharks. The island also provides 
            advanced classes on diving under its PADI regulated four-day course. Apart from water activities, one can stay at one of Sandy Beach Resort's many 
            beautiful villas by the beach or set up a tent and barbeque. 
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://sandybeach.ae/" target="_blank">Visit Website</a>
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
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/snoopyisland_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.161633948916!2d56.36174621482096!3d25.492238783759724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef437e63c3bc80b%3A0xf45544f62bf3c27f!2sSnoopy%20Island!5e1!3m2!1sen!2sae!4v1653033443893!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">bahari grill</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Bahari Grill let you relax under the sun and feel the warm sand with a view of clear waters of the Indian Ocean sipping on a refreshing cocktail. 
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13391.670970799474!2d56.3628101!3d25.5009906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9b05354debac107!2sBahari%20Grill!5e1!3m2!1sen!2sae!4v1653033487564!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/bahari_grill.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/snoopyisland_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Snorkeling
                    <br /><br />
                    Camping
                    <br /><br />
                    Diving & Scuba Diving
                    <br /><br />
                    Photography
                    <br /><br />
                    Sightseeing
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