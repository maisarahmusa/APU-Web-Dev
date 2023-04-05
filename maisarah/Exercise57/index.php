<?php

$sourceFileName = '\source.txt';
$destinationFileName = '\destination.txt';
$sourcePath = __DIR__ . $sourceFileName;
$destinationPath = __DIR__ . $destinationFileName;

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