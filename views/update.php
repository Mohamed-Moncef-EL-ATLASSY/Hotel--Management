<?php 
	if(isset($_POST['id'])){
		$existReservation = new reservationController();
		$reservation = $existReservation->getOneReservation();
	}
    else{
        Redirect::to('home');
    }
	if(isset($_POST['submit'])){
		$existReservation = new reservationController();
		$existReservation->updateReservation();
	}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modify reservation</div>
                <div class="card-body bg-light">
                    <a href="javascript:history.back()" class="btn btn-l btn-danger mr-2 mb-2">
                        <i class="fas fa-caret-left"> Cancel Modification</i>
                    </a>
                    <form method="post">
                    <input type="hidden" name="id" value="<?php echo $reservation->id;?>">
                        <div class="form-group mt-2">
                            <label for="room_type">Room Type (Select room type)</label>
                            <select class="form-control" name="room_type" required>
                                <option value="<?php echo $reservation->room_type; ?>" selected ><?php echo $reservation->room_type; ?></option>
                                <option value="Apartment">Apartment (200dh/night)</option>
                                <option value="Bungalow">Bungalow (300/night)</option>
                                <option value="Simple Room">Simple Room (150dh/night)</option>
                            </select>
                        </div>
                        <div class="form-group mt-2 ">
                            <label for="bed_type">Bed Type (Select bed type)</label>
                            <select class="form-control" name="bed_type">
                                <option value="<?php echo $reservation->bed_type; ?>" selected ><?php echo $reservation->bed_type; ?></option>
                                <option value="Double Bed">Double Bed</option>
                                <option value="2 Single Beds">2 Single Beds</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="view">View (Internal/ External)</label>
                            <select class="form-control" name="view">
                                <option value="<?php echo $reservation->view; ?>" selected ><?php echo $reservation->view; ?></option>
                                <option value="Internal">Internal</option>
                                <option value="External">External (+20%)</option>
                            </select>
                        </div>

                        <!-- set for kids -->
                        <div class="container fluid d-flex justify-content-around my-2">
                            <div class="form-group mt-2">
                                <label for="kids1" >Kids aged 2- years old</label>
                                <select name="kid0_2yo">
                                    <option value="<?php echo $reservation->kid0_2yo; ?>" selected ><?php echo $reservation->kid0_2yo; ?></option>

                                    <?php
                                    
                                for ($i=0; $i<=4; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="kids2" >Kids aged from 2 - 14 years old</label>
                                <select name="kid2_14yo">
                                    <option value="<?php echo $reservation->kid2_14yo; ?>" selected ><?php echo $reservation->kid2_14yo; ?></option>

                                    <?php
                                for ($i=0; $i<=4; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="kids3" >Kids aged from 14+ years old</label>
                                <select name="kid14yo">
                                    <option value="<?php echo $reservation->kid14yo; ?>" selected ><?php echo $reservation->kid14yo; ?></option>

                                    <?php
                                for ($i=0; $i<=4; $i++)
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
                                <select class="custom-select mr-sm-2" name="add_bed">
                                    <option value="<?php echo $reservation->add_bed; ?>" selected ><?php echo $reservation->add_bed; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>


                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="add_room">Additional Room (50%/room)</label>
                                <select class="custom-select mr-sm-2" name="add_room">
                                    <option value="<?php echo $reservation->add_room; ?>" selected ><?php echo $reservation->add_room; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="foom">Food Pension</label>
                            <select class="form-control" name="food_pension">
                                <option value="<?php echo $reservation->food_pension; ?>" selected ><?php echo $reservation->food_pension; ?></option>
                                <option value="Complete">Complete (100dh/day)</option>
                                <option value="Partial">Partial (50dh/day)</option>
                                <option value="None">None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="entry_date">Check In</label>
                            <input type="date" name="entry_date" class="form-control" value="<?php echo $reservation->entry_date; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exit_date">Check Out</label>
                            <input type="date" name="exit_date" class="form-control" value="<?php echo $reservation->exit_date; ?>">
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