<?php

class Model_Content extends Orm\Model{
    protected static $_primary_key=array('username');
    protected static $_table_name = 'administrators';
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
