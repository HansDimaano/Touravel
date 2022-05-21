
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

    <!-- entitle the page to Touravel - Ajman Museum -->
    <title>Touravel - Ajman Museum</title>

</head>
<body>

    <!-- AJMAN MUSEUM TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/ajmanmuseum_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/4 AJM/AJM 2 Ajman Museum.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>AJMAN MUSEUM</h1>

        <!-- Tourist Spot Description -->
        <p>
            The 18th-century fortress that was once Ajman's first line of defense now houses the emirate's museum. The ethnographical exhibit gallery here focus 
            on the traditional local lifestyle, with dioramas of typical day-to-day Emirati life before the oil boom.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://ajman.travel/en/destinations/ajman-city/ajman-museum/" target="_blank">Visit Website</a>
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
                    2:30PM-8PM<br />
                    8AM-8PM<br />
                    8AM-8PM<br />
                    8AM-8PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/ajmanmuseum_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13401.414238836138!2d55.4456037!3d25.4134573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x562a16a1ef84dd73!2sAjman%20Museum!5e1!3m2!1sen!2sae!4v1652991957300!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">viking restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            The first-of-its-kind restaurant has been designed to take customers back in time. This means medieval-themed interiors, staff dressed in authentic 
            attire and even the traditional food of Vikings.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16052.588624878195!2d55.44503536431702!3d25.413118600978947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ca8370181e6cb2a!2sViking%20Restaurant!5e1!3m2!1sen!2sae!4v1652992104573!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/viking_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/ajmanmuseum_WLA.png" />

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