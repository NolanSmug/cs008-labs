<?php 
include 'top.php';
?>

<main class="sql">
    <h2>Lab 8</h2>
    <p>Create Table SQL</p>

    <pre>
        CREATE TABLE tblGreenhouse(
            pmkGreenhouseId INT AUTO_INCREMENT PRIMARY KEY,
            fldGas VARCHAR(200),
            fldProduced VARCHAR(200),
            fldLifespan VARCHAR(40)
        )
    </pre>

    <p>Insert Data SQL</p>

    <pre>
        INSERT INTO tblGreenhouse
        (fldGas, fldProduced, fldLifespan)
        VALUES
        ("Carbon Dioxide:", "deforestation, burning fossil fuels", "100 yrs"),
        ("Methane", "agriculture, livestock", "12 yrs"),
        ("Nitrous Oxide", "fertilizer use", "115 yrs"),
        ("Ozone", "natural process", "short"),
        ("Chloroflorocarbons (CFC)", "man-made, consumer goods", "1000 yrs")
    </pre>

    <h2>Lab 9</h2>
    <p>Create Form Table SQL</p>

    <pre>
        CREATE TABLE tblGreenhouseForm(
            pmkGreenhouseForm int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldFirst varchar(50) DEFAULT NULL,
            fldLast varchar(50) DEFAULT NULL,
            fldEmail varchar(50) DEFAULT NULL,
            fldFrequency varchar(11) DEFAULT NULL,
            fldCar tinyint(1) DEFAULT 0,
            fldBus tinyint(1) DEFAULT 0,
            fldRail tinyint(1) DEFAULT 0,
            fldPlane tinyint(1) DEFAULT 0
        )
    </pre>

    <p>Inserted Sample Form Data SQL</p>

    <pre>
        INSERT INTO tblGreenhouseForm
        (pmkGreenhouseForm, fldFirst, fldLast, fldEmail, fldFrequency, fldCar, fldBus, fldRail, fldPlane)
        VALUES
        (1, 'Nolan', 'Cyr', 'nolan.cyr@uvm.edu', 'Every', 0, 0, 1, 0);
    </pre>



</main>
<?php include 'footer.php'; ?>
</body>
</html>