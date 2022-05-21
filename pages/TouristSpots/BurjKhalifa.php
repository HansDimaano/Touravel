
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

    <!-- entitle the page to Touravel - Burj Khalifa -->
    <title>Touravel - Burj Khalifa</title>

</head>
<body>

    <!-- BURJ KHALIFA TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/burjkhalifa_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/2 DXB/DXB 1 Burj Khalifa.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>BURJ KHALIFA</h1>

        <!-- Tourist Spot Description -->
        <p>
            Soaring high at 555 meters, At the Top Burj Khalifa SKY is fittingly one of Dubai's most iconic destination. Your journey begins when you step
            into the At the Top, Burj Khalifa SKY lounge, from where you will be personally escorted to a dedicated elevator. Inside, watch in
            amazement specially-designed projections as you ascend to Level 125. Get ready to enjoy exclusive access to the redefined, highest outdoor
            observatory in the world, spread across levels 148, 125 and 124 of Burj Khalifa
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.burjkhalifa.ae/en/" target="_blank">Visit Website</a>
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
                <img src="../../images/burjkhalifa_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13425.473624415898!2d55.2714155441188!3d25.196092576527292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e1!3m2!1sen!2sae!4v1652973981374!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">dubai mall food court</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            There are two food courts in the mall; one on the lower ground level and the other on the second floor.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13425.518682193802!2d55.27382631326516!3d25.195683858302797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca46568eb7774f7!2sDubai%20Mall%20Food%20Court!5e1!3m2!1sen!2sae!4v1652974312368!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/dubai_mall.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/burjkhalifa_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Reach 'at the top' of Burj Khalifa
                    <br /><br />
                    Dine at AT.MOSPHERE
                    <br /><br />
                    Visit schools at the top for little ones
                    <br /><br />
                    Work out at the Burj club
                    <br /><br />
                    Host an event
                    <br /><br />
                    Unwind at the Lounge
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