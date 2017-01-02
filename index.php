<?php

/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: ÉÏÎç11:41
 */



function tree($directory)
{
    $mydir = dir($directory);
    while ($file = $mydir->read()) {
        if ((is_dir($directory . DIRECTORY_SEPARATOR . $file)) AND ($file != ".") AND ($file != "..")) {
            tree("$directory/$file");
        } elseif ($file != "." AND $file != "..") {
            echo $directory . DIRECTORY_SEPARATOR . $file."\n";
        }
    }
    $mydir->close();
}


(tree("/demo/lib/Di/simple"));

