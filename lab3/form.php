<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Survey</title> 
        <meta name="author" content="Nolan Cyr"> 
        <meta name="description" content="">   
    
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>
    
    <body class="if-needed">
        <header>    
            <!-- put logo here -->
            <h1>Everything that Contributes to your Carbon Footprint</h1> 
        </header>

        <nav>   
            <a href="index.php">Home</a>
            <a href="detail.php">The Main Modes of Transportation</a> 
            <a href="form.php">Survey</a> 
        </nav>
    
        <main>
            <section>
                <h2>Help figure out your effect on the environment based on your daily habits</h2>
                <form action="#" id="travelMethods" method="post">
                    <fieldset>
                        <legend>Your Contact Information</legend>
                        <p>
                            <label for="txtFirstName">First name:</label>
                            <input type="text" id="txtFirstName" name="txtFirstName">
                        </p>
                        <p>
                            <label for="txtLastName">Last name:</label>
                            <input type="text" id="txtLastName" name="xtLastName">
                        </p>
                        <p>
                            <label for="txtEmail">Email Address:</label>
                            <input type="text" id="txtEmail" name="txtEmail">
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>Your Methods of Travel</legend>

                        <p>
                            <input type="checkbox" id="chkCar" name="chkCar" value="1">
                            <label for="chkCar">Car</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkBus" name="chkBus" value="1">
                            <label for="chkBus">Bus</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkRail" name="chkRail" value="1">
                            <label for="chkRail">Rail Transport</label>
                        </p>

                        <p>
                            <input type="checkbox" id="chkPlane" name="chkPlane" value="1">
                            <label for="chkPlane">Plane</label>
                        </p>
                    </fieldset>

                    <fieldset class="radio">
                        <legend>How often do you use these methods of transport per week?</legend>

                        <p>
                            <input id="radOnce" name="transportFreq" type="radio">
                            <label class="radio-field" for="radOnce">Once a Week</label>
                        </p>

                        <p>
                            <input id="radTwoToThree" name="transportFreq" type="radio">
                            <label class="radio-field" for="radTwoToThree">Two to Three Times a Week</label>
                        </p>

                        <p>
                            <input id="radFive" name="transportFreq" type="radio">
                            <label class="radio-field" for="radFive">Five Times a Week</label>
                        </p>

                        <p>
                            <input id="radEvery" name="transportFreq" type="radio">
                            <label class="radio-field" for="radEvery">Every Day</label>
                        </p>

                        <p>
                            <input id="radMore" name="transportFreq" type="radio" >
                            <label class="radio-field" for="radMore">More than Seven Times a Week</label>
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
