<?php

$conn = new mysqli("localhost", "root", "", "servicecenter");

if ($conn->connect_error)
    die("Connection failed" . $conn->connect_error);
