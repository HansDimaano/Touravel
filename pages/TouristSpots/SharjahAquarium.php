
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

    <!-- entitle the page to Touravel - Sharjah Aquarium -->
    <title>Touravel - Sharjah Aquarium</title>

</head>
<body>

    <!-- SHARJAH AQUARIUM TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/sharjahaquarium_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/3 SHJ/SHJ 1 Sharjah Aquarium.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>SHARJAH AQUARIUM</h1>

        <!-- Tourist Spot Description -->
        <p>
            Sharjah Aquarium is a place where tourists can to a wide range of marine life. The aquarium comprises of 20 large tanks housing a 
            large variety of oceanic marine life. The main purpose of this place was to encourage the conservation of marine life.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.visitsharjah.com/en/activities/wildlife/sharjah-aquarium/" target="_blank">Visit Website</a>
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
                    8AM - 8PM <br />
                    8AM - 8PM <br />
                    8AM - 8PM <br />
                    2PM- 8PM <br />
                    8AM- 8PM <br />
                    CLOSED <br />
                    8AM - 8PM <br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/sharjahaquarium_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d861692.5207601328!2d54.3810616!3d24.8448255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5b082b96861f%3A0x1401d31b640e5fea!2sSharjah%20Aquarium!5e1!3m2!1sen!2sae!4v1652981693093!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">burj al khan restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Burj Al Khan is a restaurant located in UAE, serving a selection of Cafeteria that delivers across Al Manakh, Al Falaj and Al Azra.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d861682.6922872559!2d54.3841457!3d24.8462369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ba6158368bb%3A0xbc125448f6cb13ae!2sChick%20Burg%20restaurant!5e1!3m2!1sen!2sae!4v1652981728174!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Dining Restaurant Image -->
            <img src="../../images/burjalkhan_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/sharjahaquarium_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Discover unique marine life at the aquarium in Sharjah
                    <br /><br />
                    Learn more about the underwater ecosystem
                    <br /><br />
                    Make sure to take photos  
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