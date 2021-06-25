<?php

class UserController{

    public function register()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'first_name' => $_POST['fname'],
                'last_name' => $_POST['lname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            );
            $result = User::createUser($data);
            if($result === 'ok'){
				Session::set('success','Account created successfully!');
				Redirect::to('login');
			}else{
				echo $result;
			}
        }
    }

    public function authentication(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$result = User::login($data);
            if($result->email === 'admin@bivago.com' && $result->password === 'adminpass'){
                $_SESSION['loggedIn'] = true;
				$_SESSION['email'] = $result->email;
				Redirect::to('home');
            }

			else if($result->email === $_POST['email'] && $result->password === $_POST['password']){
				$_SESSION['loggedIn'] = true;
				$_SESSION['email'] = $result->email;
				Redirect::to('bivago');
			}
            else{
				Session::set('error','The email address or password is incorrect. Please try again...');
				Redirect::to('login');
			}
		}
	}

    static public function logout(){
		session_destroy();
	}
}

?>