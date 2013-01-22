<?php

class Controller_Admin extends Controller_Template
{
    public function action_login()
    {
        
        $administrator = Model_Administrators::find('all');
        
        $fieldset = Fieldset::forge()->add_model('Model_Administrators');
	$form     = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Login', 'class' => 'btn medium primary'));
        $login=View::forge('admin/login');
        $login->set('form', $form->build(), false);
        
        
        $this->template->content=$login;
        
        if($fieldset->validation()->run() == true){     //esli projdena proverka na praviljnostj vvoda
            $fields = $fieldset->validated();   //fields, eto massiv s proverennimi poljami
            
            $login_success=false;
            foreach($administrator as $adm){
                if($adm->username == $fields['username'] and $adm->password == $fields['password']){
                    $login_success=true;
                    $_SESSION["id"]=$adm->id;
                    Response::redirect('admin/index');  //sdesj dolzhno bitj dejstvije, kotoroje vipolnitsja v slu4aje uspe6noj autentifikacii
                }
            }
            if($login_success==false){
                $login->set('message', 'Login or password incorrect', false);
            }else{
                $login->set('message', 'Everything ok', false);
            }
            
        }
        
        
      /*  
        $left_nav = View::forge('drinks/navigation');
        $left_nav->set('nav',$nav);
        $this->template->navigation=$left_nav;
        if(isset($page_id))
        {
           $data = Model_Content::find($id=$page_id);
           $view = View::forge('drinks/index');
           $view->set('data',$data);
           $this->template->content=$view;
        }
        else
        {
            $view = View::forge('drinks/index');
            $this->template->content=$view;
        }
    */    
    }
   public function action_index()
   {
        //if(!empty($_SESSION["id"])){
            $darbiba = Model_Darbiba::find('all');
            $index=View::forge('admin/index');
            $index->set('darbiba',$darbiba,false);
            
            
            
            $this->template->content=$index;
        //}else{
        //    Response::redirect('drinks/index');
        //}

           
   }
   
   public function action_newpage(){
       $fieldset = Fieldset::forge()->add_model('Model_Content');
	$form     = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
        $login=View::forge('admin/newpage');
        $login->set('form', $form->build(), false);
        $this->template->content=$login;
        
        if($fieldset->validation()->run() == true){     //esli projdena proverka na praviljnostj vvoda
            $fields = $fieldset->validated();   //fields, eto massiv s proverennimi poljami
            
            $new = new Model_Content();
            $new->name=$fields['name'];
            $new->text=$fields['text'];
            $new->picture_url=$fields['picture_url'];
            $new->save();
        }
   }
   
   public function action_editpage(){
        $cont = Model_Content::find(0); //eto s id==0
            $values_inside=array(  //eto vrodi dolzhno budet dobavitj v formu to, 4to uzhe jestj v baze dannih
                'name' => $cont->name,
                'text' => $cont->text,
                'picture_url' => $cont->picture_url,
            );
            
        
        
        $fieldset = Fieldset::forge()->add_model('Model_Content');
	$form     = $fieldset->form();
        $form->populate($values_inside);
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
        $login=View::forge('admin/newpage');
        $login->set('form', $form->build(), false);
        $this->template->content=$login;
        
        if($fieldset->validation()->run() == true){     //esli projdena proverka na praviljnostj vvoda
            $fields = $fieldset->validated();   //fields, eto massiv s proverennimi poljami
            
            $new = new Model_Content();
            $new->name=$fields['name'];
            $new->text=$fields['text'];
            $new->picture_url=$fields['picture_url'];
            $new->save();
        }
   }
    
}

?>
