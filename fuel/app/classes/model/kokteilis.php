<?php

class Model_Kokteilis extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'kokteilis';
    protected static $has_many =array(
        'ingredient'=>array(
            'model_to'=>'Model_Ingredient',
            'key_from'=>'id',
            'key_to'=>'kokteilis_id',
        ),
        
        'komentars'=>array(
            'model_to'=>'Model_Komentars',
            'key_from'=>'id',
            'key_to'=>'kokteilis_id',
        ),
    );
    
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
