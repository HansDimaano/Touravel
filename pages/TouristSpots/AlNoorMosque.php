
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

    <!-- entitle the page to Touravel - Al Noor Mosque -->
    <title>Touravel - Al Noor Mosque</title>

</head>
<body>

    <!-- AL NOOR MOSQUE TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/alnoormosque_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/3 SHJ/SHJ 3 Al Noor Mosque.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>AL NOOR MOSQUE</h1>

        <!-- Tourist Spot Description -->
        <p>
            Located in the heart of Sharjah, the Al Noor Mosque is amongst the most beautiful mosques in the city. It dominates the city's skyline owing to its fabulous 
            architecture. In Arabic, the word 'Noor' means light, and Al Noor, true to its meaning, stands magnificently alongside the Khalid Lagoon on Buhaira Corniche. 
            Al Noor is the first ever mosque in United Arab Emirates to be open to non-Muslim visitors.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.visitsharjah.com/en/activities/culture/al-noor-mosque/" target="_blank">Visit Website</a>
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
                <img src="../../images/alnoormosque_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.5376091240087!2d55.38492621481747!3d25.334731483832403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bc3f0dd1cdd%3A0x11889999030fe919!2sAl%20Noor%20Masjid!5e1!3m2!1sen!2sae!4v1652984025385!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">fen cafe & restaurant lagoon branch</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Created by Sheikha Hoor Al Qasimi, Fen Cafe and Restaurant serves up some of the best chic and contemporary cuisine in Sharjah
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.5384734349645!2d55.38624751481744!3d25.334700283832376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bdac7bd6c3f%3A0x8b1e8ed6241f6de8!2sFen%20Cafe%20%26%20Restaurant%20-%20Lagoon%20Branch!5e1!3m2!1sen!2sae!4v1652983857360!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/fen_cafe.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/alnoormosque_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Photography
                    <br /><br />
                    Walk in tours & explore the Mosque
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