<?php
$secret = "12345";
$response = $_POST["g-recaptcha-response"];
$remoteip = $_SERVER["REMOTE_ADDR"];

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
$captchaSuccess = json_decode($verify);

if ($captchaSuccess->success) {
    echo "Captcha correcto";
} else {
    echo "Captcha incorrecto";
}
?>
