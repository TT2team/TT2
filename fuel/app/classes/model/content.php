<?php

class Model_Content extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'content';
    protected static $_properties = array(
        
        'id',
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'Drink name',
            'form' => array('type' => 'text'),
            'default' => 'New drink',
        ),
        'text' => array(
            'data_type' => 'varchar',
            'label' => 'Text about drink',
            'form' => array('type' => 'text'),
            'default' => 'Descrition about drink',
        ),
        'picture_url' => array(
            'data_type' => 'varchar',
            'label' => 'picture url',
            'form' => array('type' => 'text'),
            'default' => 'http://something',                   
        )
             
    );
    
    
    
    
}

?>
