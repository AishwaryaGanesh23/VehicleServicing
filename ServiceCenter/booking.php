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

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
                <input type="text" id="datepick" required />
                <label for=" date" class="label-name">
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




    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            $(function() {

                dateRange = [
                  <?php

                  $sql2 = "select date_booking from appointment group by date_booking having count(date_booking) >1";
                  $result2 = $conn->query($sql2);

                  while ($row2 = $result2->fetch_assoc())
                  {
                    $date_echo = $row2["date_booking"];
                    $date_disable = date("d-m-Y", strtotime($date_echo));
                    echo "'$date_disable',";
                  }
                   ?>

                ];
                var today = new Date();
                $('#datepick').datepicker({
                    minDate: today,
                    beforeShowDay: function(date) {
                        var dateString = jQuery.datepicker.formatDate('dd-mm-yy', date);
                        var day = date.getDay();
                        if (day == 0 || dateRange.indexOf(dateString) != -1) {
                            return [false, "busy"]
                        } else {
                            return [true, "free"]
                        }
                    }
                });
            });
        });
    </script>
</body>




</html>
