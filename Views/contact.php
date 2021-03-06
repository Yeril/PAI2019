<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title> Contact</title>
    <link rel="Stylesheet" type="text/css" href="./Public/css/navbar.css" />
    <link rel="Stylesheet" type="text/css" href=".." />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
<div class="container-fluid" style="background: darkgrey; background-color: darkgrey">
    <?php include(dirname(__DIR__).'/Views/Common/navbar.php'); ?>
    <div class="row" style="height: 10%"></div>
    <div class="row">
        <div class="col-8 col-md-8 col-lg-8 justify-content-center" style="height: auto ; width: 60%; margin: auto">
            <img src="./Public/img/contact.png" style="width: 100%; height: auto"  class="left">
        </div>
        <div class="col-4 col-md-4 col-lg-4" style="padding-top: 10%;">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row">
                    <div class="col-md-9  mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                        <input type="text" placeholder="Your name" name="name" required class="form-control">
                                </div>
                                <div class="col-md-6">
                                        <input type="text" placeholder="Your email" name="name" required class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                        <input type="text" placeholder="Subject" name="name" required class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                        <textarea placeholder="Message" name="message" style="height: 125px; width: 100%; resize: none" required class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-md-left">
                            <a class="btn btn-primary" >Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Kraków, CA 94126, USA</p>
                            </li>
                            <li>
                                <i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 12 222 22 22</p>
                            </li>

                            <li>
                                <i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contact@pear.com</p>
                            </li>
                        </ul>
                    </div>
                </div>

   