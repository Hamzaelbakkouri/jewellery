<?php

class Admins extends Controller{

    function __construct() {
        $this->admin=$this->model('Admin');
    }

    function geterror($data,$field)
    {
        if(empty($data[''.$field])){
            return 1;
        }
    }
    
    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $data=[
                'email'=>$email,
                'password'=>$password,
                'email_err'=>'',
                'password_err'=>'',
                'isTrue'=>''
            ];
        
            $errors = array("email", "password");
            $count_err=0;
            for($i=0;$i<count($errors);$i++){
                if($this->geterror($data,$errors[$i])==1){
                    $data[$errors[$i].'_err']='* '.$errors[$i].' is required';
                    $count_err++;
                }
            }
            if($count_err!=0){
                $this->view('connect',$data);
            }
            else{
                $res=$this->admin->login($email,$password);
                if($res==0){
                    $data['isTrue']="Email or password invalid";
                    $this->view('connect',$data);
                }
                else{
                    header("location:".URLROOT.'/pages/dashbord'."");
                    exit();
                }
            }
        }
    }

    public function logout(){
        if($this->admin->logout()==true){
            header("location:".URLROOT.'/pages/'."");
            exit();
        }
    }
}
