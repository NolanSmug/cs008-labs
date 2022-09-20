<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Survey</title> <!-- figure out -->
        <meta name="author" content="Nolan Cyr"> 
        <meta name="description" content=""> <!-- figure out -->    
    
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>
    
    <body class="if-needed">
        <header>    
            <!-- put logo here -->
            <h1>Everything that Contributes to your Carbon Footprint</h1> 
        </header>

        <nav>   
            <a href="index.php">Home</a>
            <a href="detail.php">The Main Modes of Transportation</a> <!-- figure out -->
            <a href="form.php">Survey</a> <!-- figure out? -->
        </nav>
    
        <main>
            <!---------------------------figure out--------------------------------->

            <section>
                <h2>Help figure out your effect on the environment based on your daily habits</h2>
            </section>

            <section>
                <form action="#" id="primaryTravelMethod" metho="post">
                    <fieldset>
                        <legend>Your Contact Information</legend>
            
                        <label for="txtFirstName">First name:</label>
                        <input type="text" id="txtFirstName" name="txtFirstName">
                        <label for="txtLastName">Last name:</label>
                        <input type="text" id="xtLastName" name="xtLastName">
                        <label for="txtEmail">Email Address:</label>
                        <input type="text" id="txtEmail" name="txtEmail">
                    </fieldset>

                    <fieldset class="radio">
                        <legend>Your Primary Method of Travel</legend>

                        <p>
                            <input type="radio" id="radCar" name="transportMethod" value="Car">
                            <label class="radio-field" for="radCar">Car</label>
                        </p>

                        <p>
                            <input type="radio" id="radBus" name="transportMethod" value="Bus">
                            <label class="radio-field" for="radBus">Bus</label>
                        </p>

                        <p>
                            <input type="radio" id="radRail" name="transportMethod" value="Rail">
                            <label class="radio-field" for="radRail">Rail Transport</label>
                        </p>

                        <p>
                            <input type="radio" id="radPlane" name="transportMethod" value="Plane">
                            <label class="radio-field" for="radPlane">Plane</label>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>How often do you use this method of transport per week?</legend>

                        <p>
                            <input id="chkOnce" name="chkOnce" type="checkbox" value="1">
                            <label for="chkOnce">Once a Week</label>
                        </p>

                        <p>
                            <input id="chkTwoToThree" name="chkTwoToThree" type="checkbox" value="1">
                            <label for="chkTwoToThree">Two to Three Times a Week</label>
                        </p>

                        <p>
                            <input id="chkFive" name="chkFive" type="checkbox" value="1">
                            <label for="chkFive">Five Times a Week</label>
                        </p>

                        <p>
                            <input id="chkEvery" name="chkEvery" type="checkbox" value="1">
                            <label for="chkEvery">Every Day</label>
                        </p>

                        <p>
                            <input id="chkMore" name="chkMore" type="checkbox" value="1">
                            <label for="chkMore">More than Seven Times a Week</label>
                        </p>
                    </fieldset>

                    <fieldset>
                        <p>
                            <input type="Submit">
                        </p>
                    </fieldset>
                </form>
            </section>


            <section>
                <h2>Thank you</h2>
                <?php
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>';
                ?>
            </section>  
        </main>
        
        <footer>    
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
