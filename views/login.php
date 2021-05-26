
<?php
    if (isset($_POST['signup']))
    {
        Redirect::to('signup');
    }

    if(isset($_POST['submit'])){
		$loginUser = new UserController();
		$loginUser->authentication();
	}
?>
<head>
    <title>Log in - Bivago</title>
</head>

<body class="text-center">

<style>
<?php include 'style/style-login/login.css'; ?>
</style>

    <main class="form-signin">
    <form method="post">
        <br>
        <img class="mb-4" src="./views/images/bivago.png" alt="" width="120" height="120">
        <?php include('./views/includes/alerts.php');?>
        <h1 class="h3 mb-3 fw-normal">Log in</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="submit">Log in</button>
        <button class="w-100 btn btn-lg btn-outline-success" type="submit" name="signup">Not a user yet?</button>
        <p class="mt-5 mb-3 text-muted">&copy; Mohamed Moncef EL ATLASSY</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>