<?php 
include 'top.php';

$dataIsGood = false;
$message = '';

$first = '';
$last = '';
$email = '';
$frequency = 'Once';
$car = false;
$bus = false;
$rail = false;
$plane = false;

function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {
    return (preg_match( "/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/",$testString));
}
?>

<main class="formMain">
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        // Sanitizing //
        $first = getData('txtFirstName');
        $last = getData('txtLastName');
        $email = getData('txtEmail');

        $frequency = getData('radFrequency');

        $car = (int) getData('chkCar');
        $bus = (int) getData('chkBus');
        $rail = (int) getData('chkRail');
        $plane = (int) getData('chkPlane');

        // Validating //
        $dataIsGood = true;

        //Validate First Name //
        if($first == ''){
            print '<p class="mistake">Please type in your first name.</p>';
        }
        elseif(!preg_match("/^([a-zA-Z' ]+)$/", $first)){
            print '<p class="mistake">Please type a valid first name</p>';
        }

        //Validate Last Name //
        if($last == ''){
            print '<p class="mistake">Please type in your last name.</p>';
        }
        elseif(!preg_match("/^([a-zA-Z' ]+)$/", $last)){
            print '<p class="mistake">Please type a valid last name</p>';
        }

        // Validate Email //
        if($email == ''){
            print '<p class="mistake">Please type in an email address.</p>';
            $dataIsGood = false;
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            print '<p class="mistake">Your email address contains invalid characters</p>';
            $dataIsGood = false;
        }

        // Validate Radio //
        if ($frequency != "Once" AND $frequency != "TwoOrThree" AND $frequency != "Five" AND $frequency != "Every") {
            print '<p class="mistake">Please tell us how often you use your method(s) of transport</p>';
            $dataIsGood = false;    
        }

        // Validate Checkboxes //
        $totalChecked = 0;

        if($car != 1) $car = 0;
        $totalChecked = $totalChecked + $car; //could also use += but I think this makes more sense
        
        if($bus != 1) $bus = 0;
        $totalChecked = $totalChecked + $bus; 

        if($rail != 1) $rail = 0;
        $totalChecked = $totalChecked + $rail; 

        if($plane != 1) $plane = 0;
        $totalChecked = $totalChecked + $plane;

        if($totalChecked == 0) {
            print '<p class="mistake">Please select at least one method of transport</p>';
            $dataIsGood = false;
        }

        // Save data on sql server //
        if($dataIsGood){
            try{
                $sql = 'INSERT INTO tblGreenhouseForm (fldFirst, fldLast, fldEmail, fldFrequency, 
                                                        fldCar, fldBus, fldRail, fldPlane) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
                        
                $statement = $pdo->prepare($sql);
                $data = array($first, $last, $email, $frequency, $car, $bus, $rail, $plane);

                if($statement->execute($data)){
                    $message = '<h2>Thank you your information has been saved</h2>';
                }
                else{
                    $message = '<h2>Error. Record was not saved</h2>';
                }
            }

            catch(PDOException $e){
                $message = '<p>Our servers are experiencing difficulties currently try again soon</p>';
            }
        }
    }
    ?>

        <section>
            <h2>Help figure out your effect on the environment based on your daily habits</h2>
            <form action="#" id="travelMethods" method="post">
<!--                                Textboxes                               -->
                <fieldset>
                    <legend>Your Contact Information</legend>
                    <p class="formP">
                        <label class="required" for="txtFirstName">First name:</label>
                        <input id="txtFirstName" type="text" name="txtFirstName" value="<?php print $first; ?>" required>
                    </p>
                    <p class="formP">
                        <label class="required" for="txtLastName">Last name:</label>
                        <input type="text" id="txtLastName" name="txtLastName" value="<?php print $last; ?>" required>
                    </p>
                    <p class="formP">
                        <label class="required" for="txtEmail">Email Address:</label>
                        <input type="text" id="txtEmail" name="txtEmail" value="<?php print $email; ?>" required>
                    </p>
                </fieldset>



<!--                                Checkboxes                              -->
                <fieldset class="checkbox">
                    <legend>Your Methods of Travel</legend>

                    <p class="formP">
                        <input type="checkbox" id="chkCar" name="chkCar" value="1"
                        <?php if($car) print 'checked'; ?>>
                        <label for="chkCar">Car</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkBus" name="chkBus" value="1"
                        <?php if($bus) print 'checked'; ?>>
                        <label for="chkBus">Bus</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkRail" name="chkRail" value="1"
                        <?php if($rail) print 'checked'; ?>>
                        <label for="chkRail">Rail Transport</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkPlane" name="chkPlane" value="1"
                        <?php if($plane) print 'checked'; ?>>
                        <label for="chkPlane">Plane</label>
                    </p>
                </fieldset>



<!--                                Radio                                   -->
                <fieldset class="radio">
                    <legend>How often do you use these methods of transport per week?</legend>

                    <p class="formP">
                        <input id="radOnce" name="radFrequency" type="radio" value="Once" required
                        <?php if($frequency == "Once") print 'checked'; ?>>
                        <label class="radio-field" for="radOnce">Once a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radTwoToThree" name="radFrequency" type="radio" value="TwoOrThree"
                        <?php if($frequency == "TwoOrThree") print 'checked'; ?>>
                        <label class="radio-field" for="radTwoToThree">Two to Three Times a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radFive" name="radFrequency" type="radio" value="Five"
                        <?php if($frequency == "Five") print 'checked'; ?>>
                        <label class="radio-field" for="radFive">Five Times a Week</label>
                    </p>

                    <p class="formP">
                        <input id="radEvery" name="radFrequency" type="radio" value="Every"
                        <?php if($frequency == "Every") print 'checked'; ?>>
                        <label class="radio-field" for="radEvery">Every Day</label>
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
            <?php
            print '<h2>' . $message . '</h2>';
            print '<p>Post Array:</p><pre>';
            print_r($POST);
            print '</pre>';
            ?>
        </section>
    </main>


    <?php include 'footer.php'; ?>
</body>
</html>
