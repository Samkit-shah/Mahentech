<!DOCTYPE HTML>
<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MahenTech</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src='javascript/javascript.js'></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media=" screen and (max-width: 1110px)" href="css/mobilestyle.css">
        <link rel="stylesheet" type="text/css" href="./css/header.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>


    </head>
    <header class="con">
        <div class="container">
            <div class="menu-toggle" style="margin-bottom: 15px;">
                <span class="openbtn">&#9776;</span>
                <span class="closebtn" style="display:none;font-size:28px">&times;</span>

            </div>
            <div class="logo_navbar_left">

                <img class="logo" src="images/mahentech.png" alt="mahentech">

            </div>


            <nav id="navbar" class="standard navbar-right">
                <ul class="nav navbar-nav">

                    <li class="menu-item-0">
                        <a id="home_nav" href="index.php">Home</a>
                    </li>
                    <li class="menu-item-1">
                        <a id="aboutus_nav" href="aboutus.php">About Us</a>
                    </li>

                    <li class="menu-item-2">
                        <div class="dropdown">
                            <button class="dropbtn">Services
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="sas" id="sas">
                                <div class="grid-container-services">
                                    <div class="grid-item-services">
                                        <ol style="list-style-type: circle;">
                                            <a style="margin-left:-10%;color:red;font-size:17px">SECURITY ASSESSMENT
                                                SERVICES</a>
                                            <li>Vulnerability Assessment & Penetration Testing</li>
                                            <li>Red Team Assessments</li>
                                            <li>Web Application Penetration Testing</li>
                                            <li> Mobile App Penetration Testing</li>
                                            <li>Network Security Penetration Testing</li>
                                            <li>Wireless Network Assessment</li>
                                            <li>Source Code Review</li>
                                            <li>Configuration Review</li>
                                        </ol>
                                    </div>
                                    <div class="grid-item-services">
                                        <ol style="list-style-type: circle;">
                                            <a style="margin-left:-10%;color:red;font-size:17px">DIGITAL FORENSICS
                                                SERVICES</a>
                                            <li>Disk Imaging and Analysis</li>
                                            <li>Computer & Mobile Device Forensics</li>
                                            <li>eDiscovery</li>
                                            <li>Ransomware Forensics</li>
                                            <li>Data Breach Response</li>
                                            <li>Compromise Assessment</li>
                                            <li> Cyber Lab Establishment</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-3">
                        <a id="events_nav" href="events.php">Events</a>
                    </li>
                    <li class="menu-item-4">
                        <div class="dropdown">
                            <button class="dropbtn">Training
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content" id="dropdown-content">

                                <div class="grid-container">
                                    <div id="image" class="image">
                                        <img class="basicimg" id="basicimg" src="images/mahentech.png">
                                        <img class="cehimg" id="cehimg" src="images/ceh.jpg">
                                        <img class="chfiimg" id="chfiimg" src="images/chfi.jpg">
                                        <img class="ecsaimg" id="ecsaimg" src="images/ecsa.jpg">
                                        <img class="casenetimg" id="casenetimg" src="images/casenet.jpg">
                                        <img class="casejavaimg" id="casejavaimg" src="images/casejava.jpg">
                                        <img class="cehmasterimg" id="cehmasterimg" src="images/cehmaster.jpg">
                                        <img class="ecsapimg" id="ecsapimg" src="images/ecsap.jpg">
                                    </div>

                                    <div class="courses">
                                        <br><br>
                                        <div class="ceh" onmouseover="mouseOverceh()" onmouseout="mouseOutceh()"><i
                                                class='fas fa-long-arrow-alt-right'></i><a href="cehpage.php"
                                                class="trainingcourse">Certified
                                                Ethical Hacker</a></div>

                                        <div class="chfi" onmouseover="mouseOverchfi()" onmouseout="mouseOutchfi()">
                                            <i class='fas fa-long-arrow-alt-right'></i><a href="chfipage.php"
                                                class="trainingcourse">Computer
                                                Hacking Forensic Investigator</a>
                                        </div>
                                        <div class="ecsa" onmouseover="mouseOverecsa()" onmouseout="mouseOutecsa()"><i
                                                class='fas fa-long-arrow-alt-right'></i><a href="ecsapage.php"
                                                class="trainingcourse">EC-Council Certified Security Analyst (ECSA):
                                                Penetration
                                                Testing</a>
                                        </div>
                                        <div class="casenet" onmouseover="mouseOvercasenet()"
                                            onmouseout="mouseOutcasenet()"><i class='fas fa-long-arrow-alt-right'></i><a
                                                href="case_netpage.php" class="trainingcourse">Certified Application
                                                Security Engineer (CASE
                                                .NET) </a>
                                        </div>
                                        <div class="casejava" onmouseover="mouseOvercasejava()"
                                            onmouseout="mouseOutcasejava()"><i
                                                class='fas fa-long-arrow-alt-right'></i><a href="case_javapage.php"
                                                class="trainingcourse">Certified Application Security Engineer (CASE
                                                .JAVA) </a>
                                        </div>
                                        <div class="cehmaster" onmouseover="mouseOvercehmaster()"
                                            onmouseout="mouseOutcehmaster()"><i
                                                class='fas fa-long-arrow-alt-right'></i><a href="ceh_masterpage.php"
                                                class="trainingcourse">Certified
                                                Ethical Hacker(MASTER)</a>
                                        </div>
                                        <div class="ecsap" onmouseover="mouseOverecsap()" onmouseout="mouseOutecsap()">
                                            <i class='fas fa-long-arrow-alt-right'></i>
                                            <a href="ecsa_practicalpage.php" class="trainingcourse">
                                                EC-Council Certified Security Analyst (Practical)</a>
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="menu-item-5-mobile">

                        <a id="training_mobile_nav" href=" training_mobile.php">Training</a>

                    </li>
                    <li class="menu-item-6-mobile">

                        <a id="services_mobile_nav" href="services_mobile.php">Services</a>

                    </li>


                    <li class="menu-item-7">
                        <a id="securitytips_nav" href="securitytips.php">Security Tips</a>
                    </li>
                    <li class="menu-item-8">
                        <a id="contactus_nav" href="contactus.php">Contact Us</a>
                    </li>


                </ul>
            </nav>
        </div>

    </header>
