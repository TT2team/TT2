<?php

class Model_Ingredient extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'ingredient';
    protected static $_belongs_to = array('kokteilis' => array(
            'model_to' => 'Model_Kokteilis',
            'key_from' => 'kokteilis_id',
            'key_to' => 'id',
        )
    );
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
