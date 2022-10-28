<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);

$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab 7 - Carbon Dioxide Emissions</title>
        <meta name="author" content="Nolan Cyr">
        <meta name="description" content="Our atmosphere is constantly trapping more and more heat energy from our sun due to Greenhouse Gases. 
                                Some of these Greenhouse Gasses come from naturally occurring events, however human made GHGs can lead to an imbalance.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>
    
<?php 
include 'header.php';
include 'nav.php';

print '<body class="' . $pathParts['filename']. '">';

print '<!-- #################### Start of Body Element ###################### -->';
?>
