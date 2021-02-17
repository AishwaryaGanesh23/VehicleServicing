<?php

session_start();

require 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Css and bootstrap Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/40419ae504.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <title>Animation</title>
</head>

<body>

    <div class="container">
        <form id="" method="post" class="form-appt">

            <div class="form-section">
                <input type="text" name="name" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">Name</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="tel" name="contact" id="contact" required />
                <label for="contact" class="label-name">
                    <span class="content-name">Contact</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="text" name="address" id="address" required />
                <label for="address" class="label-name">
                    <span class="content-name">Address</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="email" name="email" id="email" required />
                <label for="email" class="label-name">
                    <span class="content-name">Email Address</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="text" name="model" id="model" required />
                <label for="model" class="label-name">
                    <span class="content-name">Vehicle Model</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="text" name="reg" id="reg" required />
                <label for="reg" class="label-name">
                    <span class="content-name">Vehicle Registration</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="number" name="distance" id="distance" required />
                <label for="distance" class="label-name">
                    <span class="content-name">Total Kilometers</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>

            <div class="form-section">
                <input type="date" name="date" id="date" onfocus="(this.type='date')" onfocusout="(this.type='text')" required />
                <label for="date" class="label-name">
                    <span class="content-name">Appointment Date</span>
                </label>
                <span class="" id=""></span>
            </div>
            <br>
            <br>


            <div class="form-group">
                <label>Services:</label>
                <ul class="list-group">
                    <?php
                    $sql = "SELECT DISTINCT service_name FROM services_offered ORDER BY service_name";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input product_check" value="<?= $row['service_name']; ?>" id="service_name"><?= $row['service_name']; ?>

                                </label>
                            </div>

                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
            <br>
            <br>

            <div class="form-group">
                <label for="desc">Specific Request:</label>
                <span class="" id=""></span>
                <br>
                <br>
                <textarea rows="4" cols="40" name="address" id="address" required></textarea>
            </div>
            <br>
            <br>

            <button type="submit" class="btn btn-success btn-lg" name="addAppt" id="submit">Place Appointment</button>

        </form>

        <br>
        <br>
        <br>
    </div>




    <script>
        $(document).ready(function() {

            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;

            $('#date').attr('min', maxDate);

        })
    </script>
</body>




</html>