<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/coursedetails.css">

    </head>

    <body>


        <div class="tab">
            <button class="tablinks" onclick="opencontent(event, 'aboutprogramlink')" id="defaultOpen">About the
                Program</button>
            <button class="tablinks" onclick="opencontent(event, 'aboutexamlink')">About the Exam</button>
            <button class="tablinks" onclick="opencontent(event, 'whoisitlink')">Who Is It For?</button>
            <button class="tablinks" onclick="opencontent(event, 'courseoutlinelink')">Course Outline</button>
        </div>

        <div id="aboutprogramlink" class="tabcontent" style="display:block ">
            <h3>About the Program</h3>

            <p align="justify">
                The ECSA pentest program takes the tools and techniques you learned in the Certified Ethical Hacker
                course (CEH) and enhances your ability into full exploitation by teaching you how to apply the skills
                learned in the CEH by utilizing EC-Council’s published penetration testing methodology. It focuses on
                pentesting methodology with an emphasis on hands-on learning</p>
        </div>

        <div id="aboutexamlink" class="tabcontent" style="display:none">
            <h3>About the Exam</h3>
            <h3>ECSA v10 Exam info:</h3>
            <ol>
                <li>Credit Towards Certification: ECSA v10</li>
                <li>Number of Questions: 150</li>
                <li>TPassing Score: 70%</li>
                <li>Test Duration: 4 Hours</li>
            </ol>
        </div>

        <div id="whoisitlink" class="tabcontent" style="display:none">
            <h3>Who Is It For?</h3>
            <ol>
                <li>Ethical Hackers</li>
                <li>Penetration Testers</li>
                <li>Network server administrators</li>
                <li>Firewall Administrators</li>
                <li>Security Testers</li>
                <li>System Administrators and Risk Assessment professionals</li>
            </ol>
        </div>
        <div id="courseoutlinelink" class="tabcontent" style="display:none">
            <h3>Course Outline</h3>
            <p>Module 00: Penetration Testing Essential Concepts (Self-Study)</p>
            <p>Module 01: Introduction to Penetration Testing and Methodologies</p>
            <p>Module 02: Penetration Testing Scoping and Engagement Methodology</p>
            <p>Module 03: Open-Source Intelligence (OSINT) Methodology</p>
            <p>Module 04: Social Engineering Penetration Testing Methodology</p>
            <p>Module 05: Network Penetration Testing Methodology – External</p>
            <p>Module 06: Network Penetration Testing Methodology – Internal</p>
            <p>Module 07: Network Penetration Testing Methodology – Perimeter Devices</p>
            <p>Module 08: Web Application Penetration Testing Methodology</p>
            <p>Module 09: Database Penetration Testing Methodology</p>
            <p>Module 10: Wireless Penetration Testing Methodology</p>
            <p>Module 11: Cloud Penetration Testing Methodology</p>
            <p>Module 12: Report Writing and Post Testing Actions</p>

        </div>
        <script src='javascript/cousredetails_js.js'>
        </script>

    </body>

</html>
