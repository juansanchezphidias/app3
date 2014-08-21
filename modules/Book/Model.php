<?php

class Book_Model extends Model
{
    var $__table = 'phidias_books';

    var $id;
    var $title;
    var $isbn;
    var $synopsis;

    function table()
    {
        return array(
            'id'         => DB_DATAOBJECT_INT,
            'title'     => DB_DATAOBJECT_STR,
            'isbn'   => DB_DATAOBJECT_STR,
            'synopsis'      => DB_DATAOBJECT_STR
        );
    }

    function keys()
    {
        return array('id');
    }

}