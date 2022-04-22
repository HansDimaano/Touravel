
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Our Story Page CSS -->
    <link rel="stylesheet" href="../css/OurStoryPage.css" />

    <!-- link online vector icons CSS (for phone and email icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Our Story -->
    <title>Touravel - Our Story</title>

</head>
<body>

    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>



    <!-- ABOUT TOURAVEL CONTAINER -->
    <div class="title_container">

        <!-- About Touravel Image -->
        <div class="about_touravel">
            <img src="../images/about_touravel.png" />
        </div>

        <!-- About Touravel Description -->
        <p>
            Touravel is committed to providing you with choice and value for your travel around UAE. 
            Check our best offers for more flexibility and efficiency in planning your journey. 
            Visit our travel agency partner, Doravel Agency, for more affordable deals and tour packages.<br><br>

            Touravel serves 21 UAE tourist spots and 21 best hotels on our website, precisely 3 for each Emirate. 
            Our website also offers a variety of useful and fun information about the UAE to serve as an encouragement 
            to visit and explore the country. <br><br>

            The Touravel team will ensure to give you the best service and experience upon your UAE journey.
            So what are you waiting for? Book your tour with us now!
        </p>
    </div>


    <!-- MEET OUR TEAM CONTAINER -->
    <div class="meet_our_team">

        <!-- Meet our team subheading -->
        <div class="subheading">
            <h3>MEET OUR TEAM</h3>
        </div>

        <!-- Team Description as a whole -->
        <div class="meet_our_team_desc">
            <div class="desc_img "></div>
            <p class="reveal right">
                Our collaborative team in Touravel guarantees to give their best effort in providing the finest
                and easiest tour guides. <br /><br />

                Touravelers will ensure to offer your the cheapest and latest deals!
            </p>
        </div>

        <!-- Touravel Members Individual Description -->
        <div class="meet_our_team members">

            <!-- Erlin Fernandez Description -->
            <div class="member reveal right">
                <div class="member_desc left erlin">
                    <h3>Erlin Fernandez</h3>
                    <p>
                        I'm Erlin Fernandez the UI Designer of Touravel, and I've been sharing my creativeness with my team since 2020.
                        Touravel for me is a place of opportunity, and a family to grow with, when it comes to my skills & character.
                    </p>
                </div>
                <img src="../images/erlin_profile.png" class="right" />
            </div>

            <!-- Hans Dimaano Description -->
            <div class="member reveal left">
                <img src="../images/hans_profile.png" class="left" />
                <div class="member_desc right hans">
                    <h3>Hans Dimaano</h3>
                    <p>
                        I'm Hans Dimaano, the Website Programmer of Touravel, and I've been working as a website developer for 6 years now.
                        Our group shares a united interest in travel opportunities in UAE. Hence, started the idea of making a "Touravel" website.
                    </p>
                </div>
            </div>

            <!-- Gerald Nepomuceno Description -->
            <div class="member reveal right">
                <div class="member_desc left gerald">
                    <h3>Gerald Nepomuceno</h3>
                    <p>
                        I'm Gerald Nepomuceno, the Documentarist of Touravel, and I've been collecting documentaries of my team's progress. 
                        Touravel is the best UAE travel website you can ever see because it consists of one of the best hardworking groups.
                    </p>
                </div>
                <img src="../images/gerald_profile.png" class="right" />
            </div>

            <!-- Saker Alam Description -->
            <div class="member reveal left">
                <img src="../images/saker_profile.png" class="left" />
                <div class="member_desc right saker">
                    <h3>Saker Alam</h3>
                    <p>
                        I'm Saker Alam, the Researcher of Touravel, and I've been researching the greatest hidden gems in UAE. 
                        Travelling UAE is one of the best decisions of my life, and working at Touravel makes it much better!
                    </p>
                </div>
            </div>

            <!-- Karl Lariosa Description -->
            <div class="member reveal right">
                <div class="member_desc left karl">
                    <h3>Karl Lariosa</h3>
                    <p>
                        I'm Karl Lariosa, the Beta-Tester of Touravel, and I've been beta-testing new websites and games my entire life. 
                        Touravel has one of the most open-minded groups I have ever worked with and they're accepting constructive criticism.
                    </p>
                </div>
                <img src="../images/karl_profile.png" class="right" />
            </div>
        </div>


    </div>


    <!-- CONTACT DETAILS CONTAINER -->
    <div class="contact_details">

        <!-- Contact details subheading -->
        <div class="subheading">
            <h3>CONTACT DETAILS</h3>
        </div>

        <!-- Touravel Logo -->
        <img src="../images/Touravel_Logo-white.png" />

        <!-- Contacts Info container -->
        <div class="contacts reveal up">

            <img src="../images/pin.png" /> <!-- Location Pin Image -->

            <h3>LULU ISLANDS</h3> <!-- Lulu Islands Heading -->

            <!-- More details -->
            <div class="details">

                <!-- Address info -->
                <div class="address">
                    <p>
                        LUKE WATT CHERA <br />
                        69TH FLOOR, ULUL STATION <br />
                        ULUL STATION, 399932 <br />
                    </p>
                </div>

                <!-- Social info -->
                <div class="socials">
                    <p>
                        <i class="fa fa-phone"></i>  (02)568524418<br />
                        <i class="fa fa-phone"></i>  +971523457891 <br />
                        <i class="fa fa-envelope"></i>  lukewattchera@gmail.com <br />
                    </p>
                </div>
            </div>
        </div>


        <!-- Contacts Interactions section -->
        <div class="interactions reveal up">

            <!-- Send Email section -->
            <div class="send_email">

                <!-- Message Form (all our required to be filled up to send an email) -->
                <form method="post" name="email_form" action="../data/send_email.php" style="width: 100%">

                    <input type="text" name="Name" placeholder="Name" maxlength="25" class="left_input" required/>
                    <input type="text" name="Subject" placeholder="Subject" maxlength="50" class="right_input" required />
                    <textarea name="Message" placeholder="Message" required></textarea>
                    <input type="submit" name="Submit" value="Send Message"/>

                </form>
            </div>

            <!-- Google Map and Social Media section -->
            <div class="g_map">

                <!-- Google Map Iframe of Lulu Islands -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29044.62400915915!2d54.32721993275511!3d24.500074390394893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6429b033f581%3A0xb417d84700b09a36!2sAl%20Lulu%20Island!5e0!3m2!1sen!2sae!4v1649419472406!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <!-- Social Media icons -->
                <div class="social_media">

                    <!-- Facebook Link -->
                    <a href="https://www.facebook.com/people/Luke-Watt-Chera/100079205059573/" target="_blank">
                        <img src="../images/facebook_logo.png" />
                    </a>

                    <!-- Twitter Link -->
                    <a href="https://twitter.com/Luke_O_Luke_O" target="_blank">
                        <img src="../images/twitter_logo.png" />
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- (from codes.php) include the footer code only for our story page -->
    <?php echo $footer_ourstory ?>


    <!-- Link the Reveal Animations Script  -->
    <script src="../javascript/Reveal_Animations_Script.js"></script>

</body>
</html>