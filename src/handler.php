<?php

include 'lib/GoogleSpeechToText.php';

$google = new GoogleSpeechToText();
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads" . $_FILES["file_name"]["name"]);
$google->convertFile($_FILES['file']);
$google->setHrz($_POST['rate']);
$google->setupCurl();

echo $google->process();