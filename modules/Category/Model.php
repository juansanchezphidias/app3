<?php

class Category_Model extends Model
{
    var $__table = 'category';

    var $id;
    var $name;
    var $father;
    var $amount;

    function table()
    {
        return array(
            'id'     => DB_DATAOBJECT_INT,
            'name'   => DB_DATAOBJECT_STR,
            'father' => DB_DATAOBJECT_INT,
            'amount' => DB_DATAOBJECT_INT
        );
    }

    function keys()
    {
        return array('id');
    }

}