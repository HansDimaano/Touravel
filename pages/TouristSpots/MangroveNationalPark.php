
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

    <!-- entitle the page to Touravel - Mangrove National Park -->
    <title>Touravel - Mangrove National Park</title>

</head>
<body>

    <!-- MANGROVE NATIONAL PARK TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/mangroves_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/1 AUH/AUH 3 Mangrove National Park.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>MANGROVE NATIONAL PARK</h1>

        <!-- Tourist Spot Description -->
        <p>
            One of the distinguishing features of Abu Dhabi is its thriving mangrove population. Whether you head out to the Eastern Mangroves or set out to 
            explore the Jubail Mangrove Park, and you can witness firsthand the lush vegetation and the prolific ecosystem it supports. Kayaking in the mangroves is 
            also a popular sport in the capital.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://visitabudhabi.ae/en/where-to-go/parks-and-zoos/mangrove-national-park" target="_blank">Visit Website</a>
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
                    10AM-12AM<br />
                    10AM-12AM<br />
                    10AM-12AM<br />
                    10AM-12AM<br />
                    10AM-12AM<br />
                    10AM-12AM<br />
                    10AM-12AM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/mangroves_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13505.934037961391!2d54.4178006!3d24.456065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c240c7576f324df!2sEastern%20Mangrove%20National%20Park!5e1!3m2!1sen!2sae!4v1653035354775!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">Ingredients Restaurant at Anantara Eastern Mangroves</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Indulge in international and traditional Arabian dishes at Ingredients in Eastern Mangroves Hotel & Spa, a top restaurant in Abu Dhabi.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13506.956733635327!2d54.4369179!3d24.4465238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ecd39c6fbc9d483!2sIngredients%20Restaurant%20at%20Anantara%20Eastern%20Mangroves!5e1!3m2!1sen!2sae!4v1653035391352!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/ingredients_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/mangroves_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Stay in the Mangroves (Hotel)
                    <br /><br />
                    Kayaking in the Mangroves
                    <br /><br />
                    Lounge over the Mangroves 
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