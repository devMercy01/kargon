<?php include 'config/config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $appName ?> | Kargon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="ROBOTS" content="ALL" />
    <meta name="Engine" content="all" />
    <meta name="distribution" content="global" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="ABCC parent portal, Advanced Breed Group Of Schools parent portal, Advanced Breed Group Of Schools portal" />
    <meta name="description" content="Your Child's Education is at Your Fingertips!" />

    <link href="<?php echo $websiteUrl ?>/all-images/images/icon.fw.png?v=<?php echo $codeVersion ?>" rel="shortcut icon" type="image-png" />
    <link href="<?php echo $websiteUrl ?>/styles/styles.css?v=<?php echo $codeVersion ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $websiteUrl ?>/styles/aos.css?v=<?php echo $codeVersion ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $websiteUrl ?>/styles/animate.css?v=<?php echo $codeVersion ?>" type="text/css" rel="stylesheet" />

    <script src="<?php echo $websiteUrl ?>/js/jquery-v3.6.1.min.js?v=<?php echo $codeVersion ?>"></script>
    <script src="<?php echo $websiteUrl ?>/js/aos.js?v=<?php echo $codeVersion ?>"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="other-pages-slide-section">
        <div class="other-pages-div-in">
            <div class="first-view">
                <h1>Contact Us</h1>
                <ul>
                    <li class="home">Home</li>
                    <div class="dash-div"></div>
                    <li class="service">Contact-Us</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="services-index-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="expert-div contact-expert-div">
                    <div class="left-div left-back-div">
                        <div class="contact-form-div">
                            <div class="input-title-div">
                                <h4>Contact us</h4>
                                <h3>Get In Touch</h3>
                            </div>

                            <form>
                                <div class="form-group contact-group">
                                    <div class="input-label-div">
                                        <label>Your Name</label>
                                        <input type="text" placeholder="Your name here" required>
                                    </div>

                                    <div class="input-label-div">
                                        <label>Your Subject</label>
                                        <input type="text" placeholder="Your subject here" required>
                                    </div>

                                    <div class="input-label-div">
                                        <label>Your Subject</label>
                                        <input type="text" placeholder="Your subject here" required>
                                    </div>

                                    <div class="input-label-div">
                                        <label>Your Subject</label>
                                        <input type="text" placeholder="Your subject here" required>
                                    </div>

                                    <div class="input-label-div full">
                                        <label>Message</label>
                                        <textarea placeholder="Your subject here"></textarea>
                                    </div>


                                    <div class="input-label-div full">
                                        <input type="text" placeholder="Your subject here" required>
                                    </div>
                                </div>
                                <div class="captcha">catch</div>
                                <button type="submit">SEND MESSAGE</button>
                            </form>
                        </div>

                    </div>

                    <div class="left-div right-back-div">
                        <div class="contact-detail">
                            <h4>Our contact detail</h4>
                            <div class="phn">Need any consultations contact with us</div>

                            <div class="phone-div">
                                <h3>Phone Number</h3>
                                <p>+1 (888) 123-5678</p>
                                <p>(+44)123 456 789</p>
                            </div>

                            <div class="phone-div">
                                <h3>Email Address</h3>
                                <p>info@example.com</p>
                                <p>contact@example.com</p>
                            </div>
                            <div class="phone-div">
                                <h3>Location</h3>
                                <p>Guild Street 51, North Town,</p>
                                <p>London-06192, UK</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php include "footer.php" ?>
    </section>
</body>

</html>