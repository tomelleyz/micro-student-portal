<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undergraduate Portal</title>
    <link rel="stylesheet" type="text/css" href="./tools/materialize.min.css">
    <link rel="stylesheet" href="./tools/google_icons/material-icons.css">
</head>
<body>
    <?php include './students_data.inc.php';?>
    
    <div class="row">
        <div class="col s12 l3" style="border-right: 1px solid silver;">
            <ul id="slide-out" class="sidenav sidenav-fixed collection">
                <li><a href="./" class="collection-item waves-effect black-text">Home</a></li>
                <li><a href="./student-page.php" class="collection-item red darken-1 white-text active">Student Info</a></li>
                <li><a href="./student-results.php" class="collection-item black-text">Check results</a></li>
                <li><a href="./" class="collection-item black-text">Log out</a></li>
            </ul>
        </div>

        <div class="col s12 l9">
            <div class="container">
                
                <a href="#" data-target="slide-out" class="sidenav-trigger red-text text-darken-1 hide-on-large-only"><i class="material-icons">menu</i></a>
                <h4>Undergraduate Portal</h4>
                <p>Welcome back <b><?php echo $name;?></small></b>
                <div style="border-top: 3px solid #e60000;" class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s12 l5">
                            <img style="border: 4px solid #ffffff;" src="./images/picture_of_a_lecture_hall.jpg" alt="picture of the student" class="circle responsive-img">
                        </div>
                        <div class="col s12 l7">
                            <ul class="collection with-header">
                                <li class="collection-header red lighten-5">
                                    <h5><?php echo $name; ?></h5>
                                    <span class="grey-text text-darken-3"><?php echo $matricNumber; ?></span>
                                </li>
                                <li class="collection-item">
                                    B.Sc. Information &amp; Communication Science
                                </li>
                                <li class="collection-item">
                                    Department of Information &amp; Communication Science
                                </li class="collection-item">
                                <li class="collection-item">
                                    Faculty of Communication &amp; Information Sciences
                                </li>
                                <li class="collection-item red lighten-5">
                                    <b>200</b> Level 
                                    <span class="secondary-content grey-text text-darken-3"><b>5.0</b> CGPA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="./tools/jquery-3.3.1.min.js"></script>
    <script src="./tools/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
</body>
</html>