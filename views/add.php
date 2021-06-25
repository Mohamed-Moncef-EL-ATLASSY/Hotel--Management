<?php 
	if(isset($_POST['submit'])){
		$newReservation = new reservationController();
		$newReservation->addReservation();
	}

    if (isset($_POST['disconnect']))
    {
        Redirect::to('login');
    }
?>

<head>
    <title>Add Reservation Page - Bivago</title>
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


<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Add new reservation</div>
                <div class="card-body bg-light">
                    <a href="javascript:history.back()" class="btn btn-l btn-danger mr-2 mb-2">
                        <i class="fas fa-caret-left"> Cancel Reservation</i>
                    </a>
                    <form method="post">
                        <div class="form-group mt-2">
                            <label for="room_type">Room Type (Select room type)</label>
                            <select class="form-control" name="room_type" required>
                                <option selected disabled>Room type</option>
                                <option value="Apartment">Apartment (200dh/night)</option>
                                <option value="Bungalow">Bungalow (300/night)</option>
                                <option value="Simple Room">Simple Room (150dh/night)</option>
                            </select>
                        </div>
                        <div class="form-group mt-2 ">
                            <label for="bed_type">Bed Type (Select bed type)</label>
                            <select class="form-control" name="bed_type" required>
                                <option selected disabled>Bed type</option>
                                <option value="Double Bed">Double Bed</option>
                                <option value="2 Single Beds">2 Single Beds</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="view">View (Internal/ External)</label>
                            <select class="form-control" name="view" required>
                                <option selected disabled>View</option>
                                <option value="Internal">Internal</option>
                                <option value="External">External (+20%)</option>
                            </select>
                        </div>

                        <!-- set for kids -->

                        <div class="container fluid d-flex justify-content-around my-2" id="kidsection">
                            <div class="form-group mt-2 text-center">
                                <label for="kids1" >Kids aged 2- years old</label>
                                <select name="kid0_2yo" required>
                                    <option value="0" selected >Kids age 2-</option>
                                    <?php
                                    
                                for ($i=0; $i<=5; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                            <div class="form-group mt-2 text-center">
                                <label for="kids2" >Kids aged from 2 - 14 years old</label>
                                <select name="kid2_14yo" required>
                                    <option value="0" selected >Kids age 2 to 14yo</option>

                                    <?php
                                for ($i=0; $i<=5; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                            <div class="form-group mt-2 text-center">
                                <label for="kids3" >Kids aged from 14+ years old</label>
                                <select name="kid14yo" required>
                                    <option value="0" selected >Kids age 14+</option>

                                    <?php
                                for ($i=0; $i<=5; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                        </div>
                        <!-- end set for kids -->



                        <div class="container fluid d-flex justify-content-around my-2">
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="add_bed">Additional Bed (25%/bed)</label>
                                <select class="custom-select mr-sm-2" name="add_bed" required>
                                    <option value="0" selected >Additional Bed</option>

                                    <?php
                                for ($i=0; $i<=5; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>


                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="add_room">Additional Room (50%/room)</label>
                                <select class="custom-select mr-sm-2" name="add_room" required>
                                    <option value="0" selected >Additional Room</option>

                                    <?php
                                for ($i=0; $i<=5; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="foom">Food Pension</label>
                            <select class="form-control" name="food_pension" required>
                                <option selected disabled>Food Pension</option>
                                <option value="Complete">Complete (100dh/day)</option>
                                <option value="Partial">Partial (50dh/day)</option>
                                <option value="None">None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="entry_date">Check In</label>
                            <input type="date" name="entry_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="exit_date">Check Out</label>
                            <input type="date" name="exit_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-lg btn-primary mt-4" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

