
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

    <!-- entitle the page to Touravel - Khor Fakkan -->
    <title>Touravel - Khor Fakkan</title>

</head>
<body>

    <!-- KHOR FAKKAN TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/khorfakkan_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/3 SHJ/SHJ 2 Khor Fakkan.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>KHOR FAKKAN</h1>

        <!-- Tourist Spot Description -->
        <p>
            Situated on the eastern coast of the United Arab Emirates, the city of Khor Fakkan is an exclave of the Emirate of Sharjah and is nothing less than a
            paradise on Earth. With the Khor Fakkan Beach present on the banks of Gulf of Oman and the Bay of Khor Fakkan, the city is geographically surrounded by 
            the Hajar Mountains on its western end.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.visitsharjah.com/en/regions/east-coast/khorfakkan/" target="_blank">Visit Website</a>
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
                    Entrance to The city, <br />
                    & beach is free, and <br />
                    you do not need a ticket <br /> 
                    or pre-booking to visit. <br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/khorfakkan_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107276.20724688782!2d56.22537576061488!3d25.34036699055432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef44f95b0b473b9%3A0x414e87538e5932e2!2sKhor%20Fakkan%20-%20Sharjah!5e1!3m2!1sen!2sae!4v1652982549298!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">khorfakkhan restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Khorfakkan Restaurant is an Arabic, Indian with Italian food eatery with an affection for flavour and style.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1724275.2945648695!2d54.2532354!3d24.780825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef44f9d67a3e937%3A0x4a66c3de43ea8dff!2sKhorfakkan%20Restaurant!5e1!3m2!1sen!2sae!4v1652982664639!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/khorfakkan_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/khorfakkan_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    beaching
                    <br /><br />
                    snorkeling
                    <br /><br />
                    swimming
                    <br /><br />
                    sunbathing
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