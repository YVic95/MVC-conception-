<?php
    /**
     * Show the record component
     */
    if(!defined("GBOOK")) {
        define("GBOOK", "gbook.dat");
    }
    require_once "model.php";
    $data = loadBook(GBOOK);