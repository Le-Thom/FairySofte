<?php

foreach (scandir(__DIR__) as $dir => $file) {
    if(str_ends_with($file, ".php")) {
        require_once __DIR__ . "/" . $file;
    }
}