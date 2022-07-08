<?php

require 'Log.php';
require 'Reader.php';

if (file_exists($argv[1])) {
  $reader = new Task\Reader();
  $reader->readFile($argv[1]);
  $response = array('views' => $reader->views(),
  'urls' => $reader->uniqueUrls(),
  'traffic' => $reader->traffic(),
  'crawlers' => $reader->crawlers(),
  'statusCodes' => $reader->codesNumber());
  echo json_encode($response, JSON_PRETTY_PRINT);
} else {
  echo 'Can not open file to read log information.';
}
?>
