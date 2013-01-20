<?php
class Controller_Drinks extends Controller_Template
{
    public function action_index($page_id=NULL)
    {
        $view = View::forge('drinks/index');
    }
    public function  action_list()
    {
        $view = View::forge('drinks/list');
    }
    public function action_view()
    {
        $view=View::forge('drinks/view');
    }
    public function  action_add()
    {
        $view=View::forge('drinks/add');
    }
    
    
}

 
?>
