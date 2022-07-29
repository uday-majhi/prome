<!DOCTYPE html>
<html lang="en">
<head>
    <title>HIB Inaruwa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login to HIB</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="outer_container">
        <form action="login_config.php" method="post">
            <fieldset>
                <legend>Login To Data Entry Management System Inaruwa</legend>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required/>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" required/>
                </div>
                <button type="submit" class="btn btn-default bg-info" name="login">Submit</button>
                <p id="register_link">Not Register?<a href="register.php"> Register Here</a></p>
            </fieldset>
        </form>
        
    </div>
</body>
</html>