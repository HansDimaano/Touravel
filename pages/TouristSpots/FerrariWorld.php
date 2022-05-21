
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

    <!-- entitle the page to Touravel - Ferrari World -->
    <title>Touravel - Ferrari World</title>

</head>
<body>

    <!-- FERRARI WORLD TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/ferrariworld_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a class="download" href="../../pdf/1 AUH/AUH 2 Ferrari.pdf" download><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>FERRARI WORLD</h1>

        <!-- Tourist Spot Description -->
        <p>
            If you love the thrill of intense speed, this is the place to be. Ferrari World Abu Dhabi offers spine-chilling and adrenaline-pumping rides and experiences 
            for all ages. The latest editions to the epic list of attractions at this world-class theme park include the chance to walk on the destination's iconic red 
            roof ... or take a zipline across it! 
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.ferrariworldabudhabi.com/" target="_blank">Visit Website</a>
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
                    CLOSED<br />
                    12PM-8PM<br />
                    12PM-8PM<br />
                    12PM-8PM<br />
                    12PM-8PM<br />
                    12PM-8PM<br />
                    CLOSED<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/ferrariworld_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14108.137811206021!2d54.6070066!3d24.4837634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6076df4876c470a9!2sFerrari%20World%20Abu%20Dhabi!5e1!3m2!1sen!2sae!4v1652956887241!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">hollywood trattoria</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Hollywood Trattoria is a counter service restaurant in Warner Bros. World Abu Dhabi. 
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14107.276598502087!2d54.58250213955076!3d24.491442700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e45b47609c891%3A0x46259b4f19fe318c!2sHollywood%20Trattoria!5e1!3m2!1sen!2sae!4v1652957038201!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/hollywood_trattoria.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/ferrariworld_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    FORMULA ROSSA: fastest roller coaster in the world.
                    <br><br>
                    FLYING ACES: 
                    highest roller coaseter loop in the world.
                    <br><br>
                    SCUDERIA CHALLENGE:
                    state-of-the-art racing simulator
                    <br><br>
                    TURBO TOWER.
                    <br><br>
                    TURBO TRACK: 
                    an epic drop from the top.
                    <br><br>
                    RC CHALLENGE.
                    <br><br>
                    FLYING WINGS.
                    <br><br>
                    FORMULA ROSSA JUNIOR.
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