
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>main screen</title>
      <link
        href="https://fonts.googleapis.com/css2?family=Cabin&family=Herr+Von+Muellerhoff&family=Poiret+One&family=Source+Sans+Pro:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
      <link rel="stylesheet" href=" {{asset('css/main1.css')}}">
      <script type="text/javascript">
            function clickedButton()
      {

          window.location = 'login'

      }
       </script>
    </head>
    <body>
    <header class="headooo">
        <h2 class="logo">Dornika</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="about">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnlogin-popup" onClick="clickedButton()">Login</button>
        </nav>
    </header>
     <!-- HERO SECTION -->

     <section class="hero" id="hero">
        <div class="container">
            <h1 class="headline">Let's Taste Perfection</h1>
            <a href="index.html" class="btn btn-primary">Order Now</a>
        </div>
    </section>

    <!-- STORY SECTION -->

    <section class="our-story">
        <div class="container">
            <div class="row">
                <div class="description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            Discover
                        </h2>
                        <h3 class="headline headline-dark">Our Story</h3>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptatum dolor earum
                        accusamus suscipit. Officia atque vitae excepturi deserunt nihil?</p>
                    <a href="index.html" class="btn btn-secondary">Learn More</a>
                </div>
                <div class="image animate-right">
                    <img class="story-img" src="css/images/story-img.jpg" alt="bread">
                </div>
            </div>
        </div>
    </section>

    <!-- ALWAYS FRESH -->
    <section class="always-fresh shared">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        Always
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h3 class="headline headline-dark">Fresh</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="image-group padding-right animate-left">
                    <img src="css/images/square-1.jpg" alt="image">
                    <img src="css/images/square-2.jpg" alt="image">
                    <img src="css/images/square-3.jpg" alt="image">
                    <img src="css/images/square-4.jpg" alt="image">
                </div>
                <div class="description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            Explore
                        </h2>
                        <h3 class="headline headline-dark">Menu</h3>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptatum dolor earum
                        accusamus suscipit. Officia atque vitae excepturi deserunt nihil?</p>
                    <a href="index.html" class="btn btn-secondary">See Full Menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TASTY SECTION -->
    <section class="tasty shared">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        Everything
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h3 class="headline headline-dark">Tasty</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- BAKERS DELIGHT SECTION -->
    <section class="delight">
        <div class="container">
            <div class="row">
                <div class="description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            Baker's
                        </h2>
                        <h3 class="headline headline-dark">Delight</h3>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptatum dolor earum
                        accusamus suscipit. Officia atque vitae excepturi deserunt nihil?</p>
                    <a href="index.html" class="btn btn-secondary">Make A Reservation</a>
                </div>
                <div class="image-group animate-right">
                    <img class="animate-top" src="css/images/bakers-delight-1.jpg" alt="bread">
                    <img class="animate-bottom" src="css/images/bakers-delight-2.jpg" alt="bread">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#hero"><i class="fas fa-chevron-up"></i></a>
            </div>
            <div class="footer__content">
                <div class="footer__content-about animate-top">
                    <h4>About Bakery</h4>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <!-- Tell about backery -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam unde accusantium sit repudiandae
                        incidunt quod eius recusandae blanditiis voluptates consectetur?</p>
                </div>
                <div class="footer__content-divider animate-bottom">
                    <div class="social-media">

                    <!-- For links after -->
                        <h4>Follow Us</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <div class="newsletter-form-box">
                                <!-- <input type="text" class="newsletter-input" placeholder="Your email address..."> -->
                                <button class="newsletter-btn" type="submit">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>