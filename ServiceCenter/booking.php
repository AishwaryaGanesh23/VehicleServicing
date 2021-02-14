<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Animation</title>
</head>

<body>

    <div class="img">
        <img src="img/banner.jpg">
    </div>

    <br>

    <div class="container">

        <div class="background">

            <form id="" method="post">

                <div class="form-section">

                    <input type="text" name="name" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">
                            Name
                        </span>
                    </label>
                </div>
                <br>
                <br>
                <div class="form-section">
                    <input type="tel" name="contact" id="contact" required />
                    <label for="contact" class="label-name">
                        <span class="content-name">Contact</span>
                    </label>
                </div>
                <br>
                <br>
                <div class="form-section">
                    <input type="text" name="address" id="address" required />
                    <label for="address" class="label-name">
                        <span class="content-name">Address</span>
                    </label>
                </div>
                <br>
                <br>

                <div class="form-section">
                    <input type="email" name="email" id="email" required />
                    <label for="email" class="label-name">
                        <span class="content-name">Email Address</span>
                    </label>
                </div>
                <br>
                <br>

                <div class="form-section">
                    <input type="text" name="model" id="model" required />
                    <label for="model" class="label-name">
                        <span class="content-name">Vehicle Model</span>
                    </label>
                </div>
                <br>
                <br>

                <div class="form-section">
                    <input type="text" name="reg" id="reg" required />
                    <label for="reg" class="label-name">
                        <span class="content-name">Vehicle Registration</span>
                    </label>
                </div>
                <br>
                <br>
                <div class="form-section">
                    <input type="number" name="distance" id="distance" required />
                    <label for="distance" class="label-name">
                        <span class="content-name">Total Kilometers</span>
                    </label>
                </div>
                <br>
                <br>

                <div class="form-section">
                    <input type="date" name="date" id="date" onfocus="(this.type='date')" onfocusout="(this.type='text')" required />
                    <label for="date" class="label-name">
                        <span class="content-name">Appointment Date</span>
                    </label>
                </div>
                <br>
                <br>


                <div class="form-group">
                    <label>Services:</label>
                    <br>
                    <br>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                </div>
                <br>
                <br>


                <div class="form-group">
                    <label for="desc">Specific Request:</label>
                    <br>
                    <textarea rows="4" cols="40" name="address" id="address" required></textarea>
                </div>
                <br>
                <br>


                <div class="form-group">
                    <button type="button" name="submit" id="submit">Place Appointment</button>
                </div>
            </form>
            <br>
            <br>
            <br>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

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