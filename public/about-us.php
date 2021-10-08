<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./../head.php'); ?>
    <title><?= $config['seo_about_title'] ?></title>
    <meta name="description" content="<?= $config['seo_about_description'] ?>">
    <meta name="author" content="<?= $config['seo_about_author'] ?>">
    <meta name="keywords" content="<?= $config['seo_about_keywords'] ?>">

</head>

<body>
    <?php include_once('./../header.php'); ?>    

    <div class="top-banner">
        <div class="top-banner-img" style="background-image: url('./images/about us banner.jpg');">
            
        </div>
        <a href="" class="top-banner-btn"></a>
    </div>


    <section class=" section page-navigate-section">
        <div class="section-container">
            <br>
            <span class="nvgt-home">Home </span> <span class="nvgt-current">About Us</span>
            <br>
            <br>
        </div>
    </section>


    <section class="section xx-about-s1-section">
        <div class="section-container">
            <div class="">
                <div class="xx-about-s1-section-items">
                    <div class="xx-about-s1-section-item">
                        <img src="./images/businessman-touching-virtual-screen.jpg" alt="Representation in the global market">
                    </div>
                    <div class="xx-about-s1-section-item">
                        <h2>About Us</h2>
                        <p>
                        At <span class="ttc">Glocal Marketing Solutions Pvt. Ltd.</span>, we have a deep
                        understanding of the local business cultures in all markets we
                        cover. We know that in many countries business relations are
                        based on trust, tradition and the ability to establish common
                        grounds between the parties involved. We understand the
                        value of personal connections and business relationships
                        developed over years.
                        </p>
                        <p>
                        For these reasons, we employ local sales representatives,
                        professionals with deep roots in the local business
                        communities who developed outstanding business relations
                        with all local decision factors including retail buyers,
                        distribution partners and local officials and regulators.
                        </p>
                    </div>
                </div>
                <div class="xx-about-s2-section-items">
                    <div class="xx-about-s2-section-item">
                        <h2>Our Goal</h2>
                        <p>
                        Our primary goal is to provide Indian manufacturers with the
                        best export solutions and sell the highest quality “Make in India”
                        brands in all major markets around the world.
                        </p>
                        <p>
                        We operate in 52 countries and territories in America, Europe,
                        Australia and Asia & Pacific, and partner with distributors and
                        retail chains across all major channels.
                        </p>
                        <p>
                        We focus on long term strategies and help you establish longterm relationships with reliable trading partners in all major
                        international markets. We provide ongoing sales and operational
                        support and help you navigate the complex processes associated
                        with exporting and dealing with international buyers and foreign
                        regulatory bodies.
                        </p>
                    </div>
                    <div class="xx-about-s2-section-item">
                        <img src="./images/ambitious-business-man-climbing-stairs-success_31965-3080.jpg" alt="">
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>




    <style>

        .top-banner-btn {
            position: absolute;
            display: block;
            width: 17.7%;
            padding-top: 3.5%;
            left: 12.5%;
            top: 74%;
        }
        .top-banner-btn:hover {
            background-color: #eeeeee2e;
        }
        .xx-about-s1-section{
            background-color: #fff;
        }
        .xx-about-s1-section,.xx-about-s2-section{
            width: 100%;
            display: block;
        }
        .xx-about-s1-section-items{
            margin-bottom: 50px;
        }
        .xx-about-s1-section-items,.xx-about-s2-section-items{
            width: 100%;
            display: flex;
            font-size: 0px;
            font-size: 0px;
            flex-wrap: nowrap;
            text-align: justify;
            font-weight: 500;
        }
        .xx-about-s1-section-item,.xx-about-s2-section-item{
            display: inline-block;
            font-size: 16px;
            vertical-align: top;
            padding: 10px;
        }
        .xx-about-s1-section-item p,.xx-about-s2-section-item p{
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .xx-about-s1-section-item h2,.xx-about-s2-section-item h2{
            margin-bottom: 15px;
        }
        .xx-about-s1-section-items .xx-about-s1-section-item:first-child,
        .xx-about-s2-section-items .xx-about-s2-section-item:last-child{
            width: 45%;
        }
        .xx-about-s1-section-items .xx-about-s1-section-item:last-child,
        .xx-about-s2-section-items .xx-about-s2-section-item:first-child{
            width: 55%;
        }
        .xx-about-s1-section-items .xx-about-s1-section-item:first-child img,
        .xx-about-s2-section-items .xx-about-s2-section-item:last-child img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width:768px){
            .xx-about-s1-section-items,.xx-about-s2-section-items{
                display: block;
            }
            .xx-about-s1-section-items .xx-about-s1-section-item:first-child,
            .xx-about-s2-section-items .xx-about-s2-section-item:last-child,
            .xx-about-s1-section-items .xx-about-s1-section-item:last-child,
            .xx-about-s2-section-items .xx-about-s2-section-item:first-child{
                width: 100%;
            }
            
            .xx-about-s1-section-item p,.xx-about-s2-section-item p{
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .xx-about-s1-section-item h2,.xx-about-s2-section-item h2{
                margin-bottom: 10px;
            }
            .xx-about-s1-section-items{
                margin-bottom: 0px;
            }
            
        }
    </style>

    <?php include_once('./../footer.php'); ?>    
    <?php include_once('./../script.php');?> 
</body>

</html>