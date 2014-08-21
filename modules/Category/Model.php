<?php

class Category_Model extends Model
{
    var $__table = 'category';

    var $id;
    var $name;
#!/usr/bin/env     var $father;
    var $amount;

    function table()
    {
        return array(
            'id'         => DB_DATAOBJECT_INT,
            'name'     => DB_DATAOBJECT_STR,
            'father'         => DB_DATAOBJECT_INT,
            'amount'         => DB_DATAOBJECT_INT
        );
    }

    function keys()
    {
        return array('id');
    }

}
class Person_Model extends Model
{
    var $__table = 'personas';

    var $id;
    var $nombre;
    var $apellido;

    function table()
    {
        return array(
            'id'         => DB_DATAOBJECT_INT,
            'nombre'     => DB_DATAOBJECT_STR,
            'apellido'     => DB_DATAOBJECT_STR
        );
    }

    function keys()
    {
        return array('id');
    }

}
class People_Categories_Model extends Model
{
    var $__table = 'people_categories';

    var $id;
    var $id_people;
    var $id_category;

    function table()
    {
        return array(
            'id'         => DB_DATAOBJECT_INT,
            'id_people'     => DB_DATAOBJECT_INT,
            'id_category'     => DB_DATAOBJECT_INT
        );
    }

    function keys()
    {
        return array('id');
    }
    
}