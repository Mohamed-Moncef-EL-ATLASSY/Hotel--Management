<?php

    $data = new reservationController();
    $reservations = $data->getAllReservations();

?>

<head>
    <title>Reservation Page - Bivago</title>
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

<div class="fluid-container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <table class="table table-striped table-dark table-hover">

                <a href="<?php echo BASE_URL;?>add" class="btn btn-lg btn-primary mr-2 mb-2 ">
                    <i class="fas fa-plus">   New Reservation</i>
                </a>


                <thead>
                    <tr>
                        <th scope="col">Room Type</th>
                        <th scope="col">Bed Type</th>
                        <th scope="col">View</th>
                        <th scope="col">Additional Bed</th>
                        <th scope="col">Additional Room</th>
                        <th scope="col">Food Pension</th>
                        <th scope="col">Entry Date</th>
                        <th scope="col">Exit Date</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>

                <tbody>
                    <?php foreach($reservations as $reservation):?>

                    <tr>
                        <th scope="row"> <?php echo $reservation['room_type']; ?></th>
                        <td><?php echo $reservation['bed_type'];               ?></td>
                        <td><?php echo $reservation['view'];                   ?></td>
                        <td><?php echo $reservation['add_bed'];                ?></td>
                        <td><?php echo $reservation['add_room'];               ?></td>
                        <td><?php echo $reservation['food_pension'];           ?></td>
                        <td><?php echo $reservation['entry_date'];             ?></td>
                        <td><?php echo $reservation['exit_date'];              ?></td>
                        <td class="d-flex justify-content-around">
                            <form method="post" class="mr-1" action="update">
                                <input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
                                <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                            </form>
                            <form method="post" class="mr-1" action="delete">
                                <input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>


                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>