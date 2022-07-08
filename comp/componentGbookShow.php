<?php
    /**
     * Show the record component
     * Prepares data to display
     */
    if(!defined("GBOOK")) {
        define("GBOOK", "gbook.dat");
    }
    require_once "model.php";
    $data = loadBook(GBOOK);