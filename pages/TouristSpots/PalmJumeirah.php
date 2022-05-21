
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

    <!-- entitle the page to Touravel - Palm Jumeirah-->
    <title>Touravel - Palm Jumeirah</title>

</head>
<body>

    <!-- PALM JUMEIRAH TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/palmjumeirah_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/2 DXB/DXB 3 Palm Jumeirah.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>PALM JUMEIRAH</h1>

        <!-- Tourist Spot Description -->
        <p>
            Dubbed the hottest hotel on Palm Jumeirah, FIVE Palm Jumeirah is a dare-to-be-different hotel that captures the glamour and vibe of Dubai. Set against a breathtaking backdrop of the 
            beach and Dubai Marina skyline, this lifestyle hotel boasts 470 luxurious rooms and suites with ocean or city views. The resort is a party and culinary hot spot with a range of restaurants, 
            bars, and a nightclub, inviting to a new experience every day. Whether you are looking for a gourmet dining experience or want to dance the night away, our resort creates laid back or high 
            energy choices from breakfast to the early hours as you design your stay.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.visitdubai.com/en/places-to-visit/palm-jumeirah-2" target="_blank">Visit Website</a>
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
                    Entrance to The Palm <br />
                    Jumeirah is free, and <br />
                    you do not need a ticket <br />
                    or pre-booking to visit. <br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/palmjumeirah_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53735.699369019574!2d55.09672060455697!3d25.11932298657247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f1529c2653b15%3A0x3dcabcae764a3e16!2sPalm%20Jumeirah!5e1!3m2!1sen!2sae!4v1652977923060!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">great british restaurant</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            GBR is open all-day, every day from breakfast through lunch and dinner. The venue not only offers a fabulous selection of British dishes 
            and a great british restaurant dubai menu , but also a wide-range of international plates.        
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13434.68095270538!2d55.138096!3d25.1124439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77ad5254b47fc0c!2sGreat%20British%20Restaurant!5e1!3m2!1sen!2sae!4v1652978271798!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/greatbritish_restaurant.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/palmjumeirah_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                Sky diving at the top of Palm Jumierah
                <br /><br />
                View at the Palm Observatory
                <br /><br />
                Dubai Speedboat Tour: Marina, Atlantis, Palm & Burj Al Arab
                <br /><br />
                Helicopter Flight from the Palm to the Burj Khalifa
                <br /><br />
                Dolphin Swim and Explore at Atlantis
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