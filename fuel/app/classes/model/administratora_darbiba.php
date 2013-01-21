<?php

class Model_Administratora_Darbiba extends Orm\Model{
    protected static $_primary_key=array('id');
    protected static $_table_name = 'administratora_darbiba';
    protected static $_belongs_to = array('adnimistrators' => array(
            'model_to' => 'Model_Administrators',
            'key_from' => 'administrators_id',
            'key_to' => 'id',
        )
    );
    
    protected static $_properties = array(
        
        'id',
        'administrators_id' => array(
            'data_type' => 'int',
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
