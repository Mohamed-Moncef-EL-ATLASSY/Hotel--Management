<?php
class reservationController{

    public function getAllReservations(){
        $reservations = Reservation::getAllReservations();
        return $reservations;
    }

    public function getOneReservation(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );

            $reservation = Reservation::getReservation($data);
            return $reservation;
        }
    }

    public function addReservation(){
        if(isset($_POST['submit'])){
            $data = array(
                'room_type'    => $_POST['room_type'],
                'bed_type'     => $_POST['bed_type'],
                'view'         => $_POST['view'],
                'kid0_2yo'     => $_POST['kid0_2yo'],
                'kid2_14yo'    => $_POST['kid2_14yo'],
                'kid14yo'      => $_POST['kid14yo'],
                'add_bed'      => $_POST['add_bed'],
                'add_room'     => $_POST['add_room'],
                'food_pension' => $_POST['food_pension'],
                'entry_date'   => $_POST['entry_date'],
                'exit_date'    => $_POST['exit_date'],
            );
            $result = Reservation::add($data);
            if($result === 'ok'){
                Session::set('success', 'Reservation complete!');
                Redirect::to('home');
            }
            else{
                echo $result;
            }
        }
    }


    public function updateReservation(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'           => $_POST['id'],
                'room_type'    => $_POST['room_type'],
                'bed_type'     => $_POST['bed_type'],
                'view'         => $_POST['view'],
                'kid0_2yo'     => $_POST['kid0_2yo'],
                'kid2_14yo'    => $_POST['kid2_14yo'],
                'kid14yo'      => $_POST['kid14yo'],
                'add_bed'      => $_POST['add_bed'],
                'add_room'     => $_POST['add_room'],
                'food_pension' => $_POST['food_pension'],
                'entry_date'   => $_POST['entry_date'],
                'exit_date'    => $_POST['exit_date'],
            );
            $result = Reservation::update($data);
            if($result === 'ok'){
                Session::set('info', 'Reservation updated!');
                Redirect::to('home');
            }
            else{
                echo $result;
            }
        }
    }

    public function deleteReservation(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Reservation::delete($data);
            if($result === 'ok'){
                Session::set('error', 'Reservation cancelled!');
                Redirect::to('home');
            }
            else{
                echo $result;
            }
        }
    }
}

?>