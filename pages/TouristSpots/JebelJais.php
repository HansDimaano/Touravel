
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

    <!-- entitle the page to Touravel - Jebel Jais -->
    <title>Touravel - Jebel Jais</title>

</head>
<body>

    <!-- JEBEL JAIS TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/jebeljais_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/6 RAK/RAK 1 Jebel Jais.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>JEBEL JAIS MOUNTAINS</h1>

        <!-- Tourist Spot Description -->
        <p>
            Jebel Jais, the highest point in the UAE, is part of the beautiful Hajar mountain range, which was constructed about 70 million years ago 
            in the eastern part of Ras Al Khaimah, UAE, and Oman. Jebel Jais, at 1,934 meters above sea level, offers breathtaking views and exhilarating 
            adventures to all visitors.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://visitjebeljais.com/" target="_blank">Visit Website</a>
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
                    A physical distance of two <br />
                    metres should remain between <br />
                    individuals throughout the <br />
                    experience. <br /><br />
                    9am to 3pm during Ramadan, <br /><br />
                    9am to 5pm after <br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/jebeljais_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13341.91783923394!2d56.1424297!3d25.9436748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ad5c210abe1de21!2sJebel%20Jais!5e1!3m2!1sen!2sae!4v1652996156365!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">seven heights restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Seven Heights Restaurant is located at: Rixos Bab Al Bahr, Al Marjan Island - North Ras Al Khaimah - United Arab Emirates
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13373.510934325892!2d55.7493692!3d25.6633963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x78e888d16a2cda2a!2sSeven%20Heights%20Restaurant!5e1!3m2!1sen!2sae!4v1652996212886!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/seven_heights.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/jebeljais_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Jais Flight (The longest zipline in the world)
                    <br /><br />
                    Jais Sky Tour
                    <br /><br />
                    Jais Ropes Course
                    <br /><br />
                    Jais Hiking
                    <br /><br />
                    Jais Viewing Deck Park
                    <br /><br />
                    Jais Sledder
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