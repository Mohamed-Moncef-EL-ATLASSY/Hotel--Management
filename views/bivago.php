<?php
if (isset($_POST['disconnect']))
{
    Redirect::to('login');
}

if (isset($_POST['disconnect']))
{
    Redirect::to('login');
}
?>


<head>
    <title>Home Page - Bivago</title>
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
                    <input type="submit" title="logout" name="logout" class="btn btn-outline-primary" value="Log Out"></input>
					</a>
                </form>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="col pt-3">
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="280" src="./views/images/hotel_img/home1.jpg"
                            role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        </img>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Double room</h5>
                            <p class="card-text">Our king size sleigh bedded provides views over landscaped gardens. It
                                has ample storage, a seating area, digital safe, minibar and luxurious duck down
                                bedding.</p>
                            <p class="card-text"><small class="text-muted">King-sized bed . 1 Bath . Balcony</small></p>
                            <div class="reviews">
                                <h5>Reviews (50 rating)</h5>
                                <style>
                                    .checked {
                                        color: orange;
                                    }
                                </style>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-3">
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="280" src="./views/images/hotel_img/home2.jpg"
                            role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        </img>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Simple room</h5>
                            <p class="card-text">All our guestrooms are elegantly furnished with handmade furniture
                                include luxury en-suite facilities with complimentary amenities pack, flat screen LCD
                                TV, tea/coffee making facilities, fan, hairdryer and the finest pure white linen and
                                towels.</p>
                            <p class="card-text"><small class="text-muted">1 Bed . 1 Bath . 4 Guests . Wifi</small></p>
                            <div class="reviews">
                                <h5>Reviews (67 rating)</h5>
                                <style>
                                    .checked,
                                    .fa-star-half{
                                        color: orange;
                                    }
                                </style>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fas fa-star-half"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-3">
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="280" src="./views/images/hotel_img/home4.jpg"
                            role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        </img>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Double room</h5>
                            <p class="card-text">As our smallest budget rooms, the Compact bedrooms are suited for
                                single occupancy or short-stay double occupancy as they have limited space and storage.
                            </p>
                            <p class="card-text"><small class="text-muted">2 Beds . 2 Baths . Wifi . Balcony</small></p>
                            <div class="reviews">
                                <h5>Reviews (43 rating)</h5>
                                <style>
                                    .checked,
                                    .fa-star-half-o {
                                        color: orange;
                                    }
                                </style>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-3">
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="280" src="./views/images/hotel_img/home5.jpg"
                            role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        </img>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Bungalow</h5>
                            <p class="card-text">Bivago Bungalow Hotel offers resort-style accommodation with
                                air-conditioning and a tropical garden, free parking, an outdoor swimming pool and a
                                restaurant with a beer garden. Surrounded by palm trees and green plants, Bivago
                                Bungalow Hotel features rooms with rattan furnishings. Each room has a 42-inch
                                flat-screen satellite TV, writing desk, minibar and en suite bathroom.</p>
                            <p class="card-text"><small class="text-muted">1 King-sized bed . 2 Baths . Parking .
                                    Swimming pool</small></p>
                            <div class="reviews">
                                <h5>Reviews (89 rating)</h5>
                                <style>
                                    .checked,
                                    .fa-star-half-o {
                                        color: orange;
                                    }
                                </style>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                        </div>
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