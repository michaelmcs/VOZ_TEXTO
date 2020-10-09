<?php

require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;

use Google\Cloud\Core\ServiceBuilder;

// Authenticate using a keyfile path
$pathkeyfile = __DIR__.'/keyfile.json';
//echo "$pathkeyfile";

putenv('GOOGLE_APPLICATION_CREDENTIALS='.$pathkeyfile);

# The name of the audio file to transcribe
$audioFile = __DIR__ . '/prueba_ds.wav';

# get contents of a file into a string
$content = file_get_contents($audioFile);

# set string as audio content
$audio = (new RecognitionAudio())
    ->setContent($content);

# The audio file's encoding, sample rate and language
$config = new RecognitionConfig([
    'encoding' => AudioEncoding::LINEAR16,
    'sample_rate_hertz' => 24000,
    'language_code' => 'es-ES'
]);

# Instantiates a client
$client = new SpeechClient();

# Detects speech in the audio file
$response = $client->recognize($config, $audio);

# Print most likely transcription
foreach ($response->getResults() as $result) {
    $alternatives = $result->getAlternatives();
    $mostLikely = $alternatives[0];
    $transcript = $mostLikely->getTranscript();
    printf('convertido de voz a texto : %s' . PHP_EOL, $transcript);
 
}

$client->close();

# [END speech_quickstart]