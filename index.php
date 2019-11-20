<?php
//    $result="";
//    $name =""; // Sender Name
//    $email =""; // Sender's email ID
//    $message ="test";

    if (isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['msg'];

        mail("dylanfairbanks@icloud.com","contact message","From: ".$name."\n".$email."\n\n\n".$message
            , "Message from Portfolio Page:");
    }

?>



<!DOCTYPE html>
<head>
    <title>Dylan Fairbanks</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/superslides.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600|PT+Sans|PT+Sans+Narrow:700|Roboto"
          rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>


<!-- Navigation Bar section -->
<nav id="navigation" class="navbar sticky-top navbar-expand-lg">
    <a class="navbar-brand" href="#">Dylan Fairbanks</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#slides">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        <div class="links">
            <a href="https://www.linkedin.com/in/dylanfairbanks/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/dmjusto" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </div>

</nav>
<!-- End Navigation Section -->

<!-- Loader -->
<article class="loader">
    <section class="inner">

    </section>
</article>
<!-- End loader section -->

<!-- Title section -->
<article id="slides">

    <section class="overlay"></section>
    <div class="bg"></div>

    <section class="titleMessage">
        <header class="heading">
            <section class="row icons">
                <section class="myIcons col-md-12">
                    <i class="fas fa-gamepad"></i>
                    <i class="fas fa-code"></i>
                    <i class="fas fa-laptop"></i>
                    <i class="fas fa-mobile-alt"></i>
                    <i class="fas fa-mug-hot"></i>
                </section>
            </section>

            <p class="main">DYLAN HANSEN-FAIRBANKS</p>
            <p class="sub typed" style="font-family: 'PT Sans', sans-serif;"></p>
        </header>

    </section>

</article>
<!-- End Title Section -->


<!-- about section -->
<article id="about" class="aboutSection section">

    <h2>ABOUT ME</h2>
    <!-- <section id="aboutBackground"> -->
    <section class="row no-gutters">

        <section class="col-md-6 text-center" style="padding-bottom: 38px;">
            <img class="aboutImage" src="img/about.jpg" alt="About Image ">
        </section>
        <section class="col-md-6">
            <p>I'm a software <span class="aboutBold">developer</span>. I'm passionate about making and playing <span
                    class="aboutBold">games</span>. I've been fortunate enough to be a part of several production
                <span class="aboutBold">teams</span>, and I'm a big believer in the power of a group of people working
                toward a common goal. </p>
            <p>I enjoy the <span class="aboutBold">problem solving</span> aspect of programming, and I enjoy continually
                challenging myself.</p>
            <p>
        </section>

    </section>
    <!-- </section> -->


</article>
<!-- End about section -->

<!-- Quote -->
<article class="quoteSection">

    <section>

        <p><i class="fas fa-quote-left"></i> The world always seems brighter when you’ve just made something that wasn’t
            there before <i class="fas fa-quote-right"></i></p>

        <p>-Neil Gaiman</p>
    </section>

</article>
<!-- End Quote -->

<!-- Skills section -->
<article id="skills" class="skillsSection section">

    <header class="col-md-12 text-center">
        <h2>TECHNICAL SKILLS</h2>
        <hr>
    </header>

    <section class="container">

        <section class="row">

            <section class="owl-carousel owl-theme">

                <div class="skill">
              <span class="chart chartBlue" data-percent="95">
                <span class="percent">95</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>C#</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartRed" data-percent="90">
                <span class="percent">90</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>Unity</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartYellow" data-percent="65">
                <span class="percent">65</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>C++</h4>
<!--                <p>Getting Pretty Good</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartBlue" data-percent="60">
                <span class="percent">60</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>Unreal</h4>
<!--                <p>Have More To Learn</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartRed" data-percent="80">
                <span class="percent">80</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>HTML</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartYellow" data-percent="85">
                <span class="percent">85</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>CSS</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

<!--                <div class="skill">-->
<!--              <span class="chart chartBlue" data-percent="0">-->
<!--                <span class="percent">0</span>-->
<!--                <canvas id="canvas" width="152" height="152"></canvas>-->
<!--                <h4>MySQL</h4>-->
<!--                <p>Used in most my web based projects</p>-->
<!--              </span>-->
<!--                </div>-->

<!--                <div class="skill">-->
<!--              <span class="chart chartRed" data-percent="0">-->
<!--                <span class="percent">0</span>-->
<!--                <canvas id="canvas" width="152" height="152"></canvas>-->
<!--                <h4>PHP</h4>-->
<!--                <p>Used in most my web based projects</p>-->
<!--              </span>-->
<!--                </div>-->

                <div class="skill">
              <span class="chart chartBlue" data-percent="50">
                <span class="percent">50</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>JavaScript</h4>
<!--                <p>Still Learning</p>-->
              </span>
                </div>

