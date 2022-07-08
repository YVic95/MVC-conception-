<?php
    /**
     * Show news component
     */
    $data = [];
    $f = fopen("./news.txt", "r");
    for($i = 1; !feof($f) && $i <=5; $i++) {
        $news = trim(fgets($f, 1024));
        if(!$news) continue;
        $data[] = $news;
    }