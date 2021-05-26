<?php
if (isset($_POST['toLogin']))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Bivago, website for hotel reservation" content="">
    <meta name="author" content="Mohamed Moncef EL ATLASSY">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-reserve/reserve.css">
    <title>Reserve Page - Bivago</title>
</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="img/bivago-removed.png" alt="Bivago" width="80" height="80">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Reserve</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Highlights</a></li>

            </ul>

            <div class="text-end">
                <form action="#" method="POST">
                    <input type="submit" name="toLogin" class="btn btn-outline-primary" value="Log Out"></input>
                </form>
            </div>
        </div>
    </div>
</header>

<body>

    <div class="container">











    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>







<footer>
    <div class="container-fluid p-4">
        <div class="container py-5" id="icon-grid">
            <div class="row row-cols-4 g-4 py-5">

                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#toggles2" /></svg>
                    <div>
                        <h4 class="fw-bold mb-0">About Us</h4>
                        <p>Founded in 2021 in Morocco, Bivago has grown from a small Moroccan startup to one of the
                            world’s
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
                        <img src="img\icons\facebook.png" alt="facebook" width="30" height="30">
                        <img src="img\icons\instagram.png" alt="facebook" width="30" height="30">
                        <img src="img\icons\twitter.png" alt="facebook" width="30" height="30">
                        <img src="img\icons\youtube.png" alt="facebook" width="30" height="30">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



</html>