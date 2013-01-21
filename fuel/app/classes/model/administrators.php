<?php

class Model_Administrators extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'administrators';
    protected static $has_many =array('darbiba'=>array(
            'model_to'=>'Model_Darbiba',
            'key_from'=>'id',
            'key_to'=>'administrators_id',
        )
    );
    
    protected static $_properties = array(
        
        'id',
        'username' => array(
            'data_type' => 'varchar',
            'label' => 'Username',
            'form' => array('type' => 'text'),
        ),
        'password' => array(
            'data_type' => 'varchar',
            'label' => 'Password',
            'form' => array('type' => 'password'),
        ),

             
    );
    
    
    
    
}

?>
