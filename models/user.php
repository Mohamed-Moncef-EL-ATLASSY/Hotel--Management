<?php


class User{

    static public function createUser($data){
        $stmt = connect::connect()->prepare('INSERT INTO user(first_name,last_name,email,password) VALUES (:fname,:lname,:email,:password)');
        $stmt->bindParam(':fname',     $data['first_name']);
        $stmt->bindParam(':lname',     $data['last_name']);
        $stmt->bindParam(':email',     $data['email']);
        $stmt->bindParam(':password',  $data['password']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }

    static public function login($data){
		$email = $data['email'];
		try{
			$query = 'SELECT * FROM user WHERE email=:email';
			$stmt = connect::connect()->prepare($query);
			$stmt->execute(array(":email" => $email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $exception){
			echo 'error' . $exception->getMessage();
		}
	}
}

?>