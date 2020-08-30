<!DOCTYPE HTML>
<html>

    <head>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <body>

        <div class="content-holder">
            <?php include('asset/headernav.php') ?>
            <div class="top_background">
                <div class="introduction">
                    <h1 class="intro">CERTIFIED ETHICAL HACKING PRACTITIONER</h1>
                    <h3 class="intro2">Sachin Dedhia is an independent Cyber Crime Investigator & also a Certified
                        Ethical Hacker (EC-Council,USA).</h3>
                    <button class="knowmore_btn" style="color:black">Know More</button>
                </div>
            </div>


            <div class="carousel"
                data-flickity='{"fade": true, "imagesLoaded": true,"autoPlay": 3000, "pauseAutoPlayOnHover": false,"freeScroll": true, "wrapAround": true, "pageDots": false  }'>
                <div class="carousel-cell">
                    <img class="w3-image" src="images/coro-back1.jpg">
                    <div class="servicesintro">
                        <h1 class="introh1">GET ALL THE IT SOLUTIONS HERE</h1>
                        <h3 class="introh3">By the Best</h3>
                        <button class="btn_showdetails">Click here to the Services We Provide</button>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="w3-image" src="images/coro-back2.jpg">
                    <div class="trainingintro">
                        <h1 class="introh1">Get Trained by the Experts</h1>
                        <h3 class="introh3">By the Best</h3>
                        <button class="btn_showdetails">Click here to the Training We Provide</button>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="w3-image" src="images/coro-back5.jpg">
                    <div class="trainingintro">
                        <h1 class="introh1">Get Trained by the Experts</h1>
                        <h3 class="introh3">By the Best</h3>
                        <button class="btn_showdetails">Click here to the Training We Provide</button>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="w3-image" src="images/coro-back4.jpg">
                    <div class="trainingintro">
                        <h1 class="introh1">4</h1>
                        <button class="btn_showdetails">4</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column" style="width:100%">
                    <div class="ourservices">
                        <h1>Our Services:</h1>
                        <ol style="list-style-type:square; font-size:24px">
                            <li>1st</li>
                            <li>2nd</li>
                            <li>3rd</li>
                            <li>4th</li>
                            <li><a href="#" style="color: inherit;  text-decoration: underline;  ">View all services
                                    <span class="glyphicon glyphicon-hand-right"></span></a></li>

                        </ol>
                    </div>
                </div>
                <div class="column" style="border-left-style: inset;">
                    <div class="inviteworkshop">
                        <h3 class="invite_for_workshop" style="text-shadow: 1px 1px black;">
                            INVITE FOR
                            WORKSHOP/SEMINAR
                        </h3>
                        <h4>Sachin Dedhia has been invited for several Workshops/Seminars at Police
                            departments,Colleges,ICAI and
                            many more....</h4>
                        <button class="invite_btn"><a style="color: inherit;font-family:'Courier New'">View Past
                                Events</a></button>
                        <h5>
                            Invite Sachin Dedhia for a workshop or seminar, simply send your details by filling up the
                            form.
                            Click on the button below</h5>
                        <span class="glyphicon glyphicon-phone" style="font-size:24px"></span>
                        <m style="font-size:24px">:1425362718</m>
                        <br>
                        <span class="glyphicon glyphicon-envelope" style="font-size:24px"></span>
                        <e style="font-size:24px">:<a href="mailto:someone@example.com" style="color: inherit; text-decoration: underline;
                        ">qwadwe@gmail.com</a></e>
                        <br>
                        <button class="invite_btn"><a style="color: inherit;font-family:'Courier New' ">
                                Invite For
                                Workshop/Seminar</a></button>

                    </div>
                </div>
            </div>
            <?php include('asset/footer.php') ?>
        </div>
    </body>

</html>
