<head>
    <title>New Hotel Page - Bivago</title>
</head>


<header class="p-3 bg-dark text-white">
<script src="./views/js/countdown.js"></script>
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
    <div class="container mx-auto">
        <section class="coming-soon">
            <h1 class="text-center m-5 ">We are opening up a new hotel soon!</h1>
            <div class="countdown d-flex justify-content-around m-5 text-center">
                <div class="container-day">
                    <h3 class="day" style="font-size: 3rem;">00</h3>
                    <h3>Day</h3>
                </div>
                <div class="container-hour">
                    <h3 class="hour" style="font-size: 3rem;">00</h3>
                    <h3>Hour</h3>
                </div>
                <div class="container-minute">
                    <h3 class="minute" style="font-size: 3rem;">00</h3>
                    <h3>Minute</h3>
                </div>
                <div class="container-second">
                    <h3 class="second" style="font-size: 3rem;">00</h3>
                    <h3>Second</h3>
                </div>
            </div>
            <div class="container text-center">
                <img src="views\images\hotel_img\comingSoon.png" width="80%" height="80%">
            </div>
        </section>
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
                    <p>Founded in 2021 in Morocco, Bivago has grown from a small Moroccan startup to one of the world’s
                        leading digital travel companies. Bivago’s mission is to make it easier for everyone to
                        experience the world.</p>
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
                    <img src=".\views\images\icons\facebook.png" alt="facebook" width="30" height="30">
                    <img src=".\views\images\icons\instagram.png" alt="instagram" width="30" height="30">
                    <img src=".\views\images\icons\twitter.png" alt="twitter" width="30" height="30">
                    <img src=".\views\images\icons\youtube.png" alt="youtube" width="30" height="30">
                </div>
            </div>
        </div>
    </div>

</footer>

</html>