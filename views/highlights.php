<?php
if (isset($_POST['disconnect']))
{
    Redirect::to('login');
}
?>

<head>
    <title>Highlights Page - Bivago</title>
</head>


<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="./views/images/bivago-removed.png" alt="Bivago" width="80" height="80">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="bivago" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="home" class="nav-link px-2 text-white">Reserve</a></li>
                <li><a href="highlights" class="nav-link px-2 text-white">Highlights</a></li>
                <li><a href="coming-soon" class="nav-link px-2 text-white">New Hotel</a></li>
            </ul>

            <div class="text-end">
                <form action="logout" method="POST">
                    <input type="submit" title="logout" name="logout" class="btn btn-outline-primary"
                        value="Log Out"></input>
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>

<body>

    <style>
        <?php include 'style/style-home/home.css';
        ?>
    </style>






    <div class="container-fluid p-4">


        <div class="container">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home2.jpg" width="70%" height="70%" class="img-fluid"
                                    alt="Highlight picture number one">
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home1.jpg" width="72%" height="72%" class="img-fluid"
                                    alt="Highlight picture number two">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home4.jpg" width="69%" height="69%" class="img-fluid"
                                    alt="Highlight picture number three">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home6.jpg" width="56%" height="56%" class="img-fluid"
                                    alt="Highlight picture number four">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home7.jpg" width="70%" height="70%" class="img-fluid"
                                    alt="Highlight picture number five">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home8.jpg" width="70%" height="70%" class="img-fluid"
                                    alt="Highlight picture number six">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home9.jpg" width="70%" height="70%" class="img-fluid"
                                    alt="Highlight picture number seven">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="./views/images/hotel_img/home10.jpg" width="64%" height="64%"
                                    class="img-fluid" alt="Highlight picture number eight">
                            </div>
                        </div>



                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



<footer>

    <div class="container mt-5 text-white bg-dark" id="icon-grid">
        <div class="row row-cols-4 g-4 py-5">
 
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#toggles2" /></svg>
                <div>
                    <h4 class="fw-bold mb-0">About Us</h4>
                    <p>Founded in 2021 in Morocco, Bivago has grown from a small Moroccan startup to one of the world’s leading digital travel companies. Bivago’s mission is to make it easier for everyone to experience the world.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#geo-fill" /></svg>
                <div>
                    <h4 class="fw-bold mb-0">Contact Us</h4>
                    <p>Give us you contact informations and we will contact you as soon as possible.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#tools" /></svg>
                <div>
                    <h4 class="fw-bold mb-0">See Pricing</h4>
                    <p>This website provides the best prices to its customers.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Socials</h4>
                    <p>Follow us so you dont miss our offers!</p>

                    <img src=".\views\images\icons\facebook.png" alt="facebook" width="30" height="30" >
                    <img src=".\views\images\icons\instagram.png" alt="instagram" width="30" height="30">
                    <img src=".\views\images\icons\twitter.png" alt="twitter" width="30" height="30">
                    <img src=".\views\images\icons\youtube.png" alt="youtube" width="30" height="30">


                </div>
            </div>
        </div>
    </div>

</footer>



</html>