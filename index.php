<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#e60000"/>
    <title>LOGIN | Undergraduate Portal</title>
    <link rel="stylesheet" type="text/css" href="tools/materialize.min.css">
    <link rel="stylesheet" href="tools/google_icons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <?php

        $matricNumber = $password = $loginError = "";
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $matricNumber = test_input($_POST["matricNumber"]);
            $matricNumber = strtolower($matricNumber);
            $password = test_input($_POST["password"]);

            $studentData = file_get_contents("./student_data.txt");
            $decodedStudentData = json_decode($studentData);

            if ($matricNumber == $decodedStudentData->matricNumber && 
                $password == $decodedStudentData->password) {
                header("Location: ./student-page.php");
                exit;
            } else {
                $loginError = "Invalid login parameters";
            }
        }
 
    ?>
    
    <div class="row" style="margin: 0;">
        <div class="col s12 l5 text-div valign-wrapper">
            <div class="container center-align white-text">
                <h3>Welcome to the <br/>Undergraduate Portal</h3>
            </div>
        </div>
        <div class="col s12 l7 valign-wrapper form-div">
            <div class="container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="z-depth-2">
                <h4>Login</h4>
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="matricNumber" id="matricNumber">
                    <label for="matricNumber">Matric Number</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="passwordField">
                    <label for="passwordField">Password</label>
                    <i title="Show password" class="material-icons" id="showpasswordIcon">visibility</i>
                    <i title="Hide password" class="material-icons" id="hidepasswordIcon">visibility_off</i>
                </div>
                <span class="red-text text-darken-1"><?php echo $loginError; ?></span>
                <div class="row" style="margin: 0;">
                <button class="col s12 m4 btn-flat btn-large" type="submit">Log in</button>
                <a href="#!" class="col s12 m4 offset-m4">Forgot password?</a>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="tools/jquery-3.3.1.min.js"></script>
    <script src="tools/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#showpasswordIcon').click(function() {
                $('#passwordField').attr("type", "text");
                $(this).hide();
                $('#hidepasswordIcon').show();
            });
            $('#hidepasswordIcon').click(function() {
                $('#passwordField').attr("type", "password");
                $(this).hide();
                $('#showpasswordIcon').show();
            });
        });
    </script>
</body>
</html>