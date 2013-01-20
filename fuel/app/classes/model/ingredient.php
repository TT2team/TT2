<?php

class Model_Content extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'ingredient';
    protected static $_properties = array(
        
        'id',
        'kokteilis_id' => array(
            'data_type' => 'int',
        ),
        'amount' => array(
            'data_type' => 'double',
            'label' => 'Amount',
            'form' => array('type' => 'text'),
            'default' => '1',
        ),
        'unit' => array(
            'data_type' => 'varchar',
            'label' => 'Unit of measurement',
            'default' => '',                   
        ),
        'ingredient' => array(
            'data_type' => 'varchar',
            'label' => 'Ingredient',            
            'form' => array('type' => 'text'),
            'default' => '',
        )
             
    );
    
    
    
    
}

?>
