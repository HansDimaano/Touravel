
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

    <!-- entitle the page to Touravel - Umm Al Quwain Museum -->
    <title>Touravel - Umm Al Quwain Museum</title>

</head>
<body>

    <!-- UMM AL QUWAIN MUSEUM< TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/uaqmuseum_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/5 UAQ/UAQ 2 Umm Al Quwain National Museum.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>UMM AL QUWAIN NATIONAL MUSEUM</h1>

        <!-- Tourist Spot Description -->
        <p>
            This 250-year-old landmark was previously the Royal family's residence, known as the Umm Al Quwain Fort at the time. It is now the UAE's official museum. 
            This museum displays the history of the UAE in one spectacular castle, with visitors ranging from GCC expats to school field excursions. The museum houses 
            a priceless collection of artifacts unearthed from adjacent sites. They transport you back in time and assist you in gaining a better grasp of UAE culture 
            and heritage.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.bayut.com/mybayut/umm-al-quwain-museum-guide/" target="_blank">Visit Website</a>
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
                    7AM-8PM<br />
                    7AM-8PM<br />
                    7AM-8PM<br />
                    7AM-8PM<br />
                    7AM-8PM<br />
                    7AM-8PM<br />
                    7AM-8PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/uaqmuseum_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13382.393522905628!2d55.5706758!3d25.5840792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a6feb4a7dd2c32a!2sUAQ%20National%20Museum%20-%20Al%20Ali%20Fort!5e1!3m2!1sen!2sae!4v1652994538593!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">kashmir restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Kashmir restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but we also offer take-out and food delivery services.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d860643.2148398346!2d54.4689834!3d24.9950878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5ffc90a952ad7%3A0xd661ece3346ab5f5!2sKashmir%20restaurant!5e1!3m2!1sen!2sae!4v1652994571390!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/kashmir_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/uaqmuseum_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Sightseeing
                    <br /><br />
                    Museum Tour
                    <br /><br />
                    Photography
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