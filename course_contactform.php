<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="css/contactus.css">
        <style>
            .main_contactus {
                width: auto;
            }

            #contactus_nav {
                text-decoration: none;
                background-color: inherit;
                transform: none;
                text-shadow: none;
            }

            #contactus_nav:hover {
                text-decoration: none;
                background-color: inherit;
                transition-duration: 0.3s;
                transform: scale(1.3);
                text-shadow: 1px 1px white;
                cursor: pointer;
            }

        </style>

    </head>
    <body>
        <div class="main_contactus">
            <div class="info">Fill Your Details, We will Contact You</div>
            <form action="mail_handler.php" method="post" name="form" class="form-box">
                <label for="name">Name</label><br>
                <input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
                <label for="email">Email ID</label><br>
                <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
                <label for="phone">Phone</label><br>
                <input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>


                <input type="submit" name="submit" value="Send" class="sub-btn">
            </form>
        </div>

    </body>
</html>
