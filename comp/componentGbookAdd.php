<?php 
    /**
     * Add new record component
     */
    if(!defined("GBOOK")) {
        define("GBOOK", "gbook.dat");
    }
    require_once "model.php";
    //If Add button was clicked
    if(!empty($_REQUEST['doAdd'])) {
        //Download Guest Book
        $tmpBook = loadBook(GBOOK);
        //Add new record to the Guest Book
        $tmpBook = [time() => $_REQUEST['new']] + $tmpBook;
        //Upload to disk
        saveBook(GBOOK, $tmpBook);
    }
    $data = null;