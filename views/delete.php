<?php 
	if(isset($_POST['id'])){
		$existReservation = new reservationController();
		$existReservation->deleteReservation();
		Redirect::to('home');
	}
?>