<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">

</head>
<body>
<div class="signup-form">
    <form method="POST">
        <div class="form-header">
            <h2>Sign Up</h2>
            <p>Fill out this form and start chatting with friends</p>
        </div>
        <div class="form-group">
            <label for="">User name</label>
            <input type="text" name="user_name" class="form-control" placeholder="Enter username" id="" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="user_pass" class="form-control" placeholder="Enter password" id="" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" id="" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <select type="text" name="user_country" id="" class="form-control" required>
                <option>select a country</option>
                <option>Uganda</option>
                <option>kenya</option>
                <option>Tanzania</option>
                <option>Rwanda</option>
                <option>Burundi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <select type="text" name="user_gender" id="" class="form-control" required>
                <option>select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="" class="checkbox-inline"><input type="checkbox" required name="" id="">&nbsp I accept the <a href="#">Terms of User</a>&amp; <a href="#">Privacy Policy</a> </label>
        </div>
                
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign_up">Sign Up</button>
        </div>
        <?php include("signup_user.php"); ?>
    </form>
    <div class="text-center small">Already have an account? <a href="signin.php">Signin Here</a></div>
</div>


</body>
</html>