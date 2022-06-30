<?php
    /**
     * Guest book controller is responsible for data generation
     */
    //define — defines a named constant
    define("GUEST_BOOK", "gbook.dat");
    require_once "model.php";

    //The executable part of the script
    $book =loadBook(GUEST_BOOK);
    if(!empty($_REQUEST['doAdd'])) {
        $book = [time() => $_REQUEST['new']] + $book;
        saveBook(GUEST_BOOK, $book);
    }
    //Add template`s view
    include "view.php";