<!--                <div class="skill">-->
<!--              <span class="chart chartBlue" data-percent="7">-->
<!--                <span class="percent">7</span>-->
<!--                <canvas id="canvas" width="152" height="152"></canvas>-->
<!--                <h4>JQuery</h4>-->
<!--                <p>Used in most my web based projects</p>-->
<!--              </span>-->
<!--                </div>-->

                <div class="skill">
              <span class="chart chartRed" data-percent="85">
                <span class="percent">85</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>Python</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

                <div class="skill">
              <span class="chart chartYellow" data-percent="80">
                <span class="percent">80</span>
                <canvas id="canvas" width="152" height="152"></canvas>
                <h4>Java</h4>
<!--                <p>Awesome at it</p>-->
              </span>
                </div>

            </section>

        </section>

    </section>

</article>
<!-- end skills section -->

<!-- portfolio section -->
<article id="portfolio" class="portfolioSection section">
    <div class="container">
        <div class="row">
            <div class="heading">
                <!-- <h2>Portfolio</h2> -->
                <h2>PORTFOLIO</h2>
            </div>

            <div class="filter">
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="current">All</a></li>
                    <li><a href="#" data-filter=".games">Games</a></li>
                    <li><a href="#" data-filter=".websites">Websites</a></li>
                    <!--                    <li><a href="#" data-filter=".apps">Apps</a></li>-->
                </ul>
            </div>

            <div class="itemsContainer">
                <ul class="items">

                    <li onclick="" class="games col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <img src="img/portfolio/thumbnails/LostBorderline_Square.jpeg" alt="">

                            <div class="description">
                                <h4>Lost Boderline</h4>
                                <p>A 2D Puzzle-Crawler</p>
                            </div>

                            <div class="icons">

                                <a href="#hiddenContent_1" title="more info" class="openButton" data-fancybox>
                                    More Info
                                </a>

                            </div>

                            <div id="hiddenContent_1" style="display: none" class="hiddenContent">
                                <div class="row">
                                    <div class="col-md-8">

                                        <video src="video/LB_Trailer.mp4" autoplay muted loop></video>

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Lost Borderline</h2>
                                        <p>Dylan Fairbanks - Engineer<br>
                                            Jon Alger - Engineer <br>
                                            Miguel Bergonia - Artist <br>
                                            Michael Black - Designer <br>
                                            Cameron Brotzman - Lead Artist <br>
                                            Emilee Choate - Team Lead/Producer <br>
                                            Spencer Dubois - Engineer <br>
                                            Matt Eggett - Artist <br>
                                            Alisa Joo - Artist <br>
                                            Josh Marchand - Producer/Games User Research <br>
                                            Alex McCorristin - Sound Engineer <br>
                                            Julian Miranda - Designer <br>
                                            Evan Rabdau - Artist <br>
                                            Andrew Robers - Engineer <br>
                                            Elizabeth Ross - Lead Production Artist <br>
                                            Justina Wunderlich - Lead Engineer <br>
                                            Caughey Zachery - Producer</p>

                                        <a href="https://store.steampowered.com/app/837280/Lost_Borderline/"
                                           title="See it on Steam" target="_blank"
                                           class="modalLink steamLink fab fa-steam"></a>

                                    </div>


                                </div>

                            </div>

                            <div class="imageOverlay"></div>

                        </div>
                    </li>

                    <li onclick="" class="games col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <img src="img/portfolio/thumbnails/eldritchDepthsThumb.png" alt="">

                            <div class="description">
                                <h4>Eldritch Depths</h4>
                                <p>A Dungeon-Crawler Demo</p>
                            </div>

                            <div class="icons">

                                <a href="#hiddenContent_2" title="more info" class="openButton" data-fancybox>
                                    More Info
                                </a>

                            </div>

                            <div id="hiddenContent_2" style="display: none" class="hiddenContent">
                                <div class="row">
                                    <div class="col-md-8">

                                        <video src="video/EldritchDepthsClip.mp4" autoplay loop></video>

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Eldritch Depths</h2>
                                        <p>Dylan Fairbanks - Engineer <br>
                                            Danny Peterson - Artist<br>
                                            Van Dy - Engineer<br>
                                            Brooke Sawyer - Artist <br>
                                            Dalton Nell - Engineer <br>
                                            Josh Marchand - Producer <br>
                                            Grant Bernstein - Artist</p>
                                    </div>

                                </div>

                            </div>

                            <div class="imageOverlay"></div>

                        </div>
                    </li>

                    <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <img src="img/portfolio/thumbnails/DoodleThumbnail.png" alt="">

                            <div class="description">
                                <h4>Doodle</h4>
                                <p>A Search Engine</p>
                            </div>

                            <div class="icons">

                                <a href="#hiddenContent_5" title="more info" class="openButton" data-fancybox>
                                    More Info
                                </a>

                            </div>

                            <div id="hiddenContent_5" style="display: none" class="hiddenContent">
                                <div class="row">
                                    <div class="col-md-8">

                                        <img src="img/portfolio/thumbnails/DoodlePic.jpg" alt="">

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Doodle</h2>
                                        <p>A Search Engine</p>

                                        <a href="https://github.com/dmjusto/giggle"
                                           title="Github Repository" target="_blank"
                                           class="modalLink github fab fa-github"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="imageOverlay"></div>

                        </div>
                    </li>

                    <li onclick="" class="games col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <img src="img/portfolio/thumbnails/conjurersCryptThumb.png" alt="">

                            <div class="description">
                                <h4>Conjurer's Crypt</h4>
                                <p>A 2D Portal Clone</p>
                            </div>

                            <div class="icons">

                                <a href="#hiddenContent_3" title="more info" class="openButton" data-fancybox>
                                    More Info
                                </a>

                            </div>

                            <div id="hiddenContent_3" style="display: none" class="hiddenContent">
                                <div class="row">
                                    <div class="col-md-8">

                                        <img src="img/conjurers.png" alt="">

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Conjurer's Crypt</h2>
                                        <p>Dylan Fairbanks - Engineer <br>
                                            Gabe Campbell - Engineer <br>
                                            Tyler Clark - Designer <br>
                                            Julian Miranda - Artist
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="imageOverlay"></div>

                        </div>
                    </li>


                    <li onclick="" class="games col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <img src="img/portfolio/thumbnails/carpool.png" alt="">

                            <div class="description">
                                <h4>Carpool</h4>
                                <p>An Educational Game</p>
                            </div>

                            <div class="icons">

                                <a href="#hiddenContent_4" title="more info" class="openButton" data-fancybox>
                                    More Info
                                </a>

                            </div>

                            <div id="hiddenContent_4" style="display: none" class="hiddenContent">
                                <div class="row">
                                    <div class="col-md-8">

                                        <video src="video/carpoolClip.mp4" autoplay loop></video>

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Carpool</h2>
                                        <p>Dylan Fairbanks - Engineer <br>
                                            Julian Miranda - Artist <br>
                                            Laupepa Laupepa - Animator <br>
                                            Lee Neuschwander - Designer <br>
                                            Alex Eakle - Artist <br>
                                            Mat Mason - Engineer</p>
                                    </div>

                                </div>

                            </div>

                            <div class="imageOverlay"></div>

                        </div>
                    </li>


                </ul>

            </div>

        </div>

    </div>
