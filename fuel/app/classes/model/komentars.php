<?php

class Model_Komentars extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'komentars';
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
        'username' => array(
            'data_type' => 'varchar',
        ),
        'comment' => array(
            'data_type' => 'varchar',
            'label' => 'Comment',
            'form' => array('type' => 'text'),
            'default' => 'Some comment...',                   
        ),
        'date_created' => array(
            'date_type' => 'date_created',
        ),
             
    );
    
    
    
    
}

?>
