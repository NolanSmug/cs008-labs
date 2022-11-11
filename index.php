<?php 
include 'top.php';
?>
    <main class="mainPage">
        <section class="emitCarbon">
            <h2 class="howEnginesEmit">How Engines Emit Carbon Dioxide</h2>
            <p class="howEnginesEmitP">Engines run off of energy found in fuel and gasoline and convert it into mechanical energy. 
            This physical motion the engine produces is typically used to turn the wheels of a vehicle, spin 
            a propeller on an airplane, or even thrust a rocket upwards. For it to run, the internal combustion 
            engine in cars combusts the carbon (C) and oxygen (O2) atoms found in gasoline, producing carbon dioxide 
            (CO2).</p>
        </section>

        <section class="carbonEffects">
            <h2>Carbon Dioxide Effects</h2> 
            <p>Carbon dioxide is one of the five major greenhouse gases (listed below). When these greenhouse gases are emittied into 
            earth's atmosphere, they create what is known as the greenhouse effect. The greenhouse effect is where solar
            energy from our sun is absorbed by these greenhouse gases (primarily CO2) and trapped. With these greenhouse
            gases, the solar energy cannot escape out of earth's atmosphere once it has entered it, essentially warming up 
            our planet slowly. This greenhosue effect is a natural occurance and regulates the Earth's temperature. However
            too much GHG emissions will have harmful effects on our environment.</p>
            
            <figure>
                <img src="images/ghg_model.png" alt="Greenhouse gas model.">
                <figcaption>Visual Representation of Greenhouse Gasses
                    <cite>Photo by Newsela team</cite>
                </figcaption>
            </figure>
            
        </section>

        <section class="someData">
            <h2>Some Data</h2>
            <p><strong>The Major GHGs and their Percent Emissions</strong></p>
            <ol>
                <li class="odd">Carbon Dioxide - 79%</li>
                <li class="even">Methane - 11%</li>
                <li class="odd">Nitrous Oxide - 7%</li>
                <li class="even">Flourinated Gases - 3%</li>
            </ol>   
            <cite class="listCite"> <a href="https://www.epa.gov/report-environment/greenhouse-gases">Greenhouse Gases</a></cite> 
        </section>

        <section class="deeperDive">
            <h2>Deeper Dive into the Greenhouse Gases</h2>
            <table>
                <caption class="tableCaption"><strong>Five Greenhouse Gases</strong></caption>
                <tr class="tabHeadings">    
                        <th>Greenhouse Gas</th>
                        <th>Produced By</th>
                        <th>Lifespan</th>

                

                <?php
                $sql = 'SELECT fldGas, fldProduced, fldLifespan FROM tblGreenhouse';

                $statement = $pdo->prepare($sql);
                $statement->execute();

                $records = $statement->fetchAll();

                foreach ($records as $record) {
                    print '<tr>';
                    print '<td>' . $record['fldGas'] . '</td>';
                    print '<td>' . $record['fldProduced'] . '</td>';
                    print '<td>' . $record['fldLifespan'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>

                <tr class="citation">    
                    <td colspan="3">Citations: <cite><a href="https://commons.wikimedia.org/w/index.php?title=File:Greenhouse_gas_summary.PNG&oldid=560184487" target="_blank">
                        Wikimedia Commons</a></cite>
                    </td>
                </tr>
            </table>
        </section> 

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
