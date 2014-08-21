<?php

class Person_Model extends Model
{
    var $__table = 'personas';

    var $id;
    var $nombre;
    var $apellido;
    var $nacimiento;
    var $email;

    function table()
    {
        return array(
            'id'         => DB_DATAOBJECT_INT,
            'nombre'     => DB_DATAOBJECT_STR,
            'apellido'   => DB_DATAOBJECT_STR,
            'nacimiento' => DB_DATAOBJECT_INT,
            'email'      => DB_DATAOBJECT_STR
        );
    }

    function keys()
    {
        return array('id');
    }

}