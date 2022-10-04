<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab 4 - Carbon Dioxide Emissions</title>
        <meta name="author" content="Nolan Cyr">
        <meta name="description" content="Our atmosphere is constantly trapping more and more heat energy from our sun due to Greenhouse Gases. 
                                Some of these Greenhouse Gasses come from naturally occurring events, however human made GHGs can lead to an imbalance.">    
    
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>
    
    <body class="if-needed">
        <header>    
            <!-- put logo here -->
            <h1>Greenhouse Gases</h1>
        </header>

        <nav>   
            <a href="index.php">Home</a>
            <a href="detail.php">Modes of Transport</a> 
            <a href="form.php">Survey</a> 
        </nav>
    
        <main>
            <h1>Where does Carbon Dioxide come from?</h1>

            <section>
                <h2>How Engines Emit Carbon Dioxide</h2>
                <p>Engines run off of energy found in fuel and gasoline and convert it into mechanical energy. 
                This physical motion the engine produces is typically used to turn the wheels of a vehicle, spin 
                a propeller on an airplane, or even thrust a rocket upwards. For it to run, the internal combustion 
                engine in cars combusts the carbon (C) and oxygen (O2) atoms found in gasoline, producing carbon dioxide 
                (CO2).</p>

                <h2>Carbon Dioxide Effects</h2> 
                <p>Carbon dioxide is one of the five major greenhouse gases (listed below). When these greenhouse gases are emittied into 
                earth's atmosphere, they create what is known as the greenhouse effect. The greenhouse effect is where solar
                energy from our sun is absorbed by these greenhouse gases (primarily CO2) and trapped. With these greenhouse
                gases, the solar energy cannot escape out of earth's atmosphere once it has entered it, essentially warming up 
                our planet slowly. This greenhosue effect is a natural occurance and regulates the Earth's temperature. However
                too much GHG emissions will have harmful effects on our environment.</p>
                
                <figure>
                    <img src="image/ghg_model.png" alt="Greenhouse gas model.">
                    <figcaption>Visual Representation of Greenhouse Gasses
                        <cite>Photo by Newsela team</cite>
                    </figcaption>
                </figure>
                
            </section>

            <section>
                <h2>Some Data</h2>
                <p><strong>The Major GHGs and their Percent Emissions</strong></p>
                <ol>
                    <li class="odd">Carbon Dioxide - 79%</li>
                    <li class="even">Methane - 11%</li>
                    <li class="odd">Nitrous Oxide - 7%</li>
                    <li class="even">Flourinated Gases - 3%</li>
                </ol>   
                <cite class="listCIte"> <a href="https://www.epa.gov/report-environment/greenhouse-gases">Greenhouse Gases</a></cite> 
            </section>

            <section>
                <h2>Deeper Dive into the Greenhouse Gases</h2>
                <table>
                    <caption><strong>Five Greenhouse Gases</strong></caption>
                    <tr class="tabHeadings">    
                        <th>Greenhouse Gas</th>
                        <th>Produced By</th>
                        <th>Lifespan</th>
                        <th>Natural Effect on GW</th>
                        <th>Human Effect on GW</th>
                    </tr>
                    
                    <tr class="trOdd">
                        <td>Carbon Dioxide</td>
                        <td>deforestation, burning fossil fuels</td>
                        <td>100 yrs.</td>
                        <td>25%</td>
                        <td>70%</td>
                    </tr>

                    <tr class="trEven">
                        <td>Methane</td>
                        <td>agriculture, livestock</td>
                        <td>12 yrs.</td>
                        <td>little</td>
                        <td>24%</td>
                    </tr>

                    <tr class="trOdd">
                        <td>Nitrous Oxide</td>
                        <td>fertilizer use</td>
                        <td>115 yrs.</td>
                        <td>little</td>
                        <td>6%</td>
                    </tr>

                    <tr class="trEven">
                        <td>Ozone</td>
                        <td>natural process</td>
                        <td>short</td>
                        <td>8%</td>
                        <td>dropping due to CFC</td>
                    </tr>

                    <tr class="trOdd">
                        <td>Chlocoflorocarbons (CFC)</td>
                        <td>man-made, consumer goods</td>
                        <td>1000 yrs.</td>
                        <td>0%</td>
                        <td>destroys ozone layer</td>
                    </tr>
                    <tr class="citation">    
                        <td colspan="5">Citations: <cite><a href="https://commons.wikimedia.org/w/index.php?title=File:Greenhouse_gas_summary.PNG&oldid=560184487" target="_blank">
                            Wikimedia Commons</a></cite>
                    </tr>
                </table>
            </section> 

        </main>
        <footer>    
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
