<?php 
include 'top.php';
?>
    <main class="formMain">

        <section>
            <h2>Help figure out your effect on the environment based on your daily habits</h2>
            
            <?php
            if($_SERVER["REQUEST_METHOD"] == 'POST'){

                // Sanitizing //
                $email = getData('txtEmail');

                $frequency = getData('radFrequency');

                $car = (int) getData('chkCar');
                $car = (int) getData('chkBus');
                $car = (int) getData('chkRail');
                $car = (int) getData('chkPlane');
            ?>
         
         
            <form action="#" id="travelMethods" method="post">
            

<!--                                Textboxes                               -->
                <fieldset>
                    <legend>Your Contact Information</legend>
                    <p class="formP">
                        <label for="txtFirstName">First name:</label>
                        <input type="text" id="txtFirstName" name="txtFirstName">
                    </p>
                    <p class="formP">
                        <label for="txtLastName">Last name:</label>
                        <input type="text" id="txtLastName" name="xtLastName">
                    </p>
                    <p class="formP">
                        <label for="txtEmail">Email Address:</label>
                        <input type="text" id="txtEmail" name="txtEmail">
                    </p>
                </fieldset>


<!--                                Checkboxes                              -->
                <fieldset class="checkbox">
                    <legend>Your Methods of Travel</legend>

                    <p class="formP">
                        <input type="checkbox" id="chkCar" name="chkCar" value="1">
                        <label for="chkCar">Car</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkBus" name="chkBus" value="1">
                        <label for="chkBus">Bus</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkRail" name="chkRail" value="1">
                        <label for="chkRail">Rail Transport</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkPlane" name="chkPlane" value="1">
                        <label for="chkPlane">Plane</label>
                    </p>
                </fieldset>

<!--                                Radio                                   -->
                <fieldset class="radio">
                    <legend>How often do you use these methods of transport per week?</legend>

                    <p class="formP">
                        <input id="radOnce" name="traFreq" type="radio" value="Once">
                        <label class="radio-field" for="radOnce">Once a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radTwoToThree" name="traFreq" type="radio" value="TwoOrThree">
                        <label class="radio-field" for="radTwoToThree">Two to Three Times a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radFive" name="traFreq" type="radio" value="Five">
                        <label class="radio-field" for="radFive">Five Times a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radEvery" name="traFreq" type="radio" value="Every">
                        <label class="radio-field" for="radEvery">Every Day</label>
                    </p>

                    <p class="formP">
                        <input id="radMore" name="traFreq" type="radio" value="More">
                        <label class="radio-field" for="radMore">More than Seven Times a Week</label>
                    </p>
                </fieldset>

<!--                                Submit                                  -->
                <fieldset>
                    <p class="submitButton">
                        <input type="Submit" name="btnSubmit">
                    </p>
                </fieldset>
            </form>
        </section>

        <section class="postArray">
            <h2>Thank you</h2>
            <?php
            print '<p>Post Array:</p><pre>';
            print_r($_POST);
            print '</pre>';
            ?>
        </section>  
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
