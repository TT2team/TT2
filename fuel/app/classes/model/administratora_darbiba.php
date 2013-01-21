<?php

class Model_Administratora_Darbiba extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'administratora_darbiba';
    protected static $_belongs_to = array('adnimistrators' => array(
            'model_to' => 'Model_Administrators',
            'key_from' => 'administrators_username',
            'key_to' => 'username',
        )
    );
    
    protected static $_properties = array(
        
        'id',
        'administrators_username' => array(
            'data_type' => 'varchar',
        ),
        'action_code' => array(
            'date_type' => 'int',  
        ),
        'changed_id' => array(
            'date_type'=>'int',
        ),
        'changed_name' => array(
            'date_type' => 'varchar',
        ),
        'date_created' => array(
            'date_type' => 'timestamp',
        ),
        
        
    );
    
    
    
    
}
?>
