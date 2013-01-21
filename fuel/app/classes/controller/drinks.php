<?php
class Controller_Drinks extends Controller_Template
{
    
    public function action_index($page_id=NULL)
    {
        
        $nav = Model_Content::find('all');
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        if(isset($page_id))
        {
           $data = Model_Content::find($page_id);
           $view = View::forge('drinks/index');
           $view->set('data',$data);
           $this->template->content=$view;
        }
        else
        {
            
           $view = View::forge('drinks/index');           
           $this->template->content=$view;
        }
        
    }
    public function  action_list($page_id=NULL)
    {
        $nav = Model_Content::find('all');
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        if(isset($_GET["name"])&&isset($_GET["ingr"])&&$_GET["name"]!=NULL&&$_GET["ingr"]!=NULL)
        {
            
        }
        else if(isset($_GET["name"])&&$_GET["name"]!=NULL)
        {
            $list=  Model_Kokteilis::find('all', array('where'=> array(array('name','LIKE','%'.$_GET["name"].'%'))));
            $view = View::forge('drinks/list');
            $view->set('data',$list);
            $this->template->content=$view;
        }
        else if(isset($_GET["ingr"])&&$_GET["ingr"]!=NULL)
        {
            
        }
        else 
        {    
            $list=  Model_Kokteilis::find('all');
            $view = View::forge('drinks/list');
            $view->set('data',$list);
            $this->template->content=$view;
        }
    }
    public function action_view()
    {
        $view=View::forge('drinks/view');
    }
    public function  action_add()
    {
        $view=View::forge('drinks/add');
    }
    
    public function action_about()
    {
        $view=View::forge('drinks/about');
        $this->template->content=$view;
    }
    
    public function  action_404()
    {
        $view=View::forge('drinks/404');
        $this->template->content=$view;
    }
    
   
    
    
}

 
?>
