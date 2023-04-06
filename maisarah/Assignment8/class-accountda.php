<?php

// guna ni contoh value kena return float, jdi o/p pun kena return float juga
//kalau tk declare, php mcm ignore. kot..
declare(strict_types=1);

class AccountDA
{
    /* create record */
    // float
    public static function create($account, $targetFile): int
    {
        $path = $targetFile;
        $file = fopen($path, 'a');
        /* check file open */
        if($file == false) {
            return 0;
        }
        $result = fputs($file, $account.PHP_EOL);
        fclose($file);
        return $result ? 1 : 0;
    }

    /* read all record */
    public static function readAll($targetFile): array
    {
        $path = $targetFile;
        $file = fopen($path, 'r');
        /* check file open */
        if($file == false) {
            return [];
        }
        /* read line-by-line and push to array */
        $arr = [];
        while(! feof($file)) {
            $arr[] = fgets($file);
        }
        fclose($file);
        return $arr;
    }

    /* update record */

}