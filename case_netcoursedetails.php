<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/ceh_coursedetails.css">

    </head>

    <body>


        <div class="tab">
            <button class="tablinks" onclick="opencontent(event, 'aboutprogramlink')" id="defaultOpen">About the
                Course</button>
            <button class="tablinks" onclick="opencontent(event, 'aboutexamlink')">About the Exam</button>
            <button class="tablinks" onclick="opencontent(event, 'whoisitlink')">Who Is It For?</button>
            <button class="tablinks" onclick="opencontent(event, 'courseoutlinelink')">Course Outline</button>
        </div>

        <div id="aboutprogramlink" class="tabcontent" style="display:block ">
            <strong style="font-size:30px;">About the Course</strong>
            <br>
            <strong>Duration:</strong>
            <p>Total Training: 24 hours or 3 full-day sessions
            </p>
            <br>
            <strong>Course Material:</strong>
            <p>All attendees will receive their personal copy of the CASE courseware, an EC-Council CASE exam voucher,
                and access to iLabs (EC-Council’s cloud driven labs environment)
            </p>
            <br>
            <strong>Certification:</strong>
            <p>The CASE exam can be challenged after attending the official CASE training. Candidates that successfully
                pass the exam will receive their CASE certificate and membership privileges. Members are expected to
                adhere to the policies of EC-Council’s Continuing Education Requirements.
            </p>
        </div>

        <div id="aboutexamlink" class="tabcontent" style="display:none">
            <strong style="font-size:30px;">About the Exam</strong>
            <br>
            <p align="justify">CASE allows application developers and testers to demonstrate their mastery of the
                knowledge and skills required to handle common application security vulnerabilities.
            </p>

            <p>Number of Questions: 50</p>

            <p>Test Duration: 2 Hours</p>

            <p>Test Format: Multiple Choice Questions</p>

            <p>Passing Score: 70%</p>

            <p>Availability: EC-Council Exam Portal</p>

            <strong>Eligibility Criteria</strong>
            <p>To be eligible to apply to sit for the CASE Exam, the candidate must either:</p>
            <ol>
                <li>Attend the official EC-Council CASE training through an accredited EC-Council Partner (Accredited
                    Training Centre/ iWeek/ iLearn) (All candidates are required to pay the USD100 application fee
                    unless your training fee already includes this) or</li>
                <li>Be an ECSP (.NET/ Java) member in good standing (you need not pay a duplicate application fee, as
                    this fee has already been paid) or</li>
                <li>Have a minimum of 2 years working experience in InfoSec/ Software domain (you will need to pay USD
                    100 as a non-refundable application fee) or</li>
                <li>Have any other industry equivalent certifications such as GSSP .NET/Java (you will need to pay USD
                    100 as a non-refundable application fee)</li>
            </ol>
        </div>

        <div id="whoisitlink" class="tabcontent" style="display:none">
            <strong style="font-size:30px;">Who Is It For?</strong>
            <ol>
                <li>.NET Developers with a minimum of 2 years of experience and individuals who want to become
                    application security engineers/analysts/testers</li>
                <li>Individuals involved in the role of developing, testing, managing, or protecting wide area of
                    applications</li>
            </ol>
        </div>
        <div id="courseoutlinelink" class="tabcontent" style="display:none">
            <strong style="font-size:30px;">Course Outline</strong>
            <ol>
                <li>
                    Understanding Application Security, Threats, and Attacks
                </li>
                <li>
                    Security Requirements Gathering
                </li>
                <li>
                    Secure Application Design and Architecture
                </li>
                <li>
                    Secure Coding Practices for Input Validation
                </li>
                <li>
                    Secure Coding Practices for Authentication and Authorization
                </li>
                <li>
                    Secure Coding Practices for Cryptography
                </li>
                <li>
                    Secure Coding Practices for Session Management
                </li>
                <li>
                    Secure Coding Practices for Error Handling
                </li>
                <li>
                    Static and Dynamic Application Security Testing (SAST & DAST)
                </li>
                <li>
                    Secure Deployment and Maintenance
                </li>
        </div>
        <script src='javascript/cousredetails_js.js'>
        </script>

    </body>

</html>
