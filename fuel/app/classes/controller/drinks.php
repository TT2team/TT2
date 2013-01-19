<?php
class Controller_Drinks extends Controller_Template
{
    public function action_index($page_id=NULL)
    {
        $out = View::forge('drinks/index');
    }
    
    
}

 
?>
