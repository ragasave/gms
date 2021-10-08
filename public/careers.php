<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./../head.php'); ?>
    <title><?= $config['seo_career_title'] ?></title>
    <meta name="description" content="<?= $config['seo_career_description'] ?>">
    <meta name="author" content="<?= $config['seo_career_author'] ?>">
    <meta name="keywords" content="<?= $config['seo_career_keywords'] ?>">


</head>

<body>
    <?php include_once('./../header.php'); ?>

    <div class="top-banner">
        <div class="top-banner-img" style="background-image: url('./images/careers banner.jpg');">

        </div>
        <a href="./contact-us.php" title="Contact Us" class="top-banner-btn"></a>
    </div>


    <section class=" section page-navigate-section">
        <div class="section-container">
            <br>
            <span class="nvgt-home">Home </span> <span class="nvgt-current">Careers</span>
            <br>
            <br>
        </div>
    </section>


    <section class="section xx--section-career">
        <div class="section-container">
            <h3 class="fm tal">
                We would be delighted to answer any inquery you might have about how we can help,
                just use the from below or choose one of the alternative methods of communication.
                We're available from Monday to Friday to take your call.
            </h3>
            <div class="">
                <br>
                <br>
                <hr>
                <br>
                <div class="xx-career">
                    <div class="xx-career-form">
                        <div class="xx-career-form-wrapper">
                            <br>
                            <h2 class="tc">Send Us Your Resume</h2>
                            <br>
                            <form action="" method="post">
                                <div class="xx-form-item">
                                    <input type="text" placeholder="First Name" name="fname">
                                </div>
                                <div class="xx-form-item">
                                    <input type="text" placeholder="Last Name" name="lname">
                                </div>
                                <div class="xx-form-item">
                                    <input type="email" placeholder="Email" name="emal">
                                </div>
                                <div class="xx-form-item">
                                    <input placeholder="Phone Number" text="text" name="phone_number">
                                </div>
                                <div class="xx-form-item w100">
                                    <textarea placeholder="Type your message here." name="msg" id="" rows="6"></textarea>
                                </div>
                                <div class="xx-form-item w100">
                                    <label for="">Select Resume</label>
                                    <input placeholder="Select Resume" type="file" name="resume">
                                </div>
                                <div class="xx-form-item-btn">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </section>


    <style>
        :root {
            --color-theme: #74ab50;
            --read-more-icon: url(../images/34657-g.png);
        }

        .xx--section-career {
            background-color: #fff;
        }

        .xx-career-items {
            display: block;
            font-size: 0px;
            margin-top: 50px;
        }

        .xx-career-item {
            padding: 10px;
            display: inline-block;
            font-size: 16px;
            width: 25%;
            margin: 10px 0px;
        }

        .xx-career-item:hover {
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.58);
            background-color: #fff;
            cursor: pointer;
        }

        .xx-career-item-wpr {
            position: relative;
            /* padding: 10px; */
        }

        .read-more-link {
            padding-bottom: 10px;
        }

        .xx-career-item-wpr::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 0px;
            height: 10px;
            background-color: var(--color-theme);
            display: block;
        }

        .xx-career-item-wpr::before {
            content: "";
            width: 100%;
            position: absolute;
            bottom: 0px;
            height: 2px;
            background-color: var(--color-theme);
            display: block;
        }

        .xx-career-item-name-txt {
            padding: 15px 0px;
            color: var(--color-theme);
        }

        .xx-career-item-imgw {
            padding-top: 50%;
            position: relative;
        }

        .xx-career-item-img {
            /* background-image: url(../images/man-with-chart-his-hand_1134-330.jpg); */
            background-color: #eee;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
        }

        .xx-career-item-desc p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            margin: 10px 0px;
        }

        .xx-career-item-details-link {
            text-decoration: none;
            border-bottom: 1px solid var(--color-theme);
            color: var(--color-theme);
            font-weight: 600;
        }


        .xx-form-item-btn button{
            padding: 10px 8px;
            width: 100%;
            border-radius: 4px;
            background-color: #464646;
            color: #eee;
            border: 1px solid rgba(0,0,0,0.2);
            outline: none;
            font-family: inherit;
            font-weight: 600;
        }


        .xx-form-item,
        .xx-form-item-btn{
            font-size: 16px;
            padding: 10px 10px;
            width: 50%;
            display: inline-block;
        }
        .xx-form-item-btn{
            width: 100%;
            text-align: center;
        }
        .xx-form-item.w100{
            width: 100%;
        }
        
        .xx-form-item input,
        .xx-form-item textarea{
            padding: 10px 8px;
            width: 100%;
            border: 1px solid rgba(0,0,0,0.2);
            outline: none;
            border-radius: 4px;
            font-family: inherit;
            font-weight: 600;

        }

        .xx-career{
            max-width: 600px;
            margin: auto;
        }
        .xx-career form{
            font-size: 0px;
        }
        @media (max-width: 1000px) {
            .xx-career-item {
                width: 33.33%;
            }
        }

        @media (max-width: 768px) {
            .xx-career-item {
                width: 50%;
                padding: 3px;
            }
        }
    </style>


    <?php include_once('./../footer.php'); ?>
    <?php include_once('./../script.php'); ?>
</body>

</html>