<?php

class Category_People_Model extends Model
{
    var $__table = 'people_categories';

    var $id;
    var $id_people;
    var $id_category;

    function table()
    {
        return array(
			'id'          => DB_DATAOBJECT_INT,
			'id_people'   => DB_DATAOBJECT_INT,
			'id_category' => DB_DATAOBJECT_INT
        );
    }

    function keys()
    {
        return array('id');
    }

    function links()
    {
        $person   = new Person_Model;
        $category = new Category_Model;

        return array(
            "id_people"   => "$person->__table:id",
            "id_category" => "$category->__table:id"
        );
    }
}