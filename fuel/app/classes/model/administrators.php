<?php

class Model_Administrators extends Orm\Model{
    protected static $_primary_key=array('username');
    protected static $_table_name = 'administrators';
    protected static $has_many =array('administratora_darbiba'=>array(
            'model_to'=>'Model_Administratora_Darbiba',
            'key_from'=>'username',
            'key_to'=>'administrators_username',
        )
    );
    
    protected static $_properties = array(
        
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
