<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
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
            <div class="col-4"></div>
            <div class="col-4">
            <div class="alert alert-danger" role="alert">
                <p> <strong> Field can not empty!</strong> Yor should fill all the field</p>
            </div>
                <button type="submit" class="btn btn-danger  btn-block" name="back" onClick="history.go(-1);">Go Back</button>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>