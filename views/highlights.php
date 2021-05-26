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
                <li><a href="home_user" class="nav-link px-2 text-white">Reserve</a></li>
                <li><a href="highlights" class="nav-link px-2 text-white">Highlights</a></li>
            </ul>

            <div class="text-end">
            <form action="logout" method="POST">
                    <input type="submit" title="logout" name="logout" class="btn btn-outline-primary" value="Log Out"></input>
					</a>
                </form>
            </div>
        </div>
    </div>
</header>

<body>

<style>
<?php include 'style/style-home/home.css'; ?>
</style>


    <div class="container-fluid p-4">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="./views/images/hotel_img/home2.jpg" class="img-fluid" alt="Highlight picture number one">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home1.jpg" class="img-fluid" alt="Highlight picture number two">
                </div>
                <div class="col-4  pb-4">
                    <img src="./views/images/hotel_img/home3.jpg" class="img-fluid" alt="Highlight picture number three">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home4.jpg" class="img-fluid" alt="Highlight picture number four">
                </div>
                <div class="col-4  pb-3">
                    <img src="./views/images/hotel_img/home6.jpg" class="img-fluid" alt="Highlight picture number five">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home7.jpg" class="img-fluid" alt="Highlight picture number six">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home8.jpg" class="img-fluid" alt="Highlight picture number seven">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home9.jpg" class="img-fluid" alt="Highlight picture number eight">
                </div>
                <div class="col-4">
                    <img src="./views/images/hotel_img/home10.jpg" class="img-fluid" alt="Highlight picture number ten">
                </div>

            </div>
        </div>
</body>



<footer>

    <div class="container py-5" id="icon-grid">
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