<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Speech\SpeechClient;

# Your Google Cloud Platform project ID
$projectId = 'AIzaSyD6AgyqkMFG2sM7JbZtnjbZPYC1Vwt8TEo';

# Instantiates a client
$speech = new SpeechClient([
    'projectId' => $projectId,
    'languageCode' => 'en-US',
]);

# The name of the audio file to transcribe
$fileName = __DIR__ . 'quick.flac';

# The audio file's encoding and sample rate
$options = [
    'encoding' => 'FLAC',
    'sampleRateHertz' => 16000,
];

# Detects speech in the audio file
$results = $speech->recognize(fopen($fileName, 'r'), $options);

foreach ($results as $result) {
    echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
}
?>