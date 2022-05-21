
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

    <!-- entitle the page to Touravel - Wadi Shawka -->
    <title>Touravel - Wadi Shawka</title>

</head>
<body>

    <!-- WADI SHAWKA TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/wadishawka_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/6 RAK/RAK 3 Wadi Shawka.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>WADI SHAWKA</h1>

        <!-- Tourist Spot Description -->
        <p>
            Wadi Shawka is a popular hiking destination in Ras-al-Khaimah and is considered to be an exploration hike because the trail offers an all-in-one 
            experience like off-road drives, pool dips, natural springs, greenery and the mountains. One can venture out to the Shawka trail because of its 
            challenging route and the picturesque beauty of mountains as the backdrop.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.tripadvisor.com/Attraction_Review-g298063-d10547340-Reviews-Wadi_Shawka-Ras_Al_Khaimah_Emirate_of_Ras_Al_Khaimah.html" target="_blank">Visit Website</a>
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
                <img src="../../images/wadishawka_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1723662.845444595!2d54.1021636!3d24.8248707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5a860924ce5f1%3A0xde4bf3141b96ff8b!2sWadi%20Shawka!5e1!3m2!1sen!2sae!4v1652997369237!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">the farm house</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Indulge in a rustic farmhouse at the heart of the desert. Offering guests fresh food from land, air, and sea. Farmhouse is the signature dining 
            restaurant that specializes in wild meats, homegrown vegetables, and other fresh ingredients
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3443013.9686649945!2d52.9689889!3d24.9793357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5e744f4a8edb9%3A0x94502ba4d6753865!2sThe%20Farmhouse!5e1!3m2!1sen!2sae!4v1652997396962!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/the_farm.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/wadishawka_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Sightseeing
                    <br /><br />
                    Photography
                    <br /><br />
                    Hike
                    <br /><br />
                    Camping
                    <br /><br />
                    Off-roading
                    <br /><br />
                    Canyoning
                    <br /><br />
                    Cycling or Biking
                    <br /><br />
                    Picnic
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