</article>
<!-- end portfolio section -->

<!-- Contact section -->
<!--<article id="contact" class="contactSection section">-->
<!--    <h2>Get in Touch</h2>-->
<!--    <section class="contactWrapper">-->
<!---->
<!--        <form class="contactWrapper" action="sendMessage.php" method="post">-->
<!---->
<!--            <label>-->
<!--                <input type="text" name="name" placeholder="your name..." required value="">-->
<!--            </label>-->
<!--            <label>-->
<!--                <input type="email" name="email" placeholder="your email..." required value="">-->
<!--            </label>-->
<!--            <label>-->
<!--                <input type="text" name="subject" placeholder="subject..." required value="">-->
<!--            </label>-->
<!--            <label>-->
<!--                <textarea name="message" placeholder="your message..." rows="6" cols="30"></textarea>-->
<!--            </label>-->
<!--            <input type="submit" name="" value="Send" class="sendButton">-->
<!---->
<!--        </form>-->
<!---->
<!---->
<!--    </section>-->
<!---->
<!--    <section class="linksWrapper">-->
<!--        <a href="https://github.com/dmjusto" target="_blank" title="github" class="socialLink github fab fa-github"></a>-->
<!--        <a href="https://www.linkedin.com/in/dylanfairbanks/" target="_blank" title="linkedin"-->
<!--           class="socialLink linkedIn fab fa-linkedin-in"></a>-->
<!--    </section>-->
<!---->
<!---->
<!--</article>-->
<!-- End contact section -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 align="center">Get in Touch</h2>

                <form method="post" role="form" action="" >

                    <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="your name..." required value=""
                                   oninvalid="this.setCustomValidity('Enter Your Name Here')"
                                   oninput="this.setCustomValidity('')" >
                    </div>

                    <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="your email..." required value=""
                                   oninvalid="this.setCustomValidity('Enter Your Email Address Here')"
                                   oninput="this.setCustomValidity('')" >
                    </div>

                    <div class="form-group">
                        <textarea class="form-control"  name="msg" id="msg"
                                   rows="8" placeholder="message..." style="margin: 0"  required ></textarea>
                    </div>

                    <div class="form-check" style="padding-bottom: 1.2rem;">
                        <input type="checkbox" name="check" class="form-check-input" id="testCheck" required
                               oninvalid="this.setCustomValidity('Please confirm you are human')"
                               oninput="this.setCustomValidity('')" >
                        <label for="testCheck" class="form-check-label">I am not a robot</label>
                    </div>

                    <div align="center">
                        <input type="submit" name="submit" class="btn btn-secondary" value="Send Message">
                    </div>

                    <section class="linksWrapper">
                        <a href="https://github.com/dmjusto" target="_blank" title="github" class="socialLink github fab fa-github"></a>
                        <a href="https://www.linkedin.com/in/dylanfairbanks/" target="_blank" title="linkedin"
                           class="socialLink linkedIn fab fa-linkedin-in"></a>
                    </section>

                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <section class="copyrightSection">
        <p>&copy; Dylan Fairbanks 2019</p>
    </section>
</footer>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
