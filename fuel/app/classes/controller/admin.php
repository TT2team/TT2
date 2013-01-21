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
   
    
}

?>
