<?php
/*
 * File: index.php
 * Author: Gladys Chan
 * Description: main content of index page
 */

$title = "Datavyu";
?>
<?php require "includes/header.php"; ?>
    <div id="slides">
        <div class="slides_container">
            <div>
                <img src="images/1.jpg" alt="A video coding and data visualization tool">
            </div>
            <div>
                <img src="images/2.jpg" alt="Developed by and for behavioral scientists">
            </div>
            <div>
                <img src="images/3.jpg" alt="Discover data, your way">
            </div>
        </div>
    </div>
    <!-- end of slides -->

    <br>
    <article class="feature">
        <h1>Multiple OS and hardware support.</h1>
        <p>Datavyu is a Java-based application that runs on Windows, Mac, and Linux operating systems. It requires no specialized hardware. Most labs can create Datavyu coding stations with computers already at hand. Datavyu builds on the <a href="http://www.openshapa.org" target="_blank">OpenSHAPA</a> coding tool.</p>
    </article>
    <article class="feature">
        <h1>Flexible and extensible.</h1>
        <p>Datavyu accommodates your needs. You decide how you want to code your video, audio, physiology, motion, or eye tracking data. Power users can write scripts in the Ruby programming language and use the power of the R statistical programming environment to extend Datavyu's functionality.</p>
    </article>
    <article class="feature">
    <h1>Free and open-source.</h1>
        <p>Datavyu software and technical support is free, now and always. Datavyu is open-source. Anyone can improve Datavyu and share the new features with the other researchers.</p>
    </article>
    <!-- end of features -->
<?php require "includes/footer.php"; ?>