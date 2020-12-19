<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./../head.php'); ?>
</head>

<body>
    <?php include_once('./../header.php'); ?>

    <div class="top-banner mcw">
        <div class="top-banner-img" style="background-image: url('./images/54th3rfes.jpg');">
        </div>
        <a href="" class="top-banner-btn"></a>

    </div>


    <section class=" section page-navigate-section">
        <div class="section-container">
            <br>
            <span class="nvgt-home">Home </span> <span class="nvgt-current">Contact Us</span>
            <br>
            <br>
        </div>
    </section>


    <section class="section xx--section-contact-from">
        <div class="section-container">
            <p class="fm tal">
                We would be delighted to answer any inquery you might have about how we can help,
                just use the from below or choose one of the alternative methods of communication.
                We're available from Monday to Friday to take your call.
            </p>
            <br>
            <br>
            <br>
            <div class="xx-contact-form">
                <div class="xx-contact-form-wrapper">
                    <br>
                    <h2 class="tc">Inqury Here!</h2>
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
                        <div class="xx-form-item-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <br>
            <br>
            <br>
            <div class="xx-contact-us">
                <div class="xx-contact-us-title tc">
                    <h2>Contact Us</h2>
                </div>    
                <div class="xx-contact-us-wrapper">
                    <div class="xx-contact-us-item">
                        <div class="xx-contact-us-item-wpr">
                            <img src="./images/345654.png" alt="contact number" srcset="">
                            <p>022 4969 7113</p>
                        </div>
                    </div>
                    <div class="xx-contact-us-item">
                        <div class="xx-contact-us-item-wpr">
                            <img src="./images/address sym.png" alt="contact number" srcset="">
                            <p>U70, Akshar Business Park,<br>Sector 16F, Vashi,<br> Navi Mumbai - 400703</p>
                        </div>
                    </div>
                    <div class="xx-contact-us-item">
                        <div class="xx-contact-us-item-wpr">
                            <img src="./images/34567876.png" alt="contact number" srcset="">
                            <p>
                                <a href="https://www.glocalmspl.com">www.glocalmspl.com</a>
                                <br>
                                <a href="mailto:marketing@glocalmspl.com">marketing@glocalmspl.com</a>
                            </p>
                        </div>
                    </div>

                </div>
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



        .xx--section-contact-from {
            background-color: #fff;
        }
        .xx-contact-form-wrapper{
            box-shadow: 0px 1.5px 5px rgba(0,0,0,0.2);
            padding: 10px;
            border-radius: 4px;
        }
        .xx-contact-form-wrapper,
        .xx-contact-us-title{
            max-width: 500px;
            margin: auto;
        }
        .xx-contact-us-title{
            border-bottom: 2px solid #74ae96ad;
            padding: 10px;
            margin-bottom: 20px;
        }

        .xx-contact-form-wrapper form{
            display: block;
            width: 100%;
            font-size: 0px;
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

        .xx-contact-us-wrapper{
            width: 100%;
            font-size: 0px;
            display: block;
            margin-bottom: 50px;
            margin-top: 50px;
        }
        .xx-contact-us-item{
            display: inline-block;
            font-size: 14px;
            width: 33.33%;
            text-align: center;
            font-weight: 500;
            vertical-align: top;
        }
        .xx-contact-us-item a{
            color: inherit;
            text-decoration: none;
        }
        .xx-contact-us-item img{
            width: 60px;
            height: 60px;
            padding: 10px;
            object-fit: contain;
        }


        @media (max-width:768px){
            .xx-contact-form-wrapper,
            .xx-contact-us-title{
                width: 100%;
                margin: auto;
            }
            .xx-contact-us-item:nth-child(3),
            .xx-contact-us-item:nth-child(2){
                width: 50%;
            }
            .xx-contact-us-item:nth-child(1){
                width: 100%;
                margin-bottom: 60px;
            }
        }
    </style>

    <?php include_once('./../footer.php'); ?>
    <?php include_once('./../script.php'); ?>
</body>

</html>