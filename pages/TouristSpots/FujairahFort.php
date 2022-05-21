
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

    <!-- entitle the page to Touravel - Fujairah Fort -->
    <title>Touravel - Fujairah Fort</title>

</head>
<body>

    <!-- FUJAIRAH FORT TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/fujairahfort_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/7 FJH/FJH 1 Fujairah Fort.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>FUJAIRAH FORT</h1>

        <!-- Tourist Spot Description -->
        <p>
            Considered as the oldest fort in UAE, Fujairah Fort once served as a defensive structure, as well as the residence of the ruling family. 
            It was the only stone building along the Fujairah coast for many centuries. Established in the year 1670, Fujairah Fort reflects the profound 
            past of the region. It is a mud-brick building comprising of three main sections, numerous halls, one square tower and two round towers.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.tripadvisor.com/Attraction_Review-g311321-d13587690-Reviews-Fujairah_Fort-Fujairah_Emirate_of_Fujairah.html" target="_blank">Visit Website</a>
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
                    9AM-2PM<br />
                    9AM-2PM<br />
                    9AM-2PM<br />
                    9AM-2PM<br />
                    9AM-2PM<br />
                    9AM-2PM<br />
                    9AM-2PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/fujairahfort_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1723662.845444595!2d54.247872!3d24.8248707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef4f8444c57e4d9%3A0xab6c9e5e43f4820d!2sFujairah%20Fort!5e1!3m2!1sen!2sae!4v1653032343667!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">eeva cafeteria & restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            This place has the best falafel in Fujairah, also try the chicken sandwich or potato sandwich, one of the oldest cafeterias but old is gold!
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13433.125442897657!2d56.341649!3d25.126594!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x793eb70cd318a3c4!2sEeva%20Cafeteria!5e1!3m2!1sen!2sae!4v1653032377723!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/eeva_cafeteria.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/fujairahfort_WLA.png" />

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