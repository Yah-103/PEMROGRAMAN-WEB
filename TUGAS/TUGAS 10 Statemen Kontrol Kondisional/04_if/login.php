<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if ((($username == "eko") && ($password == "passjoko")) ||
    (($username == "min") && ($password == "passmin"))) {
    echo "Login sukses";
}
else {
    echo "Login gagal";
}
?>