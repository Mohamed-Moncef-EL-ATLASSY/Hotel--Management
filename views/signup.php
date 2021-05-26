<?php
    if (isset($_POST['login']))
    {
        Redirect::to('login');
    }

    if (isset($_POST['submit']))
    {
        $createUser = new UserController();
        $createUser->register();
        Redirect::to('login');
    }

    include('./views/includes/alerts.php');

?>
<head>
    <title>Sign up - Bivago</title>
</head>

<body class="text-center">

<style>
<?php include 'style/style-signup/signup.css'; ?>
</style>


    <main class="form-signin">
    <form method="post">
        <br>
        <img class="mb-4" src="./views/images/bivago.png" alt="" width="120" height="120">
        <?php include('./views/includes/alerts.php');?>
        <h1 class="h3 mb-3 fw-normal">Sign up</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="First name" name="fname" required>
            <label for="floatingInput">First name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Last name" name="lname" required>
            <label for="floatingInput">Last name</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> I have read and agree to the privacy policy
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3 " type="submit" name="submit">Sign up</button>
        <button class="w-100 btn btn-lg btn-outline-success" type="submit" name="login">Already have an account?</button>
        <p class="mt-5 mb-3 text-muted">&copy; Mohamed Moncef EL ATLASSY</p>
        </form>
    </main>
</body>

</html>

