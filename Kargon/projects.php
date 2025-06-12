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

    <!-- slide-section -->
    <section class="other-pages-slide-section">
        <div class="other-pages-div-in">
            <div class="first-view">
                <h1 class="column-div">Project</h1>
                <ul>
                    <li class="home">Home</li>
                    <div class="dash-div"></div>
                    <li class="column">Project</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="other-pages-main">
        <section class="body-div">
            <div class="body-div-in">
                <div class="title-div">
                    <span>GALLERY</span>
                    <h2>Our portfolio</h2>
                </div>

                <div class="project-div">
                    <div class="btn-back-div">
                        <button class="btn all">All</button>
                        <button class="btn">Warehouse</button>
                        <button class="btn">Transport</button>
                        <button class="btn">Logistic</button>
                        <button class="btn">Freight</button>
                    </div>

                </div>

                <div class="images-contents-div">
                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-01.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Warehouse</p>
                            <h4>Transfox Company</h4>
                        </div>
                    </div>

                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-02.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Transport</p>
                            <h4>Special Transport</h4>
                        </div>
                    </div>
                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-03.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Air</p>
                            <h4>Air Transportation</h4>
                        </div>
                    </div>
                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-04.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Logistic</p>
                            <h4>Logistic Services</h4>
                        </div>
                    </div>
                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-05.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Ship</p>
                            <h4>Ship Transportation</h4>
                        </div>
                    </div>
                    <div class="image-text-div">
                        <div class="images-back-div">
                            <img src="all-images/images/portfolio-06.jpg" alt="">
                        </div>

                        <div class="text-div">
                            <p>Transport</p>
                            <h4>Ocean Freight</h4>
                        </div>
                    </div>

                </div>



            </div>
        </section>

        <?php include "footer.php" ?>
    </section>
</body>

</html>