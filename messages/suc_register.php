<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    body{
        background: url(../img/1.jpg);
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <div class="alert alert-success" role="alert">
                <p> <strong> Login Success!!!</strong> Congratulation you have done a great job.</p>
            </div>
                <form action="../index.php" method="post">
                <button type="submit" class="btn btn-info btn-block" name="back" onClick="history.go(-1);">Log Out</button>
                </form>
               
               <br><br>
                <?php session_start()?>
                <ul class="list-group">
                    <li class="list-group-item"> <strong> Username: </strong>
                        <?php
                            if (!empty($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            }
                        ?>
                    </li>
                    <li class="list-group-item"> <strong> Password: </strong>
                        <?php
                            if (!empty($_SESSION['pwd'])) {
                                echo $_SESSION['pwd'];
                            }
                        ?>
                    </li>
                    </li>
                    <li class="list-group-item"> <strong> E_mail: </strong>
                        <?php
                            if (!empty($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            }
                        ?>
                    </li>
                    </li>
                    <li class="list-group-item"> <strong> Message: </strong>
                        <?php
                            if (!empty($_SESSION['message'])) {
                                echo $_SESSION['message'];
                            }
                        ?>
                    </li>
                </ul>
                
            </div>  
            </div>
        </div>
    </div>
</body>
</html>