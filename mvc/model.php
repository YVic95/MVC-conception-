<?php
    /**
     * Guest book model(core)
     */
    //Download guest book from the disk. Returns book`s contents
    function loadBook($fname) {
        if(!file_exists($fname)) return [];
        $Book = unserialize(file_get_contents($fname));
        return $Book;
    }
    //Save book`s contents to the disk
    function saveBook($fname, $book) {
        file_put_contents($fname, serialize($book));
    }