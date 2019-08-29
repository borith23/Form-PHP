<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<style> 
    body{
        background: url(img/1.jpg);
    }
</style>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center"><h2>Login Form</h2></div>
                    <div class="card-body">
                        <form action="login/login.php" method="post">
                            <div class="form-group">
                                <label for="fname">Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-info" name="btn-login">Login</button>
                            <button type="submit" class="btn btn-danger float-right" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
