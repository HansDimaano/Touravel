
<!-- CODES THAT ARE REPEATED IN SEVERAL PAGES -->

<!-- main purpose for this is to avoid repetition in html code -->

<?php
	
// for linking touravel website icon (only for home page due to source links; found in <head> tag)
$touravel_icon_home = '<link rel="icon" type="image/png" sizes="32x32" href="images/Touravel_Icon-32x32.png">
                       <link rel="icon" type="image/png" sizes="96x96" href="images/Touravel_Icon-96x96.png">
                       <link rel="icon" type="image/png" sizes="16x16" href="images/Touravel_Icon-16x16.png">';


// for header navigation (only for home page due to source links; found right after the <body> tag)
$header_home = '<header>
                    <a class="logo" href="pages/Touravel_OurStory.php"><img src="images/Touravel_Logo-white.png" /></a>
                    <a href="index.php">Home</a>
                    <a href="pages/Touravel_SevenEmirates.php">Seven Emirates</a>
                    <a href="pages/Touravel_AboutUAE.php">About UAE</a>
                    <a href="pages/Touravel_Offers.php">Offers</a>
                    <a href="pages/Touravel_OurStory.php">Our Story</a>
                </header>';

// for linking touravel website icon (for all pages except home page due to source links; found in <head> tag)
$touravel_icon_general = '<link rel="icon" type="image/png" sizes="32x32" href="../images/Touravel_Icon-32x32.png">
                          <link rel="icon" type="image/png" sizes="96x96" href="../images/Touravel_Icon-96x96.png">
                          <link rel="icon" type="image/png" sizes="16x16" href="../images/Touravel_Icon-16x16.png">';

// for header navigation (for all pages except home page due to source links; found right after the <body> tag)
$header_general = '<header>
                       <a class="logo" href="Touravel_OurStory.php"><img src="../images/Touravel_Logo-white.png" /></a>
                       <a href="../index.php">Home</a>
                       <a href="Touravel_SevenEmirates.php">Seven Emirates</a>
                       <a href="Touravel_AboutUAE.php">About UAE</a>
                       <a href="Touravel_Offers.php">Offers</a>
                       <a href="Touravel_OurStory.php">Our Story</a>
                   </header>';

// for footer code of our story page (the our story page footer only shows the "all rights reserved" portion)
$footer_ourstory = '<footer>
                        <div class="all_rights_reserved">
                            <p>
                                Touravel - Abu Dhabi, United Arab Emirates -  +971523457891<br />
                                &copy; All Rights Reserved <?php echo date("Y") ?> Touravel
                            </p>
                        </div>
                    </footer>

                    <script src="../javascript/Header_and_Footer_Script.js"></script>';

$footer_general = '<footer>
                        <div class="content">
                            <div class="touravel">
                                <img src="../images/Touravel_Logo-white.png" />
                                <p>
                                    Touravel guarantees you in  providing the finest and easiest tour guides.
                                    <br /> <br />
                                    We will ensure to offer your the cheapest and latest deals!
                                    <br /> <br />
                                    Let us go touravel !!!
                                </p>
                            </div>
                            <div class="connect_us">
                                <h3>CONNECT WITH US</h3>
                                <p>
                                    Let us stay connected! Do not hesitate to reach out to us by sending us an Email.
                                </p>
                                <form method="post" name="connect_form" action="">
                                    <textarea name="Message" placeholder="Write your message here." required></textarea>
                                    <input type="submit" name="Submit" value="SEND EMAIL" />
                                </form>
                            </div>
                            <div class="explore">
                                <h3>EXPLORE</h3>
                                <a>Abu Dhabi</a>
                                <a>Dubai</a>
                                <a>Sharjah</a>
                                <a>Ajman</a>
                                <a>Umm Al Quwain</a>
                                <a>Ras Al-Khaimah</a>
                                <a>Fujairah</a>
                            </div>
                        </div>
                        <div class="all_rights_reserved">
                            <p>
                                Touravel - Abu Dhabi, United Arab Emirates -  +971523457891<br />
                                &copy; All Rights Reserved Touravel
                            </p>
                        </div>
                    </footer>

                    <script src="../javascript/Header_and_Footer_Script.js"></script>';

?>