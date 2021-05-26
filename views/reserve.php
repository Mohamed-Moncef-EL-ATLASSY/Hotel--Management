<?php 
	if(isset($_POST['id'])){
		$existReservation = new reservationController();
		$existReservation->reserveReservation();
		Redirect::to('home');
	}
?>