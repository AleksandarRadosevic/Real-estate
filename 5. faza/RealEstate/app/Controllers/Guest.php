<?php namespace App\Controllers;

use App\Models\UserModel;

class Guest extends BaseController
{
	public function index()
	{
		echo view('../../public/index.html');
	}
        
        
        public function register(){
            $data=[];
            
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user
            $rules=[
                'username'=>'required|min_length[3]|max_length[30]',
                'lastname'=>'required|min_length[3]|max_length[30]',
                'password'=>'required|min_length[3]|max_length[30]',
                'passagain'=>'matches[password]',
                'email'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            ];
            
            if ($this->validate($rules)){
                $data['validation']=$this->validator;
            }
            else {
                $user=new UserModel();
                
                $values=[
                    'Username'=>$this->request->getVar('username'),
                    'Password'=>$this->request->getVar('password'),
                    'Email'=>$this->request->getVar('email'),
                    'Phone'=>$this->request->getVar('phone')
                ];
                $user->save($values);
                $session= session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('/');
            }
            
            
            //validation for 
            
              }
            
            
            echo view('register.php');
          
        }
        
        
}
