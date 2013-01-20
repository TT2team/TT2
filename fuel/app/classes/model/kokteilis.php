<?php

class Model_Content extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'kokteilis';
    protected static $_properties = array(
        
        'id',
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'Coctail name',
            'form' => array('type' => 'text'),
            'default' => 'Coctail name',
        ),
        'date_created' => array(
            'date_type' => 'timestamp',
        ),
        'likes' => array(
            'date_type' => 'int',
        ),
        'unlikes' => array(
            'date_type' => 'int',
        ),        
             
    );
    
    
    
    
}

?>
