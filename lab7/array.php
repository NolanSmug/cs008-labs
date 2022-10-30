<?php 
include 'top.php';

$co2CountryEmissions = array(
    array('Country', 'C02 Emissions (Million Tons)', 'C02 Per Capita (Tons)', 'Population'),
    array('China', 9876, 7.1, '1.412 billion'),
    array('United States', 4744, 14.4, '331.9 million'),
    array('India', 2310, 1.7, '1.393 billion'),
    array('Russia', 1640, 11.4, '143.4 million')
);
?>
    <main class="mainPage">
        <section class="topCountries">
            <h3>Top <?php echo count($co2CountryEmissions[0]);?> Countries GHG Emissions</h2>

            <table>
                <?php
                foreach ($co2CountryEmissions as $co2Country) {
                    print '<tr>';
                    print '<td>';
                    print $co2Country[0];
                    print '</td>';
                    print '<td>';
                    print $co2Country[1];
                    print '</td>';
                    print '<td>';
                    print $co2Country[2];
                    print '</td>';
                    print '<td>';
                    print $co2Country[3];
                    print '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>
                <tr class="citation">    
                    <td colspan="4">Citations: <cite><a href="https://worldpopulationreview.com/country-rankings/greenhouse-gas-emissions-by-country" target="_blank">
                        World Population Review (2019)</a></cite>
                </tr>
            </table>
        </section>

        <section class="globalMap">
            <h3>Global Map</h3>
            <figure>
                <img src="images/ghg-map.png" alt="Greenhouse gas map">
                <figcaption>Greenhouse Gas Emissions by Country 
                    <cite>Photo by World Population Review</cite>
                </figcaption>
            </figure>
        </section>

        <section class="china">
            <h3>China</h3> 
            <p>At almost 10,000 million tons of greenhouse gasses produced in 2019, China leads the world in GHG production. 
                Most of China's trade and production are not produced by common fossil fuels like oil, petroleum, or natural gas and instead
                coal. Coal is the dirtiest fuel in comparrison to these other fossil fuels, mainly because it releases a higher amount of carbon
                when burned (twice as much). China burns through coal for manufacturing, agriculture, mining, and electricity. Over the pandemic
                China relied even more on coal because the prices for natural gases only grew.
            </p>
        </section>

        <section class="unitedStates">
            <h3>United States</h3>
            <p>In second place, the United States produced almost 5,000 megatons of greenhouse gases in 2019. The U.S also relies heavily on transportation
                for both citizens and businesses. Planes, ships, and trucks are all used to transport goods across the country which all burn petroleum.
                The primary mode of transportation in the U.S is by car, which is why the carbon emissions per capita is drastically higher in comparrison
                to other countries on the list. Almost everyone travels by car to get around, mainly because that is how the infrastructure was built.  </p>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
