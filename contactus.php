    <?php include('asset/headernav.php') ?>
    <!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <style type="text/css" media="screen">

            </style>
            <link rel="stylesheet" type="text/css" href="css/contactus.css">
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
                    <label for="message">Message</label><br>
                    <textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..."
                        required></textarea><br>
                    <input type="submit" name="submit" value="Send" class="sub-btn">
                </form>
            </div>
            <?php include('asset/footer.php') ?>
        </body>

    </html>
