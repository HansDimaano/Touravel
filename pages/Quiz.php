
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>

<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Quiz Page CSS -->
    <link rel="stylesheet" href="../css/QuizPage.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - UAE Quiz -->
    <title>Touravel - UAE Quiz</title>
</head>
<body>

    <!-- UAE KNOWLEDGE TEST TITLE CONTAINER -->
    <div class="title_container">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../images/Touravel_Logo-white.png" /></a>

        <!-- UAE Knowledge Test Title Text -->
        <h1>UAE KNOWLEDGE TEST</h1>
    </div>



    <!--

        NOTE:

        - The quiz checking is purely done through php code in the QuizResults.php
        - Each choices has unique name, id, and value
        - The answers will be checked based on the VALUE that has been ticked on the form (through input[type=radio])
        - Users cannot submit when one question is left unanswered (all of the questions are required to answer)

    -->



    <!-- QUIZ CONTAINER -->
    <div class="quiz_container">

        <!-- Quiz Form that leads to QuizResults.php -->
        <form action="QuizResults.php" method="post" id="quiz">

            <!-- QUESTION 1 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 1 Title Text -->
                <h2>Question 1</h2>

                <!-- Question 1 -->
                <h3>Are there any rivers in UAE?</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_1" id="question_1-answer_A" value="A" required />
                    <label for="question_1-answer_A">Yes</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_1" id="question_1-answer_B" value="B" />
                    <label for="question_1-answer_B">No</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 2 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 2 Title Text -->
                <h2>Question 2</h2>

                <!-- Question 2 -->
                <h3>What is the National Animal of the UAE?</h3>

                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_2" id="question_2-answer_A" value="A" required />
                    <label for="question_2-answer_A">Arabian Oryx</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_2" id="question_2-answer_B" value="B" />
                    <label for="question_2-answer_B">Falcon</label> <!-- Choice 2 Text Label -->
                    <!-- Choice 3 -->
                    <input type="radio" name="question_2" id="question_2-answer_C" value="c" />
                    <label for="question_2-answer_C">Camel</label> <!-- Choice 3 Text Label -->
                </div>
            </div>

            <!-- QUESTION 3 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 3 Title Text -->
                <h2>Question 3</h2>

                <!-- Question 3 -->
                <h3>UAE is one of the safest city in the world.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_3" id="question_3-answer_A" value="A" required />
                    <label for="question_3-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_3" id="question_3-answer_B" value="B" />
                    <label for="question_3-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 4 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 4 Title Text -->
                <h2>Question 4</h2>

                <!-- Question 4 -->
                <h3>UAE has the world's most impressive police cars.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_4" id="question_4-answer_A" value="A" required />
                    <label for="question_4-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_4" id="question_4-answer_B" value="B" />
                    <label for="question_4-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 5 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 5 Title Text -->
                <h2>Question 5</h2>

                <!-- Question 5 -->
                <h3>UAE population is made up of around ___ nationalities.</h3>

                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_5" id="question_5-answer_A" value="A" required />
                    <label for="question_5-answer_A">100</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_5" id="question_5-answer_B" value="B" />
                    <label for="question_5-answer_B">150</label> <!-- Choice 2 Text Label -->
                    <!-- Choice 3 -->
                    <input type="radio" name="question_5" id="question_5-answer_C" value="C" />
                    <label for="question_5-answer_C">200</label> <!-- Choice 3 Text Label -->
                </div>
            </div>

            <!-- QUESTION 6 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 6 Title Text -->
                <h2>Question 6</h2>

                <!-- Question 6 -->
                <h3>Burj Khalifa is not the tallest building in the world.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_6" id="question_6-answer_A" value="A" required />
                    <label for="question_6-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_6" id="question_6-answer_B" value="B" />
                    <label for="question_6-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 7 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 7 Title Text -->
                <h2>Question 7</h2>

                <!-- Question 7 -->
                <h3>The UAE is united with 7 Emirates.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_7" id="question_7-answer_A" value="A" required />
                    <label for="question_7-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_7" id="question_7-answer_B" value="B" />
                    <label for="question_7-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 8 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 8 Title Text -->
                <h2>Question 8</h2>

                <!-- Question 8 -->
                <h3>What is the UAE's National Symbol?</h3>

                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_8" id="question_8-answer_A" value="A" required />
                    <label for="question_8-answer_A">Ostrich</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_8" id="question_8-answer_B" value="B" />
                    <label for="question_8-answer_B">Camel</label> <!-- Choice 2 Text Label -->
                    <!-- Choice 3 -->
                    <input type="radio" name="question_8" id="question_8-answer_C" value="C" />
                    <label for="question_8-answer_C">Falcon</label> <!-- Choice 3 Text Label -->
                </div>
            </div>

            <!-- QUESTION 9 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 9 Title Text -->
                <h2>Question 9</h2>

                <!-- Question 9 -->
                <h3>Dubai has the world's longest driverless metro system, with more than 46 miles of track.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_9" id="question_9-answer_A" value="A" required />
                    <label for="question_9-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_9" id="question_9-answer_B" value="B" />
                    <label for="question_9-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- QUESTION 10 CONTAINER -->
            <div class="question_container reveal up">

                <!-- Question 10 Title Text -->
                <h2>Question 10</h2>

                <!-- Question 10 -->
                <h3>UAE created the world's first government ministry for articifial intelligence.</h3>


                <!-- CHOICES CONTAINER -->
                <div class="choices_container">

                    <!-- Choice 1 -->
                    <input type="radio" name="question_10" id="question_10-answer_A" value="A" required />
                    <label for="question_10-answer_A">True</label> <!-- Choice 1 Text Label -->
                    <!-- Choice 2 -->
                    <input type="radio" name="question_10" id="question_10-answer_B" value="B" />
                    <label for="question_10-answer_B">False</label> <!-- Choice 2 Text Label -->
                </div>
            </div>

            <!-- Submit Quiz Button -->
            <input type="submit" value="Submit Quiz" />

        </form>
    </div>

    <footer style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../images/uaequiz_bg.png');">
        <div class="all_rights_reserved">
            <p>
                Touravel - Abu Dhabi, United Arab Emirates -  +971523457891<br />
                &copy; All Rights Reserved <?php echo date("Y") ?> Touravel
            </p>
        </div>
    </footer>

    <script src="../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>