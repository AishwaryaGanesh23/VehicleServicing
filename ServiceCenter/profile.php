<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Css and bootstrap Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/40419ae504.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>


    <title>Profile</title>
</head>

<body>
    <div class="profile_container">
        <div class="profile_left">
            <div class="profile_logo">
                <div class="logoimg"></div>
            </div>
            <div class="profile_options">
                <div class="option">Personal Details</div>
            </div>
            <div class="profile_options">
                <div class="option">
                    Vehicle Details
                </div>
            </div>
            <div class="profile_options">
                <div class="option">
                    Appointments
                </div>
            </div>
            <div class="profile_options">
                <div class="option">
                    Book Appointments
                </div>
            </div>
            <div class="profile_options">
                <div class="option">
                    LOGOUT
                </div>
            </div>
        </div>
        <div class="profile_right">
            <div id="profile-text">
                Login Successful
            </div>
        </div>
    </div>
</body>

</html>


<div>
    <div class="label">Vehicle Model : </div>
    <div class="detail"><?php echo $veh_data['vehicle_model']; ?></div>
    <div class="label">Vehicle Registration Model : </div>
    <div class="detail"><?php echo $veh_data['vehicle_registration_no']; ?></div>
    <div class="label">Services Opted :</div>
    <?php
    // select service_name from services_offered where service_id = (select service_id from opted_services where appointment_id = '$appid'"
    $ser_sql = mysqli_query($connect,"select service_name from services_offered  where service_id in (select service_id from opted_services where appointment_id = '$appid')");
    while($ser_data = mysqli_fetch_array($ser_sql)){
        // echo $ser_sql
    ?>
    <div class="detail"><?php echo $ser_data['service_name']; ?></div>
    <?php
    }
    ?>
    <div class="label">Vehicle Model:</div>
    <div class="detail"><?php echo $veh_data['vehicle_model']; ?></div>
    <div class="label">Vehicle Model:</div>
    <div class="detail"><?php echo $veh_data['vehicle_model']; ?></div>

</div>