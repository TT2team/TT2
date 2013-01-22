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
        $list=array();
        $list[]=0;
        if(isset($_GET["name"])&&isset($_GET["ingr"])&&$_GET["name"]!=NULL&&$_GET["ingr"]!=NULL)
        {
            /*$list = Model_Kokteilis::find('all',array(
                'where' => array(
                    'related' => array(
                        'name'=> $_GET["ingr"])
                    )
                )
            );
            $view = View::forge('drinks/list');
            $view->set('data',$list);
            $this->template->content=$view;
            */
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
            /*
            $ingridients = Model_Ingredient::find('all');
           
            $rec_id=array();
            foreach ($ingridients as $ingr)
            {
                
                
                if($ingr->name=$_GET["ingr"])
                {
                    $rec_id[]=$ingr->kokteilis_id;
                    
                }
                $query='';
                foreach ($rec_id as $id)
                {
                    $query=$query.' id='.$id.' OR';
                }
            }
            $view = View::forge('drinks/list');
            $view->set('data',$list);
            $this->template->content=$view;*/
        }
        else 
        {    
            $list=  Model_Kokteilis::find('all');
            $view = View::forge('drinks/list');
            $view->set('data',$list);
            $this->template->content=$view;
        }
    }
    public function action_view($id=NULL)
    {
        if(isset($_POST["name"])&&$_POST["name"]!=NULL&&isset($_POST["comment"])&&$_POST["comment"]!=NULL)
        {
            if(isset($id))
            {
                $new = Model_Komentars::forge();
                $new->kokteilis_id=$id;
                $new->username = $_POST["name"];
                $new->comment=$_POST["comment"];
                $new->save();
            }
        }
        $nav = Model_Content::find('all');
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        $view=View::forge('drinks/view');
        if(isset($id))
        {
            $data =  Model_Kokteilis::find($id);
            $comp = Model_Ingredient::find('all', array('where'=>array('kokteilis_id'=>$id)));
            $coment = Model_Komentars::find('all',array('where'=>array('kokteilis_id'=>$id)));
            $view=View::forge('drinks/view');
            $view->set('cocktail',$data);
            $view->set('comp',$comp);
            $view->set('comments',$coment);
            $this->template->content=$view;
        }
    }
    public function  action_add()
    {
        $nav = Model_Content::find('all');
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        if(isset($_GET["amount1"]))
        {
            $new = Model_Kokteilis::forge();
            $new->name=$_GET["name"];
            $new->likes=0;
            $new->unlikes=0;
            $new->save();
            $rec = Model_Kokteilis::find('last',array('where'=> array('name'=>$_GET["name"])));
            $i=1;
            while(isset($_GET["amount".$i]))
            {
                $new=  Model_Ingredient::forge();
                $new->amount=$_GET["amount".$i];
                $new->ingredient=$_GET["ingredient".$i];
                $new->unit=$_GET["unit".$i];
                $new->kokteilis_id=$rec->id;
                $new->save();
                $i++;
            }
        }
        $view=View::forge('drinks/add');
        $this->template->content=$view;
    }
    
    public function action_about()
    {
        $nav = Model_Content::find('all');
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        $view=View::forge('drinks/about');
        $this->template->content=$view; 
    }
    
    public function  action_404()
    {
        $view=View::forge('drinks/404');
        $this->template->content=$view;
    }
    
    public function action_like($id=NULL)
    {
        $drink=  Model_Kokteilis::find($id);
        $drink->likes++;
        $drink->save();
        Response::redirect('drinks/view/'.$id);
    }
    public function action_dislike($id=NULL)
    {
        $drink=Model_Kokteilis::find($id);
        $drink->unlikes++;
        $drink->save();
        Response::redirect('drinks/view/'.$id);
    }
    
    
}

 
?>
