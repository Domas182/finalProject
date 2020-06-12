<?php 
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, maximum-scale=1.0, width=device-width, initial-scale=1.0">
    <title>Arda</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://kit.fontawesome.com/c76a89b8a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- PAGE WRAPPER -->
    <div class="wrapper">
        <!--BACKGROUND ELEMENTS-->
        <div class="top-bg"></div>
        <div class="tear-element"></div>
        <!--HEADER-->
        <div class="header">
            <div class="header-container">
                <a href="#home"><img src="/realEstate/images/a_logo_03.png" alt="Arda Agency"></a>
                <nav>
                    <ul>
                        <li><a href="#">our company</a></li>
                        <li><a href="#">our experts</a></li>
                        <li><a href="#">our values</a></li>
                        <li><a href="#">contact</a></li>
                        <div id="search">
                            <input type="text" placeholder="       Search . . ." required>
                        </div>
                    </ul>
                </nav>
                  <div id="menuToggle">
                    <input type="checkbox" />
                      <span></span>
                      <span></span>
                      <span></span>
                    <ul id="menu">
                        <li><a href="#">our company</a></li>
                        <li><a href="#">our experts</a></li>
                        <li><a href="#">our values</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!--HERO-->
        <div class="hero">
            <div class="hero-container">
                <h3>Expert advice for discerning buyers</h3>
                <p>Our consultants and research analysts work together to provide understanding and clarity through the intricacies of an ever changing real estate cycle.</p>
                <div class="button-container">
                <button type="button">Learn more</button>
                </div>
            </div>
        </div>
        <!--REASONS PART-->
        <div class="why">
            <h3>Why Arda<br>Real Estate Consulting?</h3>
        </div>
        <div class="reason-button">
            <a id="changeReason" href="#/"><i class="fas fa-arrow-circle-right"></i></a>
        </div>
        <div class="reason1">
            <div class="reason-container">
                <div class="image-holder">
                    <img src="/realEstate/images/trophy_03.png" alt="trophy">
                    <h3>01</h3>
                </div>
                <div class="text-holder">
                    <h3>Excellent reputation.</h3>
                    <p>The Arda Real Estate Consulting reputation among investors was formed by our Research group and has been reinforced by our Consulting team by providing well thought-out, unbiased commendatuions and advice.</p>
                </div>
            </div>
        </div>
        <div class="reason2">
            <div class="reason-container">
                <div class="image-holder">
                    <img src="/realEstate/images/team_03.png" alt="team">
                    <h3>02</h3>
                </div>
                <div class="text-holder">
                    <h3>Excperienced team.</h3>
                    <p>Our Consulting group is led by a senior management team each with 20+ years of direct executive level homebuilding, development, and consulting experience.</p>
                </div>
            </div>
        </div>
        <div class="reason3">
            <div class="reason-container">
                <div class="image-holder">
                    <img src="/realEstate/images/national_03.png" alt="national">
                    <h3>03</h3>
                </div>
                <div class="text-holder">
                    <h3>National Footprint.</h3>
                    <p>Many of our clients operate throughout the country. We are one of the largest and most geographically diverse consulting groups which allows us to best service their needs.</p>
                </div>
            </div>
        </div>
        <div class="reason4">
            <div class="reason-container">
                <div class="image-holder">
                    <img src="/realEstate/images/magichat_03.png" alt="excellent">
                    <h3>04</h3>
                </div>
                <div class="text-holder">
                    <h3>Excellent Service.</h3>
                    <p>Often times our clients do not have full control over timing for their deals and the Consulting team has a knack for making miracles happen.</p>
                </div>
            </div>
        </div>
        <!--BACKGROUND ELEMENT-->
        <div class="mid-bg"></div>
        <!--CONTACT BUTTON-->
        <div class="contactNow" id="scrollContact">
            <button type="button">Contact us now</button>
        </div>
        <!--TESTIMONIALS PART-->
        <div class="testimonialH">
            <h3>Clients testimonial's</h3>
        </div>
        <div class="testimonial1 firstClmnSwitch" id="switch-1">
                <div class="image-container">
                    <img src="/realEstate/images/testimonial1.png" alt="Benrns Sturaro">
                </div>
                <div class="testimonial-container">
                    <p>"My experience with Arda Real Estate Consulting has enabled me to better assess current market risk level at any point in the home building cycle. Also, I have been able to make new valuable contacts."</p>
                    <h4>Benrns Sturaro</h4>
                    <h5>NY</h5>
                </div>
        </div>
        <div class="testimonial2 secondClmnSwitch" id="switch-2">
                <div class="image-container">
                    <img src="/realEstate/images/testimonial2_05.png" alt="Dave Mathews">
                </div>
                <div class="testimonial-container">
                    <p>"Arda Real Estate Consulting has provided our company with sound, insightful, and timely consulting in a number of real estate related areas. Specifically, reports and analysis for credit reporting agencies, company valuation studies, and presentations to foreign investors have been areas where they have excelled."</p>
                    <h4>Dave Mathews</h4>
                    <h5>Oregon</h5>
                </div>
        </div>
        <div class="testimonial3 firstClmnSwitch" id="switch-3">
                <div class="image-container">
                    <img src="/realEstate/images/testimonial3_03.png" alt="James Kendick">
                </div>
                <div class="testimonial-container">
                    <p>"My wife and I had a dream of downsizing from our house in Cape Elizabeth into a small condo closer to where we work and play in Portland. David and his skilled team helped make that dream a reality. The sale went smoothly, and we just closed on an ideal new place we're excited to call home."</p>
                    <h4>James Kendick</h4>
                    <h5>Seattle</h5>
                </div>
        </div>
        <div class="testimonial4 secondClmnSwitch" id="switch-4">
                <div class="image-container">
                    <img src="/realEstate/images/testimonial4_03.png" alt="Yanni Belder">
                </div>
                <div class="testimonial-container">
                    <p>"We followed many of his ideas and our home looked amazing. David is very professional and did a very in depth market analysis to help us determine a selling price. David and his team marketed our house well and showed it often and we were able to get an offer on our home in just 10 days."</p>
                    <h4>Yanni Belder</h4>
                    <h5>Denver</h5>
                </div>
        </div>
        <!--BACKGROUND ELEMENT-->
        <div class="dq-decoration">
        </div>
        <!--CONTACT FORM-->
        <div class="letUs">
            <div class="form-container">
                <div class="part-form-container">
                    <h3>Let us hear your<br>thoughts</h3>
                    <p>If you have any questions about our consulting<br>services, please contact us</p>
                        <form id="contact" action="index.php" method="post">
                            <div class="fillable">
                                <div class="name-address">
                                    <label for="fname">FULL NAME</label><br>
                                    <input type="text" id="fname" name="fname" placeholder="How should we call you?" required><br>
                                    <label for="email">EMAIL ADDRESS</label><br>
                                    <input type="email" id="email" name="email" placeholder="Enter a valid email address" required><br><br>
                                </div>
                                <div class="msg-btn">
                                    <label for="message">YOUR MESSAGE</label><br>
                                    <textarea id="message" name="message" placeholder="Tell us more about your projects" required></textarea>
                                </div>
                            </div>
                            <div class="button-container">
                                <button name="submit" type="submit" id="contact-submit">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="map">
            <a data-fancybox data-options="iframe" data-src="https://www.google.com/maps/search/?api=1&query=beverly+hills" href="javascript:;">
                <div class="map-container">
                    <div class="location-container">
                        <h4>Sacramento, CA</h4>
                        <p id="address">222 Woodmere Road, Suite 250<br><br>Folsom, California 95630</p>
                        <p id="pnumber">949-870-1227</p>
                    </div>
                </div>
            </a>    
        </div>
        <!--FOOTER-->
        <div class="top-footer">
            <div class="top-footer-container">
                <div class="logo-clmn">
                    <img src="/realEstate/images/a_logo_03.png" alt="a logo">
                </div>
                <div class="short-clmn">
                    <p>Arda Real Estate Consulting provides<br>independent research and consulting services<br>related to the US housing industry.</p>
                    <p>Our experienced team of analysts and<br>consultants help our clients identify the best<br>risk-adjusted investment opportunities.</p>
                </div>
                <div class="com-clmn">
                    <h4>OUR COMPANY</h4>
                    <nav>
                        <ul>
                            <li><a href="#">Our Company</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="exp-clmn">
                    <h4>OUR EXPERTS</h4>
                    <nav>
                        <ul>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Coverage</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="values-clmn">
                    <h4>OUR VALUES</h4>
                    <nav>
                        <ul>
                            <li><a href="#">Proprietary Tools</a></li>
                            <li><a href="#">Forecasting</a></li>
                            <li><a href="#">Surveys</a></li>
                            <li><a href="#">Surban</a></li>
                            <li><a href="#">Demographics</a></li>
                            <li><a href="#">DesignLabs</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="contact-clmn">
                    <h4>CONTACT</h4>
                    <nav>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Office Locations</a></li>
                            <li><a href="#">Newsletter Sign-Up</a></li>
                            <li><a href="#">Social Media</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bot-footer">
            <div class="bot-footer-container">
                <div class="cp">
                    <p>Arda Real Estate Consulting, LLC</p>
                    <p>Copyright &copy; <?= date('Y');?></p>
                </div>
                <div class="social-nav">
                    <ul>
                        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></a></i></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></a></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bot-bg"></div>
    </div>

    
   <script src="scripts/jquery-3.5.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
   <script src="scripts/application.js"></script>
</body>

</html>
