<?php

class Reservation {

    static public function getAllReservations(){
        // 1st connect: the file 
        // 2nd connect: the function
        $statement = connect::connect()->prepare('SELECT * FROM reservation');
        $statement->execute();
        return $statement->fetchAll();
        $statement->close();
        $statement = null;
    }


    static public function add($data){
        $statement = connect::connect()->prepare('INSERT INTO reservation
            (room_type, bed_type, view, kid0_2yo, kid2_14yo, kid14yo, add_bed, add_room, food_pension, entry_date , exit_date)
            VALUES
            (:room_type, :bed_type, :view, :kid0_2yo, :kid2_14yo, :kid14yo, :add_bed, :add_room, :food_pension, :entry_date , :exit_date)');

        $statement->bindParam(':room_type',     $data['room_type']);
        $statement->bindParam(':bed_type',      $data['bed_type']);
        $statement->bindParam(':view',          $data['view']);
        $statement->bindParam(':kid0_2yo',      $data['kid0_2yo']);
        $statement->bindParam(':kid2_14yo',     $data['kid2_14yo']);
        $statement->bindParam(':kid14yo',       $data['kid14yo']);
        $statement->bindParam(':add_bed',       $data['add_bed']);
        $statement->bindParam(':add_room',      $data['add_room']);
        $statement->bindParam(':food_pension',  $data['food_pension']);
        $statement->bindParam(':entry_date',    $data['entry_date']);
        $statement->bindParam(':exit_date',     $data['exit_date']);

        if($statement->execute()){
            return 'ok';
        }
        else{
            return 'error';
        }
        $statement->close();
        $statement = null;
    }

    static public function update($data){
        $statement = connect::connect()->prepare('UPDATE reservation SET
            room_type     = :room_type,
            bed_type      = :bed_type,
            view          = :view,
            kid0_2yo      = :kid0_2yo,
            kid2_14yo     = :kid2_14yo,
            kid14yo       = :kid14yo,
            add_bed       = :add_bed,
            add_room      = :add_room,
            food_pension  = :food_pension,
            entry_date    = :entry_date,
            exit_date     = :exit_date
            WHERE id = :id ');

        $statement->bindParam(':id',            $data['id']);
        $statement->bindParam(':room_type',     $data['room_type']);
        $statement->bindParam(':bed_type',      $data['bed_type']);
        $statement->bindParam(':view',          $data['view']);
        $statement->bindParam(':kid0_2yo',      $data['kid0_2yo']);
        $statement->bindParam(':kid2_14yo',     $data['kid2_14yo']);
        $statement->bindParam(':kid14yo',       $data['kid14yo']);
        $statement->bindParam(':add_bed',       $data['add_bed']);
        $statement->bindParam(':add_room',      $data['add_room']);
        $statement->bindParam(':food_pension',  $data['food_pension']);
        $statement->bindParam(':entry_date',    $data['entry_date']);
        $statement->bindParam(':exit_date',     $data['exit_date']);

        if($statement->execute()){
            return 'ok';
        }
        else{
            return 'error';
        }
        $statement->close();
        $statement = null;
    }

    // static public function reserve($id_reservation_fk,$id_customer_fk){
    //     echo 'here';
    //     $query ='INSERT INTO reserve (id_reservation_fk, id_customer_fk) values (:id_reservation_fk,:id_customer_fk)';
    //     echo 'here';
    //     $statement = connect::connect()->prepare($query);
    //     echo 'here';
    //     $statement->execute(array(":id_reservation_fk" => $id_reservation_fk,":id_customer_fk" => $id_customer_fk));
    //     Redirect::to('home');
    // }

    static public function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM reservation WHERE id=:id';
            $statement = connect::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
        }
        catch(PDOException $exception){
            echo 'error' . $exception->getMessage();

        }
    }


    static public function getReservation($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM reservation WHERE id=:id';
            $statement = connect::connect()->prepare($query);
            $statement->execute(array(":id" => $id));

            $reservation = $statement->fetch(PDO::FETCH_OBJ);
            return $reservation;
        }
        catch(PDOException $exception){
            echo 'error' . $exception->getMessage();

        }
    }
}






?>