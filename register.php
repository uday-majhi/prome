<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <title>Register</title>
</head>

<body>
    <div class="outer_container">
        <fieldset>
            <legend>Register</legend>
            <form action="register_config.php" method="post">
                <div class="form-group">
                    <label for="username">First Name:</label>
                    <input type="text" class="form-control" id="username" name="firstName" required />
                </div>

                <div class="form-group">
                    <label for="username">Last Name:</label>
                    <input type="text" class="form-control" id="username" name="lastName" required />
                </div>

                <div class="form-group">
                    <label for="username">Mobile:</label>
                    <input type="text" class="form-control" id="username" name="mobile" required />
                </div>

                <div class="form-group">
                    <label for="username">Role:</label>
                    <select name="role">
                    <option value="1">Admin</option>    
                    <option value="2">System User</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Email(Username):</label>
                    <input type="email" class="form-control" id="username" name="email" required />
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" required />
                </div>

                <div class="form-group">
                    <label for="pwd">Confirm-Password:</label>
                    <input type="password" class="form-control" id="pwd" name="confirm_password" required />
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="male" name="gender" checked />
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="female" name="gender" />
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>

                <button type="submit" class="btn btn-default bg-info" name="register">Register</button>
            </form>
        </fieldset>
    </div>
</body>

</html>