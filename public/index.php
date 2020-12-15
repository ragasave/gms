<?php
include_once './config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['seo_home_title'] ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header class="header">
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="http://">
                    <img src="./images/logo-sm.png" alt="" srcset="">
                </a>
            </div>
            <div class="header-menu-toggler">
                <span class="header-menu-btn">

                </span>
            </div>
        </div>
    </header>


    <section class="section">
        <div class="section-wrapper earth-box">
            <div class="cc hc glob-full-width-1100">
                <div class="ccw">
                    <div class="pr">
                        <div class="earth-wrapper">
                            <div id="earth">

                            </div>
                        </div>
                        <div class="cord-service-conntent">
                            <div id="cord-service-conntent-wrapper">
                                <div class="dist-details">
                                    <h1 class="xx-dist-name"></h1>
                                    <h4 class="xx-country-name"></h4>
                                    <p class="xx-dist-description">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-ldark subtitle-container">
        <div class="cc">
            <div class="ccw">
                <h2 class="subtitle">
                    We Are <span>Your</span> <br>
                    Vista to <br>
                    <span>International</span> Market
                </h2>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="section">
        <div class="section-container">



            <div class="service-list">
                <div class="service-list-items">
                    <div class="wpr">
                        <div class="content">
                            <div class="cc hc">
                                <div class="ccw">
                                    <img src="images/opportunity.png" alt="" srcset="">
                                    <h3>Opportunity Serving</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service-list-items">
                    <div class="wpr">
                        <div class="content">
                            <div class="cc hc">
                                <div class="ccw">
                                    <img src="images/590-01-512.png" alt="" srcset="">
                                    <h3>Sales Support</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service-list-items">
                    <div class="wpr">
                        <div class="content">
                            <div class="cc hc">
                                <div class="ccw">
                                    <img src="images/renovation-icon.png" alt="" srcset="">
                                    <h3>Local Representation</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-list-items">
                    <div class="wpr">
                        <div class="content">
                            <div class="cc hc">
                                <div class="ccw">
                                    <img src="images/office.png" alt="" srcset="">
                                    <h3>Representation Offices</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service-list-items">
                    <div class="wpr">
                        <div class="content">
                            <div class="cc hc">
                                <div class="ccw">
                                    <img src="images/545554.png" alt="" srcset="">
                                    <h3>Representation Offices</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <br>
            <br>
            <br>
            <br>
            <h1 class="uc tc">Challenges in Global Marketing</h1>
            <br>
            <div class="fm ltc">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop <span class="ttc">publishing software like Aldus PageMaker</span> including versions of Lorem Ipsum.
                </p>
                <br>
                <br>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop <span class="ttc">publishing software like Aldus PageMaker</span> including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>









    <div class="section-ldark">
        <br>
        <br>
        <br>
    </div>


    <script>
        const distributedCompanies = <?= json_encode($config['company_distributed']) ?>;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
    <script src="./js/openings.js"></script>
    <script src="./js/countries.js"></script>
    <script src="./js/miniature.earth.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>