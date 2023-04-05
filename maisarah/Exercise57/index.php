<?php

$sourceFile = '\source.txt';
$destinationFile = '\destination.txt';
$sourcePath = __DIR__ . $sourceFile;
$destinationPath = __DIR__ . $destinationFile;

$sourceFile = fopen($sourcePath, 'r');
$destinationFile = fopen($destinationPath, 'w');

if($sourceFile == false) {
    echo "Source file not available";
    exit;
}

while (! feof($sourceFile)){
    $file = fgets($sourceFile);
    fputs($destinationFile, $file);
}

echo "($destinationFile) is created.";

?>